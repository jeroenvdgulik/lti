<?php

require "vendor/autoload.php";

$params = [
		"oauth_nonce"             => md5(microtime()),
		"oauth_timestamp"         => time(),
		"oauth_consumer_key"      => "BILBO_BAGGINS_WUZ_HERE",
		"oauth_signature_method"  => "HMAC-SHA1",
		"oauth_version"           => "1.0",
		"lti_message_type"        => "VALUE ... lti_message_type",
		"lti_version"             => "VALUE ... lti_version",
		"resource_link_id"        => "VALUE ... resource_link_id",
		"user_id"                 => "VALUE ... user_id",
		"lis_outcome_service_url" => "http://this-is-a-url.com/",
		"context_id"              => "VALUE ... context_id",
		"lis_result_sourcedid"    => "VALUE ... lis_result_sourcedid",
		"ext_pet_peeve"           => "XML",
];

$director = new Lti\V1p1p1Director(new Lti\V1p1p1Builder);

$message = "SUCCESS!!";

try{
	$director->buildLtiRequest($params);
	$Obj3 = $director->getLtiRequest();
}catch(\Lti\LtiException $e){
	$message = $e->getMessage();
}

echo "\n{$message}\n\n";
