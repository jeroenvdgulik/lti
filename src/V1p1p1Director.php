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
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.1 requires the paramter 'lti_message_type'.");
		}

		if(isset($params["lti_version"])){
			$this->builder->setLtiVersion($params["lti_version"]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.1 requires the paramter 'lti_version'.");
		}

		if(isset($params["resource_link_id"])){
			$this->builder->setResourceLinkId($params["resource_link_id"]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.1 requires the paramter 'resource_link_id'.");
		}

		// RECOMMENDED or OPTIONAL
		////////////////////////////////////////////////////////////////////////

		$this->builder->setResourceLinkTitle(isset($params["resource_link_title"]) ? $params["resource_link_title"] : null);
		$this->builder->setResourceLinkDescription(isset($params["resource_link_description"]) ? $params["resource_link_description"] : null);
		$this->builder->setUserId(isset($params["user_id"]) ? $params["user_id"] : null);
		$this->builder->setUserImage(isset($params["user_image"]) ? $params["user_image"] : null);
		$this->builder->setRoles(isset($params["roles"]) ? $params["roles"] : null);
		$this->builder->setRoleScopeMentor(isset($params["role_scope_mentor"]) ? $params["role_scope_mentor"] : null);
		$this->builder->setLisPersonNameGiven(isset($params["lis_person_name_given"]) ? $params["lis_person_name_given"] : null);
		$this->builder->setLisPersonNameFamily(isset($params["lis_person_name_family"]) ? $params["lis_person_name_family"] : null);
		$this->builder->setLisPersonNameFull(isset($params["lis_person_name_full"]) ? $params["lis_person_name_full"] : null);
		$this->builder->setLisPersonContactEmailPrimary(isset($params["lis_person_contact_email_primary"]) ? $params["lis_person_contact_email_primary"] : null);
		$this->builder->setContextId(isset($params["context_id"]) ? $params["context_id"] : null);
		$this->builder->setContextType(isset($params["context_type"]) ? $params["context_type"] : null);
		$this->builder->setContextTitle(isset($params["context_title"]) ? $params["context_title"] : null);
		$this->builder->setContextLabel(isset($params["context_label"]) ? $params["context_label"] : null);
		$this->builder->setLaunchPresentationLocale(isset($params["launch_presentation_locale"]) ? $params["launch_presentation_locale"] : null);
		$this->builder->setLaunchPresentationDocumentTarget(isset($params["launch_presentation_document_target"]) ? $params["launch_presentation_document_target"] : null);
		$this->builder->setLaunchPresentationCssUrl(isset($params["launch_presentation_css_url"]) ? $params["launch_presentation_css_url"] : null);
		$this->builder->setLaunchPresentationWidth(isset($params["launch_presentation_width"]) ? $params["launch_presentation_width"] : null);
		$this->builder->setLaunchPresentationHeight(isset($params["launch_presentation_height"]) ? $params["launch_presentation_height"] : null);
		$this->builder->setLaunchPresentationReturnUrl(isset($params["launch_presentation_return_url"]) ? $params["launch_presentation_return_url"] : null);
		$this->builder->setToolConsumerInfoProductFamilyCode(isset($params["tool_consumer_info_product_family_code"]) ? $params["tool_consumer_info_product_family_code"] : null);
		$this->builder->setToolConsumerInfoVersion(isset($params["tool_consumer_info_version"]) ? $params["tool_consumer_info_version"] : null);
		$this->builder->setToolConsumerInstanceGuid(isset($params["tool_consumer_instance_guid"]) ? $params["tool_consumer_instance_guid"] : null);
		$this->builder->setToolConsumerInstanceName(isset($params["tool_consumer_instance_name"]) ? $params["tool_consumer_instance_name"] : null);
		$this->builder->setToolConsumerInstanceDescription(isset($params["tool_consumer_instance_description"]) ? $params["tool_consumer_instance_description"] : null);
		$this->builder->setToolConsumerInstanceUrl(isset($params["tool_consumer_instance_url"]) ? $params["tool_consumer_instance_url"] : null);
		$this->builder->setToolConsumerInstanceContactEmail(isset($params["tool_consumer_instance_contact_email"]) ? $params["tool_consumer_instance_contact_email"] : null);
		$this->builder->setLisResultSourcedid(isset($params["lis_result_sourcedid"]) ? $params["lis_result_sourcedid"] : null);
		$this->builder->setLisOutcomeServiceUrl(isset($params["lis_outcome_service_url"]) ? $params["lis_outcome_service_url"] : null);
		$this->builder->setLisPersonSourcedid(isset($params["lis_person_sourcedid"]) ? $params["lis_person_sourcedid"] : null);
		$this->builder->setLisCourseOfferingsourcedid(isset($params["lis_course_offering_sourcedid"]) ? $params["lis_course_offering_sourcedid"] : null);
		$this->builder->setLisCourseSectionsourcedid(isset($params["lis_course_section_sourcedid"]) ? $params["lis_course_section_sourcedid"] : null);

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