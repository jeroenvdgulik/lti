<?php

class SlimOauthTest extends \PHPUnit_Framework_TestCase {

	protected $clientSecret = "nosecrets";

	protected $endpoint = "http://myon.com/api/Lti/v1.1/accept.php";

	function getMockNonceMapper($nonce = null){
		// Create a stub for the SomeClass class.
		$stub = $this->getMockBuilder('Lti\\NonceMapper')
					 ->disableOriginalConstructor()
					 ->getMock();

		// Configure the stub.
		$stub->method('get')
			 ->willReturn($nonce);

		// Configure the stub.
		$stub->method('set')
			 ->willReturn(null);

		return $stub;
	}

	function test_setTimestampExpiration_no_expire(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	/**
	 * @expectedException \Lti\Exceptions\InvalidTimestampException
	 */
	function test_setTimestampExpiration_expire(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(1);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	/**
	 * @expectedException \Lti\Exceptions\InvalidHashMethodException
	 */
	function test_InvalidHashMethodException(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA256",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	/**
	 * @expectedException \Lti\Exceptions\InvalidCallbackException
	 */
	function test_InvalidCallbackException(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "BOOM",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	/**
	 * @expectedException \Lti\Exceptions\InvalidVersionException
	 */
	function test_InvalidVersionException(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA256",
			"oauth_version"          => "2.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	/**
	 * @expectedException \Lti\Exceptions\MissingRequiredParameterException
	 */
	function test_MissingRequiredParameterException(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	function test_createSignature_valid_nonce(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	/**
	 * @expectedException \Lti\Exceptions\InvalidNonceException
	 */
	function test_createSignature_invalid_nonce(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper("snarktastic"));
		$slimOauth->setTimestampExpiration(0);

		$sig = $slimOauth->createSignature($this->clientSecret, $params);

		$expected = "1rH7YxKkTzUZRrNafZ7K4BPs7s4=";

		$this->assertEquals($expected, $sig);

	}

	function test_verifySignature_true(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_signature"        => "1rH7YxKkTzUZRrNafZ7K4BPs7s4=",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$expected = $slimOauth->verifySignature($this->clientSecret, $params);

		$this->assertTrue($expected);

	}

	function test_verifySignature_false(){

		$params = [
			"oauth_nonce"            => "snarktastic",
			"oauth_timestamp"        => 1429803093,
			"oauth_consumer_key"     => "myonhasnokeys",
			"oauth_signature_method" => "HMAC-SHA1",
			"oauth_signature"        => "xxxxxxxxxxxxxxxxxxxxxxxxxxx=",
			"oauth_version"          => "1.0",
			"oauth_callback"         => "about:blank",
		];

		$slimOauth = new \Lti\SlimOauth($this->endpoint, $this->getMockNonceMapper());
		$slimOauth->setTimestampExpiration(0);

		$expected = $slimOauth->verifySignature($this->clientSecret, $params);

		$this->assertFalse($expected);

	}

}