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
	 *
	 */
	public function __construct($endpoint, NonceMapperInterface $nonceMapper){
		$this->setEndpoint($endpoint);
		$this->nonceMapper = $nonceMapper;
	}

	/**
	 *
	 */
	public function setEndpoint($endpoint){
		$this->endpoint = $endpoint;
	}

	/**
	 *
	 */
	public function setClientSecret($clientSecret){
		$this->clientSecret = $clientSecret;
	}

	/**
	 *
	 */
	public function setTimestampExpiration($minutes){
		$this->timestampExpiration = $minutes;
	}

	/**
	 *
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
	 *
	 */
	public function createSignature($clientSecret, array $params){
		$this->setClientSecret($clientSecret);

		$body = $this->makeSignatureBody($params);
		$sig  = $this->makeSigningKey();
		return $this->createHash($body, $sig);

	}

	/**
	 *
	 */
	protected function createHash($body, $signingKey) {
		return base64_encode(hash_hmac('sha1', $body, $signingKey, true));
	}

	/**
	 * @param string $clientSecret The client secret
	 * @param string $tokenSecret **UNUSED** by LTI, but part of the Oauth Spec
	 */
	protected function makeSigningKey($tokenSecret = '') {
		return sprintf("%s&%s", rawurlencode($this->clientSecret), rawurlencode($tokenSecret));
	}

	/**
	 *
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
	 *
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
	 *
	 */
	protected function validateNonce($nonce) {
		if($this->nonceMapper->get($nonce) !== null){
			throw new Exceptions\InvalidNonceException("Nonce '{$nonce}' has already been used.");
		}

		$this->nonceMapper->set($nonce, time());
	}

	/**
	 *
	 */
	protected function validateTimestamp($timestamp) {
		$expire = $this->timestampExpiration;
		$maxAge = \WM\ONE_MINUTE * $expire;
		if( $expire && ( ( time() - $maxAge ) > $timestamp) ){
			throw new Exceptions\InvalidTimestampException("Timestamp is expired.");
		}
	}

	/**
	 *
	 */
	protected function validateVersion($version) {
		if ($version != self::VERSION) {
			throw new Exceptions\InvalidVersionException("Oauth '{$version}' is not supported.");
		}
	}

	/**
	 *
	 */
	protected function validateSigningMethod($method) {
		if ($method != self::METHOD) {
			throw new Exceptions\InvalidHashMethodException("Current implementation only supports ".self::METHOD.".");
		}
	}

	/**
	 *
	 */
	protected function validateCallback($callbackUrl) {
		if ($callbackUrl != self::CALLBACK) {
			throw new Exceptions\InvalidCallbackException("Current implementation does not support OAuth callbacks");
		}

	}

}