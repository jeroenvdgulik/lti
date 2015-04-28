<?php

namespace Lti;

class V1p1Builder implements V1p1BuilderInterface {

	protected $inst = [];

	public function build(){
		return new V1p1(
			$this->inst["lti_message_type"],
			$this->inst["lti_version"],
			$this->inst["resource_link_id"],
			$this->inst["resource_link_title"],
			$this->inst["resource_link_description"],
			$this->inst["user_id"],
			$this->inst["user_image"],
			$this->inst["roles"],
			$this->inst["lis_person_name_given"],
			$this->inst["lis_person_name_family"],
			$this->inst["lis_person_name_full"],
			$this->inst["lis_person_contact_email_primary"],
			$this->inst["context_id"],
			$this->inst["context_type"],
			$this->inst["context_title"],
			$this->inst["context_label"],
			$this->inst["launch_presentation_locale"],
			$this->inst["launch_presentation_document_target"],
			$this->inst["launch_presentation_css_url"],
			$this->inst["launch_resentation_width"],
			$this->inst["launch_resentation_height"],
			$this->inst["launch_resentation_return_url"],
			$this->inst["tool_consumer_info_product_family"],
			$this->inst["tool_consumer_info_version"],
			$this->inst["tool_consumer_instance_guid"],
			$this->inst["tool_consumer_instance_name"],
			$this->inst["tool_consumer_instance_description"],
			$this->inst["tool_consumer_instance_url"],
			$this->inst["tool_consumer_instance_contact_email"],
			$this->inst["lis_result_sourcedid"],
			$this->inst["lis_outcome_service_url"],
			$this->inst["lis_person_sourcedid"],
			$this->inst["lis_course_offering_sourceded"],
			$this->inst["lis_course_section_sourceded"],
			$this->inst["custom_"],
			$this->inst["ext_"]
		);
	}

	/**
	 * set the lti_message_type
	 * @param string $lti_message_type
	 */
	public function setLtiMessageType($lti_message_type){
		$this->inst["lti_message_type"] = $lti_message_type;
	}

	/**
	 * set the lti_version
	 * @param string $lti_version
	 */
	public function setLtiVersion($lti_version){
		$this->inst["lti_version"] = $lti_version;
	}

	/**
	 * set the resource_link_id
	 * @param string $resource_link_id
	 */
	public function setResourceLinkId($resource_link_id){
		$this->inst["resource_link_id"] = $resource_link_id;
	}

	/**
	 * set the resource_link_title
	 * @param string $resource_link_title
	 */
	public function setResourceLinkTitle($resource_link_title){
		$this->inst["resource_link_title"] = $resource_link_title;
	}

	/**
	 * set the resource_link_description
	 * @param string $resource_link_description
	 */
	public function setResourceLinkDescription($resource_link_description){
		$this->inst["resource_link_description"] = $resource_link_description;
	}

	/**
	 * set the user_id
	 * @param string $user_id
	 */
	public function setUserId($user_id){
		$this->inst["user_id"] = $user_id;
	}

	/**
	 * set the user_image
	 * @param string $user_image
	 */
	public function setUserImage($user_image){
		$this->inst["user_image"] = $user_image;
	}

	/**
	 * set the roles
	 * @param string $roles
	 */
	public function setRoles($roles){
		$this->inst["roles"] = $roles;
	}

	/**
	 * set the lis_person_name_given
	 * @param string $lis_person_name_given
	 */
	public function setLisPersonNameGiven($lis_person_name_given){
		$this->inst["lis_person_name_given"] = $lis_person_name_given;
	}

	/**
	 * set the lis_person_name_family
	 * @param string $lis_person_name_family
	 */
	public function setLisPersonNameFamily($lis_person_name_family){
		$this->inst["lis_person_name_family"] = $lis_person_name_family;
	}

	/**
	 * set the lis_person_name_full
	 * @param string $lis_person_name_full
	 */
	public function setLisPersonNameFull($lis_person_name_full){
		$this->inst["lis_person_name_full"] = $lis_person_name_full;
	}

	/**
	 * set the lis_person_contact_email_primary
	 * @param string $lis_person_contact_email_primary
	 */
	public function setLisPersonContactEmailPrimary($lis_person_contact_email_primary){
		$this->inst["lis_person_contact_email_primary"] = $lis_person_contact_email_primary;
	}

	/**
	 * set the context_id
	 * @param string $context_id
	 */
	public function setContextId($context_id){
		$this->inst["context_id"] = $context_id;
	}

	/**
	 * set the context_type
	 * @param string $context_type
	 */
	public function setContextType($context_type){
		$this->inst["context_type"] = $context_type;
	}

	/**
	 * set the context_title
	 * @param string $context_title
	 */
	public function setContextTitle($context_title){
		$this->inst["context_title"] = $context_title;
	}

	/**
	 * set the context_label
	 * @param string $context_label
	 */
	public function setContextLabel($context_label){
		$this->inst["context_label"] = $context_label;
	}

	/**
	 * set the launch_presentation_locale
	 * @param string $launch_presentation_locale
	 */
	public function setLaunchPresentationLocale($launch_presentation_locale){
		$this->inst["launch_presentation_locale"] = $launch_presentation_locale;
	}

