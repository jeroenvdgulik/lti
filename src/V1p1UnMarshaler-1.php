<?php

namespace Lti

class V1p1UnMarshaler {

	protected $required = [
		"lti_message_type" => "setLtiMessageType",
		"lti_version"      => "setLtiVersion",
		"resource_link_id" => "setResourceLinkId",
	];

	protected $optional = [
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
	];

	protected function makeNew(){
		return new V1p1;
	}

	function unMarshal(array $params){
		$Obj = $this->makeNew();

		foreach($this->required as $property => $method){
			if(!array_key_exists($property, $params) && !empty($params[$property])){
				throw new MissingRequiredParamterException("LTI v 1.1 requires the paramter '{$property}'.");
			}
			$Obj->$method($param[$propery]);
		}

		foreach($this->optional as $property => $method){
			if(array_key_exists($property, $params)){
				$Obj->$method($param[$propery]);
			}
		}

	}

}