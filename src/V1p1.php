<?php

namespace Lti;

class V1p1 {

	protected $lti_message_type;
	protected $lti_version;
	protected $resource_link_id;
	protected $resource_link_title;
	protected $resource_link_description;
	protected $user_id;
	protected $user_image;
	protected $roles;
	protected $lis_person_name_given;
	protected $lis_person_name_family;
	protected $lis_person_name_full;
	protected $lis_person_contact_email_primary;
	protected $context_id;
	protected $context_type;
	protected $context_title;
	protected $context_label;
	protected $launch_presentation_locale;
	protected $launch_presentation_document_target;
	protected $launch_presentation_css_url;
	protected $launch_resentation_width;
	protected $launch_resentation_height;
	protected $launch_resentation_return_url;
	protected $tool_consumer_info_product_family;
	protected $tool_consumer_info_version;
	protected $tool_consumer_instance_guid;
	protected $tool_consumer_instance_name;
	protected $tool_consumer_instance_description;
	protected $tool_consumer_instance_url;
	protected $tool_consumer_instance_contact_email;

	protected $lis_result_sourcedid;
	protected $lis_outcome_service_url;
	protected $lis_person_sourcedid;
	protected $lis_course_offering_sourceded;
	protected $lis_course_section_sourceded;

	protected $custom = [];

	protected $ext = [];

	/**
	 * get the lti_message_type
	 */
	function getLtiMessageType(){
		return $this->lti_message_type;
	}

	/**
	 * set the lti_message_type
	 * @param string $lti_message_type
	 */
	function setLtiMessageType($lti_message_type){
		$this->lti_message_type = $lti_message_type;
	}

	/**
	 * get the lti_version
	 */
	function getLtiVersion(){
		return $this->lti_version;
	}

	/**
	 * set the lti_version
	 * @param string $lti_version
	 */
	function setLtiVersion($lti_version){
		$this->lti_version = $lti_version;
	}

	/**
	 * get the resource_link_id
	 */
	function getResourceLinkId(){
		return $this->resource_link_id;
	}

	/**
	 * set the resource_link_id
	 * @param string $resource_link_id
	 */
	function setResourceLinkId($resource_link_id){
		$this->resource_link_id = $resource_link_id;
	}

	/**
	 * get the resource_link_title
	 */
	function getResourceLinkTitle(){
		return $this->resource_link_title;
	}

	/**
	 * set the resource_link_title
	 * @param string $resource_link_title
	 */
	function setResourceLinkTitle($resource_link_title){
		$this->resource_link_title = $resource_link_title;
	}

	/**
	 * get the resource_link_description
	 */
	function getResourceLinkDescription(){
		return $this->resource_link_description;
	}

	/**
	 * set the resource_link_description
	 * @param string $resource_link_description
	 */
	function setResourceLinkDescription($resource_link_description){
		$this->resource_link_description = $resource_link_description;
	}

	/**
	 * get the user_id
	 */
	function getUserId(){
		return $this->user_id;
	}

	/**
	 * set the user_id
	 * @param string $user_id
	 */
	function setUserId($user_id){
		$this->user_id = $user_id;
	}

	/**
	 * get the user_image
	 */
	function getUserImage(){
		return $this->user_image;
	}

	/**
	 * set the user_image
	 * @param string $user_image
	 */
	function setUserImage($user_image){
		$this->user_image = $user_image;
	}

	/**
	 * get the roles
	 */
	function getRoles(){
		return $this->roles;
	}

	/**
	 * set the roles
	 * @param string $roles
	 */
	function setRoles($roles){
		$this->roles = $roles;
	}

	/**
	 * get the lis_person_name_given
	 */
	function getLisPersonNameGiven(){
		return $this->lis_person_name_given;
	}

	/**
	 * set the lis_person_name_given
	 * @param string $lis_person_name_given
	 */
	function setLisPersonNameGiven($lis_person_name_given){
		$this->lis_person_name_given = $lis_person_name_given;
	}

	/**
	 * get the lis_person_name_family
	 */
	function getLisPersonNameFamily(){
		return $this->lis_person_name_family;
	}

	/**
	 * set the lis_person_name_family
	 * @param string $lis_person_name_family
	 */
	function setLisPersonNameFamily($lis_person_name_family){
		$this->lis_person_name_family = $lis_person_name_family;
	}

	/**
	 * get the lis_person_name_full
	 */
	function getLisPersonNameFull(){
		return $this->lis_person_name_full;
	}

	/**
	 * set the lis_person_name_full
	 * @param string $lis_person_name_full
	 */
	function setLisPersonNameFull($lis_person_name_full){
		$this->lis_person_name_full = $lis_person_name_full;
	}

	/**
	 * get the lis_person_contact_email_primary
	 */
	function getLisPersonContactEmailPrimary(){
		return $this->lis_person_contact_email_primary;
	}

