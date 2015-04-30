<?php

namespace Lti;

class V1p1p1Director {

	protected $builder;

	public function __construct(V1p1p1Builder $builder){
		$this->builder = $builder;
	}

	public function getLtiRequest(){
		return $this->builder->build();
	}

	public function buildLtiRequest(array $params){

		// REQUIRED
		////////////////////////////////////////////////////////////////////////

		if(isset($params["lti_message_type"])){
			$this->builder->setLtiMessageType($params["lti_message_type"]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.x requires the paramter 'lti_message_type'.");
		}

		if(isset($params["lti_version"])){
			$this->builder->setLtiVersion($params["lti_version"]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.x requires the paramter 'lti_version'.");
		}

		if(isset($params["resource_link_id"])){
			$this->builder->setResourceLinkId($params["resource_link_id"]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.x requires the paramter 'resource_link_id'.");
		}

		// RECOMMENDED or OPTIONAL
		////////////////////////////////////////////////////////////////////////

		$this->builder->setResourceLinkTitle($this->getKey($params, "resource_link_title"));

		$this->builder->setResourceLinkDescription($this->getKey($params, "resource_link_description"));

		$this->builder->setUserId($this->getKey($params, "user_id"));

		$this->builder->setUserImage($this->getKey($params, "user_image"));

		$this->builder->setRoles($this->getKey($params, "roles"));

		$this->builder->setRoleScopeMentor($this->getKey($params, "role_scope_mentor"));

		$this->builder->setLisPersonNameGiven($this->getKey($params, "lis_person_name_given"));

		$this->builder->setLisPersonNameFamily($this->getKey($params, "lis_person_name_family"));

		$this->builder->setLisPersonNameFull($this->getKey($params, "lis_person_name_full"));

		$this->builder->setLisPersonContactEmailPrimary($this->getKey($params, "lis_person_contact_email_primary"));

		$this->builder->setContextId($this->getKey($params, "context_id"));

		$this->builder->setContextType($this->getKey($params, "context_type"));

		$this->builder->setContextTitle($this->getKey($params, "context_title"));

		$this->builder->setContextLabel($this->getKey($params, "context_label"));

		$this->builder->setLaunchPresentationLocale($this->getKey($params, "launch_presentation_locale"));

		$this->builder->setLaunchPresentationDocumentTarget($this->getKey($params, "launch_presentation_document_target"));

		$this->builder->setLaunchPresentationCssUrl($this->getKey($params, "launch_presentation_css_url"));

		$this->builder->setLaunchPresentationWidth($this->getKey($params, "launch_presentation_width"));

		$this->builder->setLaunchPresentationHeight($this->getKey($params, "launch_presentation_height"));

		$this->builder->setLaunchPresentationReturnUrl($this->getKey($params, "launch_presentation_return_url"));

		$this->builder->setToolConsumerInfoProductFamilyCode($this->getKey($params, "tool_consumer_info_product_family_code"));

		$this->builder->setToolConsumerInfoVersion($this->getKey($params, "tool_consumer_info_version"));

		$this->builder->setToolConsumerInstanceGuid($this->getKey($params, "tool_consumer_instance_guid"));

		$this->builder->setToolConsumerInstanceName($this->getKey($params, "tool_consumer_instance_name"));

		$this->builder->setToolConsumerInstanceDescription($this->getKey($params, "tool_consumer_instance_description"));

		$this->builder->setToolConsumerInstanceUrl($this->getKey($params, "tool_consumer_instance_url"));

		$this->builder->setToolConsumerInstanceContactEmail($this->getKey($params, "tool_consumer_instance_contact_email"));

		$this->builder->setLisResultSourcedid($this->getKey($params, "lis_result_sourcedid"));

		$this->builder->setLisOutcomeServiceUrl($this->getKey($params, "lis_outcome_service_url"));

		$this->builder->setLisPersonSourcedid($this->getKey($params, "lis_person_sourcedid"));

		$this->builder->setLisCourseOfferingsourcedid($this->getKey($params, "lis_course_offering_sourcedid"));

		$this->builder->setLisCourseSectionsourcedid($this->getKey($params, "lis_course_section_sourcedid"));

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

	protected function getKey(array $params, $key){
		return isset($params[$key]) ? $params[$key] : null;
	}

}