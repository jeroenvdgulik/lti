<?php

require "vendor/autoload.php";

$params = [
		"oauth_nonce"                          => md5(microtime()),
		"oauth_timestamp"                      => time(),
		"oauth_consumer_key"                   => "BILBO_BAGGINS_WUZ_HERE",
		"oauth_signature_method"               => "HMAC-SHA1",
		"oauth_version"                        => "1.0",
		"lti_message_type"                     => "VALUE ... LtiMessageType",
		"lti_version"                          => "VALUE ... LtiVersion",
		"resource_link_id"                     => "VALUE ... ResourceLinkId",
		"resource_link_title"                  => "VALUE ... ResourceLinkTitle",
		"resource_link_description"            => "VALUE ... ResourceLinkDescription",
		"user_id"                              => "VALUE ... UserId",
		"user_image"                           => "VALUE ... UserImage",
		"roles"                                => "VALUE ... Roles",
		"lis_person_name_given"                => "VALUE ... LisPersonNameGiven",
		"lis_person_name_family"               => "VALUE ... LisPersonNameFamily",
		"lis_person_name_full"                 => "VALUE ... LisPersonNameFull",
		"lis_person_contact_email_primary"     => "VALUE ... LisPersonContactEmailPrimary",
		"context_id"                           => "VALUE ... ContextId",
		"context_type"                         => "VALUE ... ContextTyp",
		"context_title"                        => "VALUE ... ContextTitle",
		"context_label"                        => "VALUE ... ContextLabel",
		"launch_presentation_locale"           => "VALUE ... LaunchPresentationLocale",
		"launch_presentation_document_target"  => "VALUE ... LaunchPresentationDocumentTarget",
		"launch_presentation_css_url"          => "VALUE ... LaunchPresentationCssUrl",
		"launch_resentation_width"             => "VALUE ... LaunchResentationWidth",
		"launch_resentation_height"            => "VALUE ... LaunchResentationHeight",
		"launch_resentation_return_url"        => "VALUE ... LaunchResentationReturnUrl",
		"tool_consumer_info_product_family"    => "VALUE ... ToolConsumerInfoProductFamily",
		"tool_consumer_info_version"           => "VALUE ... ToolConsumerInfoVersion",
		"tool_consumer_instance_guid"          => "VALUE ... ToolConsumerInstanceGuid",
		"tool_consumer_instance_name"          => "VALUE ... ToolConsumerInstanceName",
		"tool_consumer_instance_description"   => "VALUE ... ToolConsumerInstanceDescription",
		"tool_consumer_instance_url"           => "VALUE ... ToolConsumerInstanceUrl",
		"tool_consumer_instance_contact_email" => "VALUE ... ToolConsumerInstanceContactEmail",
		"lis_result_sourcedid"                 => "VALUE ... LisResultSourcedid",
		"lis_outcome_service_url"              => "VALUE ... LisOutcomeServiceUrl",
		"lis_person_sourcedid"                 => "VALUE ... LisPersonSourcedid",
		"lis_course_offering_sourceded"        => "VALUE ... LisCourseOfferingSourceded",
		"lis_course_section_sourceded"         => "VALUE ... LisCourseSectionSourceded",
		"custom_pet"                           => "dog",
		"custom_petname"                       => "goose",
		"ext_pet_color"                        => "ivory",
		"ext_pet_peeve"                        => "XML",
];

$Obj1 = (new Lti\V1p1UnMarshaler1)->unMarshal($params);
$Obj2 = (new Lti\V1p1UnMarshaler2)->unMarshal($params);

$director = new Lti\V1p1Director(new Lti\V1p1Builder);
$director->buildLtiRequest($params);
$Obj3 = $director->getLtiRequest();

drop($Obj1 == $Obj3);