	/**
	 * set the lis_person_contact_email_primary
	 * @param string $lis_person_contact_email_primary
	 */
	function setLisPersonContactEmailPrimary($lis_person_contact_email_primary){
		$this->lis_person_contact_email_primary = $lis_person_contact_email_primary;
	}

	/**
	 * get the context_id
	 */
	function getContextId(){
		return $this->context_id;
	}

	/**
	 * set the context_id
	 * @param string $context_id
	 */
	function setContextId($context_id){
		$this->context_id = $context_id;
	}

	/**
	 * get the context_type
	 */
	function getContextType(){
		return $this->context_type;
	}

	/**
	 * set the context_type
	 * @param string $context_type
	 */
	function setContextType($context_type){
		$this->context_type = $context_type;
	}

	/**
	 * get the context_title
	 */
	function getContextTitle(){
		return $this->context_title;
	}

	/**
	 * set the context_title
	 * @param string $context_title
	 */
	function setContextTitle($context_title){
		$this->context_title = $context_title;
	}

	/**
	 * get the context_label
	 */
	function getContextLabel(){
		return $this->context_label;
	}

	/**
	 * set the context_label
	 * @param string $context_label
	 */
	function setContextLabel($context_label){
		$this->context_label = $context_label;
	}

	/**
	 * get the launch_presentation_locale
	 */
	function getLaunchPresentationLocale(){
		return $this->launch_presentation_locale;
	}

	/**
	 * set the launch_presentation_locale
	 * @param string $launch_presentation_locale
	 */
	function setLaunchPresentationLocale($launch_presentation_locale){
		$this->launch_presentation_locale = $launch_presentation_locale;
	}

	/**
	 * get the launch_presentation_document_target
	 */
	function getLaunchPresentationDocumentTarget(){
		return $this->launch_presentation_document_target;
	}

	/**
	 * set the launch_presentation_document_target
	 * @param string $launch_presentation_document_target
	 */
	function setLaunchPresentationDocumentTarget($launch_presentation_document_target){
		$this->launch_presentation_document_target = $launch_presentation_document_target;
	}

	/**
	 * get the launch_presentation_css_url
	 */
	function getLaunchPresentationCssUrl(){
		return $this->launch_presentation_css_url;
	}

	/**
	 * set the launch_presentation_css_url
	 * @param string $launch_presentation_css_url
	 */
	function setLaunchPresentationCssUrl($launch_presentation_css_url){
		$this->launch_presentation_css_url = $launch_presentation_css_url;
	}

	/**
	 * get the launch_resentation_width
	 */
	function getLaunchResentationWidth(){
		return $this->launch_resentation_width;
	}

	/**
	 * set the launch_resentation_width
	 * @param string $launch_resentation_width
	 */
	function setLaunchResentationWidth($launch_resentation_width){
		$this->launch_resentation_width = $launch_resentation_width;
	}

	/**
	 * get the launch_resentation_height
	 */
	function getLaunchResentationHeight(){
		return $this->launch_resentation_height;
	}

	/**
	 * set the launch_resentation_height
	 * @param string $launch_resentation_height
	 */
	function setLaunchResentationHeight($launch_resentation_height){
		$this->launch_resentation_height = $launch_resentation_height;
	}

	/**
	 * get the launch_resentation_return_url
	 */
	function getLaunchResentationReturnUrl(){
		return $this->launch_resentation_return_url;
	}

	/**
	 * set the launch_resentation_return_url
	 * @param string $launch_resentation_return_url
	 */
	function setLaunchResentationReturnUrl($launch_resentation_return_url){
		$this->launch_resentation_return_url = $launch_resentation_return_url;
	}

	/**
	 * get the tool_consumer_info_product_family
	 */
	function getToolConsumerInfoProductFamily(){
		return $this->tool_consumer_info_product_family;
	}

	/**
	 * set the tool_consumer_info_product_family
	 * @param string $tool_consumer_info_product_family
	 */
	function setToolConsumerInfoProductFamily($tool_consumer_info_product_family){
		$this->tool_consumer_info_product_family = $tool_consumer_info_product_family;
	}

	/**
	 * get the tool_consumer_info_version
	 */
	function getToolConsumerInfoVersion(){
		return $this->tool_consumer_info_version;
	}

	/**
	 * set the tool_consumer_info_version
	 * @param string $tool_consumer_info_version
	 */
	function setToolConsumerInfoVersion($tool_consumer_info_version){
		$this->tool_consumer_info_version = $tool_consumer_info_version;
	}

	/**
	 * get the tool_consumer_instance_guid
	 */
	function getToolConsumerInstanceGuid(){
		return $this->tool_consumer_instance_guid;
	}

	/**
	 * set the tool_consumer_instance_guid
	 * @param string $tool_consumer_instance_guid
	 */
	function setToolConsumerInstanceGuid($tool_consumer_instance_guid){
		$this->tool_consumer_instance_guid = $tool_consumer_instance_guid;
	}

	/**
	 * get the tool_consumer_instance_name
	 */
	function getToolConsumerInstanceName(){
		return $this->tool_consumer_instance_name;
	}