	/**
	 * set the launch_presentation_document_target
	 * @param string $launch_presentation_document_target
	 */
	public function setLaunchPresentationDocumentTarget($launch_presentation_document_target){
		$this->inst["launch_presentation_document_target"] = $launch_presentation_document_target;
	}

	/**
	 * set the launch_presentation_css_url
	 * @param string $launch_presentation_css_url
	 */
	public function setLaunchPresentationCssUrl($launch_presentation_css_url){
		$this->inst["launch_presentation_css_url"] = $launch_presentation_css_url;
	}

	/**
	 * set the launch_resentation_width
	 * @param string $launch_resentation_width
	 */
	public function setLaunchResentationWidth($launch_resentation_width){
		$this->inst["launch_resentation_width"] = $launch_resentation_width;
	}

	/**
	 * set the launch_resentation_height
	 * @param string $launch_resentation_height
	 */
	public function setLaunchResentationHeight($launch_resentation_height){
		$this->inst["launch_resentation_height"] = $launch_resentation_height;
	}

	/**
	 * set the launch_resentation_return_url
	 * @param string $launch_resentation_return_url
	 */
	public function setLaunchResentationReturnUrl($launch_resentation_return_url){
		$this->inst["launch_resentation_return_url"] = $launch_resentation_return_url;
	}

	/**
	 * set the tool_consumer_info_product_family
	 * @param string $tool_consumer_info_product_family
	 */
	public function setToolConsumerInfoProductFamily($tool_consumer_info_product_family){
		$this->inst["tool_consumer_info_product_family"] = $tool_consumer_info_product_family;
	}

	/**
	 * set the tool_consumer_info_version
	 * @param string $tool_consumer_info_version
	 */
	public function setToolConsumerInfoVersion($tool_consumer_info_version){
		$this->inst["tool_consumer_info_version"] = $tool_consumer_info_version;
	}

	/**
	 * set the tool_consumer_instance_guid
	 * @param string $tool_consumer_instance_guid
	 */
	public function setToolConsumerInstanceGuid($tool_consumer_instance_guid){
		$this->inst["tool_consumer_instance_guid"] = $tool_consumer_instance_guid;
	}

	/**
	 * set the tool_consumer_instance_name
	 * @param string $tool_consumer_instance_name
	 */
	public function setToolConsumerInstanceName($tool_consumer_instance_name){
		$this->inst["tool_consumer_instance_name"] = $tool_consumer_instance_name;
	}

	/**
	 * set the tool_consumer_instance_description
	 * @param string $tool_consumer_instance_description
	 */
	public function setToolConsumerInstanceDescription($tool_consumer_instance_description){
		$this->inst["tool_consumer_instance_description"] = $tool_consumer_instance_description;
	}

	/**
	 * set the tool_consumer_instance_url
	 * @param string $tool_consumer_instance_url
	 */
	public function setToolConsumerInstanceUrl($tool_consumer_instance_url){
		$this->inst["tool_consumer_instance_url"] = $tool_consumer_instance_url;
	}

	/**
	 * set the tool_consumer_instance_contact_email
	 * @param string $tool_consumer_instance_contact_email
	 */
	public function setToolConsumerInstanceContactEmail($tool_consumer_instance_contact_email){
		$this->inst["tool_consumer_instance_contact_email"] = $tool_consumer_instance_contact_email;
	}

	/**
	 * set the lis_result_sourcedid
	 * @param string $lis_result_sourcedid
	 */
	public function setLisResultSourcedid($lis_result_sourcedid){
		$this->inst["lis_result_sourcedid"] = $lis_result_sourcedid;
	}

	/**
	 * set the lis_outcome_service_url
	 * @param string $lis_outcome_service_url
	 */
	public function setLisOutcomeServiceUrl($lis_outcome_service_url){
		$this->inst["lis_outcome_service_url"] = $lis_outcome_service_url;
	}

	/**
	 * set the lis_person_sourcedid
	 * @param string $lis_person_sourcedid
	 */
	public function setLisPersonSourcedid($lis_person_sourcedid){
		$this->inst["lis_person_sourcedid"] = $lis_person_sourcedid;
	}

	/**
	 * set the lis_course_offering_sourceded
	 * @param string $lis_course_offering_sourceded
	 */
	public function setLisCourseOfferingSourceded($lis_course_offering_sourceded){
		$this->inst["lis_course_offering_sourceded"] = $lis_course_offering_sourceded;
	}

	/**
	 * set the lis_course_section_sourceded
	 * @param string $lis_course_section_sourceded
	 */
	public function setLisCourseSectionSourceded($lis_course_section_sourceded){
		$this->inst["lis_course_section_sourceded"] = $lis_course_section_sourceded;
	}

	/**
	 * set custom params
	 * @param array $param An array of custom_key => value pair
	 */
	public function setCustomParams(array $params){
		foreach($params as $key => $value){
			$key = strtolower($key);
			if(strpos($key, "custom_") === 0){
				$this->inst["custom_"][$key] = $value;
			}
		}
	}

	/**
	 * $custom;
	 * @param array $param An array of ext_key => value pair
	 */
	public function setExtParams(array $params){
		foreach($params as $key => $value){
			$key = strtolower($key);
			if(strpos($key, "ext_") === 0){
				$this->inst["ext_"][$key] = $value;
			}
		}
	}

}