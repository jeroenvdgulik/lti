<?php

require "vendor/autoload.php";

$params = [
		"oauth_nonce"                          => md5(microtime()),
		"oauth_timestamp"                      => time(),
		"oauth_consumer_key"                   => "BILBO_BAGGINS_WUZ_HERE",
		"oauth_signature_method"               => "HMAC-SHA1",
		"oauth_version"                        => "1.0",
		"lti_message_type"                     => "setLtiMessageType",
		"lti_version"                          => "setLtiVersion",
		"resource_link_id"                     => "setResourceLinkId",
		"resource_link_title"                  => "setResourceLinkTitle",
		"resource_link_description"            => "setResourceLinkDescription",
		"user_id"                              => "setUserId",
		"user_image"                           => "setUserImage",
		"roles"                                => "setRoles",
		"lis_person_name_given"                => "setLisPersonNameGiven",
		"lis_person_name_family"               => "setLisPersonNameFamily",
		"lis_person_name_full"                 => "setLisPersonNameFull",
		"lis_person_contact_email_primary"     => "setLisPersonContactEmailPrimary",
		"context_id"                           => "setContextId",
		"context_type"                         => "setContextTyp",
		"context_title"                        => "setContextTitle",
		"context_label"                        => "setContextLabel",
		"launch_presentation_locale"           => "setLaunchPresentationLocale",
		"launch_presentation_document_target"  => "setLaunchPresentationDocumentTarget",
		"launch_presentation_css_url"          => "setLaunchPresentationCssUrl",
		"launch_resentation_width"             => "setLaunchResentationWidth",
		"launch_resentation_height"            => "setLaunchResentationHeight",
		"launch_resentation_return_url"        => "setLaunchResentationReturnUrl",
		"tool_consumer_info_product_family"    => "setToolConsumerInfoProductFamily",
		"tool_consumer_info_version"           => "setToolConsumerInfoVersion",
		"tool_consumer_instance_guid"          => "setToolConsumerInstanceGuid",
		"tool_consumer_instance_name"          => "setToolConsumerInstanceName",
		"tool_consumer_instance_description"   => "setToolConsumerInstanceDescription",
		"tool_consumer_instance_url"           => "setToolConsumerInstanceUrl",
		"tool_consumer_instance_contact_email" => "setToolConsumerInstanceContactEmail",
		"lis_result_sourcedid"                 => "setLisResultSourcedid",
		"lis_outcome_service_url"              => "setLisOutcomeServiceUrl",
		"lis_person_sourcedid"                 => "setLisPersonSourcedid",
		"lis_course_offering_sourceded"        => "setLisCourseOfferingSourceded",
		"lis_course_section_sourceded"         => "setLisCourseSectionSourceded",
		"custom_pet"                           => "dog",
		"custom_petname"                       => "goose",
		"ext_pet_color"                        => "ivory",
		"ext_pet_peeve"                        => "XML",
];

$Obj1 = (new Lti\V1p1UnMarshaler1)->unMarshal($params);
$Obj2 = (new Lti\V1p1UnMarshaler2)->unMarshal($params);

drop($Obj1 == $Obj2);