	/**
	 * set the tool_consumer_instance_name
	 * @param string $tool_consumer_instance_name
	 */
	function setToolConsumerInstanceName($tool_consumer_instance_name){
		$this->tool_consumer_instance_name = $tool_consumer_instance_name;
	}

	/**
	 * get the tool_consumer_instance_description
	 */
	function getToolConsumerInstanceDescription(){
		return $this->tool_consumer_instance_description;
	}

	/**
	 * set the tool_consumer_instance_description
	 * @param string $tool_consumer_instance_description
	 */
	function setToolConsumerInstanceDescription($tool_consumer_instance_description){
		$this->tool_consumer_instance_description = $tool_consumer_instance_description;
	}

	/**
	 * get the tool_consumer_instance_url
	 */
	function getToolConsumerInstanceUrl(){
		return $this->tool_consumer_instance_url;
	}

	/**
	 * set the tool_consumer_instance_url
	 * @param string $tool_consumer_instance_url
	 */
	function setToolConsumerInstanceUrl($tool_consumer_instance_url){
		$this->tool_consumer_instance_url = $tool_consumer_instance_url;
	}

	/**
	 * get the tool_consumer_instance_contact_email
	 */
	function getToolConsumerInstanceContactEmail(){
		return $this->tool_consumer_instance_contact_email;
	}

	/**
	 * set the tool_consumer_instance_contact_email
	 * @param string $tool_consumer_instance_contact_email
	 */
	function setToolConsumerInstanceContactEmail($tool_consumer_instance_contact_email){
		$this->tool_consumer_instance_contact_email = $tool_consumer_instance_contact_email;
	}


	/**
	 * get the lis_result_sourcedid
	 */
	function getLisResultSourcedid(){
		return $this->lis_result_sourcedid;
	}

	/**
	 * set the lis_result_sourcedid
	 * @param string $lis_result_sourcedid
	 */
	function setLisResultSourcedid($lis_result_sourcedid){
		$this->lis_result_sourcedid = $lis_result_sourcedid;
	}


	/**
	 * get the lis_outcome_service_url
	 */
	function getLisOutcomeServiceUrl(){
		return $this->lis_outcome_service_url;
	}

	/**
	 * set the lis_outcome_service_url
	 * @param string $lis_outcome_service_url
	 */
	function setLisOutcomeServiceUrl($lis_outcome_service_url){
		$this->lis_outcome_service_url = $lis_outcome_service_url;
	}


	/**
	 * get the lis_person_sourcedid
	 */
	function getLisPersonSourcedid(){
		return $this->lis_person_sourcedid;
	}

	/**
	 * set the lis_person_sourcedid
	 * @param string $lis_person_sourcedid
	 */
	function setLisPersonSourcedid($lis_person_sourcedid){
		$this->lis_person_sourcedid = $lis_person_sourcedid;
	}


	/**
	 * get the lis_course_offering_sourceded
	 */
	function getLisCourseOfferingSourceded(){
		return $this->lis_course_offering_sourceded;
	}

	/**
	 * set the lis_course_offering_sourceded
	 * @param string $lis_course_offering_sourceded
	 */
	function setLisCourseOfferingSourceded($lis_course_offering_sourceded){
		$this->lis_course_offering_sourceded = $lis_course_offering_sourceded;
	}


	/**
	 * get the lis_course_section_sourceded
	 */
	function getLisCourseSectionSourceded(){
		return $this->lis_course_section_sourceded;
	}

	/**
	 * set the lis_course_section_sourceded
	 * @param string $lis_course_section_sourceded
	 */
	function setLisCourseSectionSourceded($lis_course_section_sourceded){
		$this->lis_course_section_sourceded = $lis_course_section_sourceded;
	}

	/**
	 * get a custom param
	 * @param string $key The key to get
	 */
	function getCustomParam($key){
		if(isset($this->custom[$key])){
			return $this->custom[$key];
		}
	}

	/**
	 * get all custom params
	 */
	function getAllCustomParams(){
		return $this->custom;
	}

	/**
	 * set custom params
	 * @param array $param An array of custom_key => value pair
	 */
	function setCustomParams(array $params){
		foreach($params as $key => $value){
			$key = strtolower($key);
			if(strpos($key, "custom_") === 0){
				$this->custom[$key] = $value;
			}
		}
	}

	/**
	 * get a ext param
	 * @param string $key The key to get
	 */
	function getExtParam($key){
		if(isset($this->custom[$key])){
			return $this->ext[$key];
		}
	}

	/**
	 * get all ext params
	 */
	function getAllExtParams(){
		return $this->ext;
	}

	/**
	 * set ext params
	 * @param array $param An array of ext_key => value pair
	 */
	function setExtParams(array $params){
		foreach($params as $key => $value){
			$key = strtolower($key);
			if(strpos($key, "ext_") === 0){
				$this->ext[$key] = $value;
			}
		}
	}

}

