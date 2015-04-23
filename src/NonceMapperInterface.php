<?php

namespace Lti;

interface NonceMapperInterface {

	function get($nonce);

	function set($nonce);

}