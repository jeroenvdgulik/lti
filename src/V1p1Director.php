<?php

namespace Lti;

class V1p1Director {

	protected $builder;

	public function __construct(V1p1BuilderInterface $builder){
		$this->builder = $builder;
	}

	function getLtiRequest(){
		return $this->builder->build();
	}

	function buildLtiRequest(array $params){

		// REQUIRED
		////////////////////////////////////////////////////////////////////////

		if(isset($params["lti_message_type"])){
			$this->builder->setLtiMessageType($params["lti_message_type"]);
		}else{
			throw new MissingRequiredParamterException("LTI v 1.1 requires the paramter 'lti_message_type'.");
		}

		if(isset($params["lti_version"])){
			$this->builder->setLtiVersion($params["lti_version"]);
		}else{
			throw new MissingRequiredParamterException("LTI v 1.1 requires the paramter 'lti_version'.");
		}

		if(isset($params["resource_link_id"])){
			$this->builder->setResourceLinkId($params["resource_link_id"]);
		}else{
			throw new MissingRequiredParamterException("LTI v 1.1 requires the paramter 'resource_link_id'.");
		}

		// RECOMMENDED or OPTIONAL
		////////////////////////////////////////////////////////////////////////

		if(isset($params["resource_link_title"])){
			$this->builder->setResourceLinkTitle($params["resource_link_title"]);
		}

		if(isset($params["resource_link_description"])){
			$this->builder->setResourceLinkDescription($params["resource_link_description"]);
		}

		if(isset($params["user_id"])){
			$this->builder->setUserId($params["user_id"]);
		}

		if(isset($params["user_image"])){
			$this->builder->setUserImage($params["user_image"]);
		}

		if(isset($params["roles"])){
			$this->builder->setRoles($params["roles"]);
		}

		if(isset($params["lis_person_name_given"])){
			$this->builder->setLisPersonNameGiven($params["lis_person_name_given"]);
		}

		if(isset($params["lis_person_name_family"])){
			$this->builder->setLisPersonNameFamily($params["lis_person_name_family"]);
		}

		if(isset($params["lis_person_name_full"])){
			$this->builder->setLisPersonNameFull($params["lis_person_name_full"]);
		}

		if(isset($params["lis_person_contact_email_primary"])){
			$this->builder->setLisPersonContactEmailPrimary($params["lis_person_contact_email_primary"]);
		}

		if(isset($params["context_id"])){
			$this->builder->setContextId($params["context_id"]);
		}

		if(isset($params["context_type"])){
			$this->builder->setContextType($params["context_type"]);
		}

		if(isset($params["context_title"])){
			$this->builder->setContextTitle($params["context_title"]);
		}

		if(isset($params["context_label"])){
			$this->builder->setContextLabel($params["context_label"]);
		}

		if(isset($params["launch_presentation_locale"])){
			$this->builder->setLaunchPresentationLocale($params["launch_presentation_locale"]);
		}

		if(isset($params["launch_presentation_document_target"])){
			$this->builder->setLaunchPresentationDocumentTarget($params["launch_presentation_document_target"]);
		}

		if(isset($params["launch_presentation_css_url"])){
			$this->builder->setLaunchPresentationCssUrl($params["launch_presentation_css_url"]);
		}

		if(isset($params["launch_presentation_width"])){
			$this->builder->setLaunchPresentationWidth($params["launch_presentation_width"]);
		}

		if(isset($params["launch_presentation_height"])){
			$this->builder->setLaunchPresentationHeight($params["launch_presentation_height"]);
		}

		if(isset($params["launch_presentation_return_url"])){
			$this->builder->setLaunchPresentationReturnUrl($params["launch_presentation_return_url"]);
		}

		if(isset($params["tool_consumer_info_product_family"])){
			$this->builder->setToolConsumerInfoProductFamily($params["tool_consumer_info_product_family"]);
		}

		if(isset($params["tool_consumer_info_version"])){
			$this->builder->setToolConsumerInfoVersion($params["tool_consumer_info_version"]);
		}

		if(isset($params["tool_consumer_instance_guid"])){
			$this->builder->setToolConsumerInstanceGuid($params["tool_consumer_instance_guid"]);
		}

		if(isset($params["tool_consumer_instance_name"])){
			$this->builder->setToolConsumerInstanceName($params["tool_consumer_instance_name"]);
		}

		if(isset($params["tool_consumer_instance_description"])){
			$this->builder->setToolConsumerInstanceDescription($params["tool_consumer_instance_description"]);
		}

		if(isset($params["tool_consumer_instance_url"])){
			$this->builder->setToolConsumerInstanceUrl($params["tool_consumer_instance_url"]);
		}

		if(isset($params["tool_consumer_instance_contact_email"])){
			$this->builder->setToolConsumerInstanceContactEmail($params["tool_consumer_instance_contact_email"]);
		}

		if(isset($params["lis_result_sourcedid"])){
			$this->builder->setLisResultSourcedid($params["lis_result_sourcedid"]);
		}

		if(isset($params["lis_outcome_service_url"])){
			$this->builder->setLisOutcomeServiceUrl($params["lis_outcome_service_url"]);
		}

		if(isset($params["lis_person_sourcedid"])){
			$this->builder->setLisPersonSourcedid($params["lis_person_sourcedid"]);
		}

		if(isset($params["lis_course_offering_sourcedid"])){
			$this->builder->setLisCourseOfferingsourcedid($params["lis_course_offering_sourcedid"]);
		}

		if(isset($params["lis_course_section_sourcedid"])){
			$this->builder->setLisCourseSectionsourcedid($params["lis_course_section_sourcedid"]);
		}

		$custom = [];
		foreach($params as $key => $value){
			if(stripos($key, "custom_") === 0){
				$custom[$key] = $value;
			}
		}

		$this->builder->setCustomParams($custom);

		$ext = [];
		foreach($params as $key => $value){
			if(stripos($key, "ext_") === 0){
				$ext[$key] = $value;
			}
		}

		$this->builder->setExtParams($ext);
	}
}