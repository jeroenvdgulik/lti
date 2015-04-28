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

// $Obj1 = (new Lti\V1p1UnMarshaler1)->unMarshal($params);
// $Obj2 = (new Lti\V1p1UnMarshaler2)->unMarshal($params);

$director = new Lti\V1p1Director(new Lti\V1p1Builder);

$message = "SUCCESS!!";

try{
	$director->buildLtiRequest($params);
	$Obj3 = $director->getLtiRequest();
}catch(\Lti\LtiException $e){
	$message = $e->getMessage();
}

echo "\n{$message}\n\n";

/*

print(chunk_split(base64_encode(serialize($Obj3))));

Tzo4OiJMdGlcVjFwMSI6MzY6e3M6MTk6IgAqAGx0aV9tZXNzYWdlX3R5cGUiO3M6MjQ6IlZBTFVF
IC4uLiBMdGlNZXNzYWdlVHlwZSI7czoxNDoiACoAbHRpX3ZlcnNpb24iO3M6MjA6IlZBTFVFIC4u
LiBMdGlWZXJzaW9uIjtzOjE5OiIAKgByZXNvdXJjZV9saW5rX2lkIjtzOjI0OiJWQUxVRSAuLi4g
UmVzb3VyY2VMaW5rSWQiO3M6MjI6IgAqAHJlc291cmNlX2xpbmtfdGl0bGUiO3M6Mjc6IlZBTFVF
IC4uLiBSZXNvdXJjZUxpbmtUaXRsZSI7czoyODoiACoAcmVzb3VyY2VfbGlua19kZXNjcmlwdGlv
biI7czozMzoiVkFMVUUgLi4uIFJlc291cmNlTGlua0Rlc2NyaXB0aW9uIjtzOjEwOiIAKgB1c2Vy
X2lkIjtzOjE2OiJWQUxVRSAuLi4gVXNlcklkIjtzOjEzOiIAKgB1c2VyX2ltYWdlIjtzOjE5OiJW
QUxVRSAuLi4gVXNlckltYWdlIjtzOjg6IgAqAHJvbGVzIjtzOjE1OiJWQUxVRSAuLi4gUm9sZXMi
O3M6MjQ6IgAqAGxpc19wZXJzb25fbmFtZV9naXZlbiI7czoyODoiVkFMVUUgLi4uIExpc1BlcnNv
bk5hbWVHaXZlbiI7czoyNToiACoAbGlzX3BlcnNvbl9uYW1lX2ZhbWlseSI7czoyOToiVkFMVUUg
Li4uIExpc1BlcnNvbk5hbWVGYW1pbHkiO3M6MjM6IgAqAGxpc19wZXJzb25fbmFtZV9mdWxsIjtz
OjI3OiJWQUxVRSAuLi4gTGlzUGVyc29uTmFtZUZ1bGwiO3M6MzU6IgAqAGxpc19wZXJzb25fY29u
dGFjdF9lbWFpbF9wcmltYXJ5IjtzOjM4OiJWQUxVRSAuLi4gTGlzUGVyc29uQ29udGFjdEVtYWls
UHJpbWFyeSI7czoxMzoiACoAY29udGV4dF9pZCI7czoxOToiVkFMVUUgLi4uIENvbnRleHRJZCI7
czoxNToiACoAY29udGV4dF90eXBlIjtzOjIwOiJWQUxVRSAuLi4gQ29udGV4dFR5cCI7czoxNjoi
ACoAY29udGV4dF90aXRsZSI7czoyMjoiVkFMVUUgLi4uIENvbnRleHRUaXRsZSI7czoxNjoiACoA
Y29udGV4dF9sYWJlbCI7czoyMjoiVkFMVUUgLi4uIENvbnRleHRMYWJlbCI7czoyOToiACoAbGF1
bmNoX3ByZXNlbnRhdGlvbl9sb2NhbGUiO3M6MzQ6IlZBTFVFIC4uLiBMYXVuY2hQcmVzZW50YXRp
b25Mb2NhbGUiO3M6Mzg6IgAqAGxhdW5jaF9wcmVzZW50YXRpb25fZG9jdW1lbnRfdGFyZ2V0Ijtz
OjQyOiJWQUxVRSAuLi4gTGF1bmNoUHJlc2VudGF0aW9uRG9jdW1lbnRUYXJnZXQiO3M6MzA6IgAq
AGxhdW5jaF9wcmVzZW50YXRpb25fY3NzX3VybCI7czozNDoiVkFMVUUgLi4uIExhdW5jaFByZXNl
bnRhdGlvbkNzc1VybCI7czoyNzoiACoAbGF1bmNoX3Jlc2VudGF0aW9uX3dpZHRoIjtzOjMyOiJW
QUxVRSAuLi4gTGF1bmNoUmVzZW50YXRpb25XaWR0aCI7czoyODoiACoAbGF1bmNoX3Jlc2VudGF0
aW9uX2hlaWdodCI7czozMzoiVkFMVUUgLi4uIExhdW5jaFJlc2VudGF0aW9uSGVpZ2h0IjtzOjMy
OiIAKgBsYXVuY2hfcmVzZW50YXRpb25fcmV0dXJuX3VybCI7czozNjoiVkFMVUUgLi4uIExhdW5j
aFJlc2VudGF0aW9uUmV0dXJuVXJsIjtzOjM2OiIAKgB0b29sX2NvbnN1bWVyX2luZm9fcHJvZHVj
dF9mYW1pbHkiO3M6Mzk6IlZBTFVFIC4uLiBUb29sQ29uc3VtZXJJbmZvUHJvZHVjdEZhbWlseSI7
czoyOToiACoAdG9vbF9jb25zdW1lcl9pbmZvX3ZlcnNpb24iO3M6MzM6IlZBTFVFIC4uLiBUb29s
Q29uc3VtZXJJbmZvVmVyc2lvbiI7czozMDoiACoAdG9vbF9jb25zdW1lcl9pbnN0YW5jZV9ndWlk
IjtzOjM0OiJWQUxVRSAuLi4gVG9vbENvbnN1bWVySW5zdGFuY2VHdWlkIjtzOjMwOiIAKgB0b29s
X2NvbnN1bWVyX2luc3RhbmNlX25hbWUiO3M6MzQ6IlZBTFVFIC4uLiBUb29sQ29uc3VtZXJJbnN0
YW5jZU5hbWUiO3M6Mzc6IgAqAHRvb2xfY29uc3VtZXJfaW5zdGFuY2VfZGVzY3JpcHRpb24iO3M6
NDE6IlZBTFVFIC4uLiBUb29sQ29uc3VtZXJJbnN0YW5jZURlc2NyaXB0aW9uIjtzOjI5OiIAKgB0
b29sX2NvbnN1bWVyX2luc3RhbmNlX3VybCI7czozMzoiVkFMVUUgLi4uIFRvb2xDb25zdW1lcklu
c3RhbmNlVXJsIjtzOjM5OiIAKgB0b29sX2NvbnN1bWVyX2luc3RhbmNlX2NvbnRhY3RfZW1haWwi
O3M6NDI6IlZBTFVFIC4uLiBUb29sQ29uc3VtZXJJbnN0YW5jZUNvbnRhY3RFbWFpbCI7czoyMzoi
ACoAbGlzX3Jlc3VsdF9zb3VyY2VkaWQiO3M6Mjg6IlZBTFVFIC4uLiBMaXNSZXN1bHRTb3VyY2Vk
aWQiO3M6MjY6IgAqAGxpc19vdXRjb21lX3NlcnZpY2VfdXJsIjtzOjMwOiJWQUxVRSAuLi4gTGlz
T3V0Y29tZVNlcnZpY2VVcmwiO3M6MjM6IgAqAGxpc19wZXJzb25fc291cmNlZGlkIjtzOjI4OiJW
QUxVRSAuLi4gTGlzUGVyc29uU291cmNlZGlkIjtzOjMyOiIAKgBsaXNfY291cnNlX29mZmVyaW5n
X3NvdXJjZWRlZCI7czozNjoiVkFMVUUgLi4uIExpc0NvdXJzZU9mZmVyaW5nU291cmNlZGVkIjtz
OjMxOiIAKgBsaXNfY291cnNlX3NlY3Rpb25fc291cmNlZGVkIjtzOjM1OiJWQUxVRSAuLi4gTGlz
Q291cnNlU2VjdGlvblNvdXJjZWRlZCI7czo5OiIAKgBjdXN0b20iO2E6Mjp7czoxMDoiY3VzdG9t
X3BldCI7czozOiJkb2ciO3M6MTQ6ImN1c3RvbV9wZXRuYW1lIjtzOjU6Imdvb3NlIjt9czo2OiIA
KgBleHQiO2E6Mjp7czoxMzoiZXh0X3BldF9jb2xvciI7czo1OiJpdm9yeSI7czoxMzoiZXh0X3Bl
dF9wZWV2ZSI7czozOiJYTUwiO319

 */
