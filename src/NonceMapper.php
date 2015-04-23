<?php

namespace Lti;

class NonceMapper implements NonceMapperInterface {

	protected $db;

	function __construct($db){
		$this->db = $db;
	}

	function get($nonce){
		return $this->db->get($nonce);
	}

	function set($nonce, $value = ""){
		$this->db->set($nonce, $value, (\WM\ONE_MINUTE * 90), $redis::EXPIRE_EX);
	}

}