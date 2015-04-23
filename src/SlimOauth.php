<?php

namespace Lti;

class SlimOauth {

	const VERSION  = '1.0';
	const METHOD   = 'HMAC-SHA1';
	const CALLBACK = 'about:blank';

	protected $endpoint;

	protected $clientSecret;

	protected $nonceMapper;

	/**
	 * timstamps older than 3 min (default) are expired
	 */
	protected $timestampExpiration = 3;

	private $requiredKeys = array(
		"oauth_nonce",
		"oauth_timestamp",
		"oauth_consumer_key",
		"oauth_signature_method",
		"oauth_version"
	);

	/**
	 * the general use case is tied to a specific request
	 * @param string $endpoint The requested endpoint to use in signing
	 * @param NonceMapperInterface $$nonmapper The data source for checking nonces
	 */
	public function __construct($endpoint, NonceMapperInterface $nonceMapper){
		$this->setEndpoint($endpoint);
		$this->nonceMapper = $nonceMapper;
	}

	/**
	 * protected properties that *could* change given certain use cases should have
	 * an accessor method
	 * @param string $endopint The URL to use in the signature
	 */
	public function setEndpoint($endpoint){
		$this->endpoint = $endpoint;
	}

	/**
	 * protected properties that *could* change given certain use cases should have
	 * an accessor method
	 * @param string $clientSecret The client secret to use for the signing key
	 */
	public function setClientSecret($clientSecret){
		$this->clientSecret = $clientSecret;
	}

	/**
	 * this allows the adjustment of the timestamp tolerance (in minutes). a 0 (zero)
	 * value means no expiration
	 * @param numeric $minutes The max age in minutes of a valid timestamp
	 */
	public function setTimestampExpiration($minutes){
		$this->timestampExpiration = $minutes;
	}

	/**
	 * method to take an array of params and a client secret and validate the oauth_signature
	 * @param string $clientSecret The client secret to use for the signing key
	 * @param array $params The array of both required and additional params sent as the payload
	 */
	public function verifySignature($clientSecret, array $params){
		if(!isset($params["oauth_signature"])){
			throw new Exceptions\MissingRequiredParameterException("Oauth signing requires an oauth_signature.");
		}

		$existingSig  = $params["oauth_signature"];
		$recreatedSig = $this->createSignature($clientSecret, $params);
		if($recreatedSig == $existingSig){
			return true;
		}
		return false;
	}

	/**
	 * create a signature hash based on the given array of both required and additional
	 * params
	 * @param string $clientSecret The client secret to use for the signing key
	 * @param array $params The array of both required and additional params used for the signature
	 */
	public function createSignature($clientSecret, array $params){
		$this->setClientSecret($clientSecret);

		$body = $this->makeSignatureBody($params);
		$sig  = $this->makeSigningKey();
		return $this->createHash($body, $sig);

	}

	/**
	 * create the signature hash
	 * @param string $body The properly formatted string of request params
	 * @param  string $signingKey The key use to sign the hash
	 */
	protected function createHash($body, $signingKey) {
		return base64_encode(hash_hmac('sha1', $body, $signingKey, true));
	}

	/**
	 * combine a known secret and token specific secret to create a signing key
	 * @param string $tokenSecret **UNUSED** by LTI, but part of the Oauth Spec
	 */
	protected function makeSigningKey($tokenSecret = '') {
		return sprintf("%s&%s", rawurlencode($this->clientSecret), rawurlencode($tokenSecret));
	}

	/**
	 * properly encode and concat paramters to create the reqeust body used in creating
	 * a signature
	 * @param array $params The array of both required and additional params used for the signature
	 * @param string $method The HTTP verb of the request
	 */
	protected function makeSignatureBody(array $params, $method = 'POST') {

		$this->validateRequiredParameters($params);

		$sigParams = [];
		foreach ($params as $key => $value) {
			if ($key == 'oauth_signature') {
				continue;
			}
			$sigParams[] = rawurlencode($key).'='.rawurlencode($value);
		}

		sort($sigParams);

		return sprintf('%s&%s&%s',
			strtoupper(trim($method)),
			rawurlencode($this->endpoint),
			rawurlencode( implode('&', $sigParams) )
		);
	}

	/**
	 * take an array of params and verify the presence of the required params and validate
	 * the format of the ones that dictate a format
	 * @param array $params The array of both required params used for the signature
	 */
	protected function validateRequiredParameters(array $params) {
		foreach($this->requiredKeys as $key){
			if(!array_key_exists($key, $params)){
				throw new Exceptions\MissingRequiredParameterException("Oauth signing requires an {$key}.");
			}
		}

		$this->validateNonce($params["oauth_nonce"]);
		$this->validateTimestamp($params["oauth_timestamp"]);
		$this->validateVersion($params["oauth_version"]);
		$this->validateSigningMethod($params["oauth_signature_method"]);
		if(isset($params["oauth_callback"])){
			$this->validateCallback($params["oauth_callback"]);
		}

	}

	/**
	 * check to see if the nonce is valid
	 * @param string $nonce The only-used-once value to check
	 */
	protected function validateNonce($nonce) {
		if($this->nonceMapper->get($nonce) !== null){
			throw new Exceptions\InvalidNonceException("Nonce '{$nonce}' has already been used.");
		}

		$this->nonceMapper->set($nonce, time());
	}

	/**
	 * timestamps should have a max age, check it here
	 * @param string $timestamp The timestamp to check
	 */
	protected function validateTimestamp($timestamp) {
		$expire = $this->timestampExpiration;
		$maxAge = \WM\ONE_MINUTE * $expire;
		if( $expire && ( ( time() - $maxAge ) > $timestamp) ){
			throw new Exceptions\InvalidTimestampException("Timestamp is expired.");
		}
	}

	/**
	 * enforce the use of oauth 1.0
	 * @param string $version The string of the version
	 */
	protected function validateVersion($version) {
		if ($version != self::VERSION) {
			throw new Exceptions\InvalidVersionException("Oauth '{$version}' is not supported.");
		}
	}

	/**
	 * enforce the use of HMAC-SHA1
	 * @param string $method The hashing method
	 */
	protected function validateSigningMethod($method) {
		if ($method != self::METHOD) {
			throw new Exceptions\InvalidHashMethodException("Current implementation only supports ".self::METHOD.".");
		}
	}

	/**
	 * if a callback is provided, make sure it's meaningless
	 * @param string $callback The URL for the callback
	 */
	protected function validateCallback($callback) {
		if ($callback != self::CALLBACK) {
			throw new Exceptions\InvalidCallbackException("Current implementation does not support OAuth callbacks");
		}

	}

}