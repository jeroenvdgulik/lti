<?php

namespace Lti;

class V1p0 implements V1p0Interface {

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
	protected $launch_presentation_width;
	protected $launch_presentation_height;
	protected $launch_presentation_return_url;
	protected $tool_consumer_instance_guid;
	protected $tool_consumer_instance_name;
	protected $tool_consumer_instance_description;
	protected $tool_consumer_instance_url;
	protected $tool_consumer_instance_contact_email;
	protected $lis_result_sourcedid;
	protected $lis_person_sourcedid;
	protected $lis_course_offering_sourcedid;
	protected $lis_course_section_sourcedid;
	protected $custom = [];
	protected $ext = [];

	/**
	 * get the lti_message_type
	 */
	public function getLtiMessageType(){
		return $this->lti_message_type;
	}

	/**
	 * get the lti_version
	 */
	public function getLtiVersion(){
		return $this->lti_version;
	}

	/**
	 * get the resource_link_id
	 */
	public function getResourceLinkId(){
		return $this->resource_link_id;
	}

	/**
	 * get the resource_link_title
	 */
	public function getResourceLinkTitle(){
		return $this->resource_link_title;
	}

	/**
	 * get the resource_link_description
	 */
	public function getResourceLinkDescription(){
		return $this->resource_link_description;
	}

	/**
	 * get the user_id
	 */
	public function getUserId(){
		return $this->user_id;
	}

	/**
	 * get the user_image
	 */
	public function getUserImage(){
		return $this->user_image;
	}

	/**
	 * get the roles
	 */
	public function getRoles(){
		return $this->roles;
	}

	/**
	 * get the lis_person_name_given
	 */
	public function getLisPersonNameGiven(){
		return $this->lis_person_name_given;
	}

	/**
	 * get the lis_person_name_family
	 */
	public function getLisPersonNameFamily(){
		return $this->lis_person_name_family;
	}

	/**
	 * get the lis_person_name_full
	 */
	public function getLisPersonNameFull(){
		return $this->lis_person_name_full;
	}

	/**
	 * get the lis_person_contact_email_primary
	 */
	public function getLisPersonContactEmailPrimary(){
		return $this->lis_person_contact_email_primary;
	}

	/**
	 * get the context_id
	 */
	public function getContextId(){
		return $this->context_id;
	}

	/**
	 * get the context_type
	 */
	public function getContextType(){
		return $this->context_type;
	}

	/**
	 * get the context_title
	 */
	public function getContextTitle(){
		return $this->context_title;
	}

	/**
	 * get the context_label
	 */
	public function getContextLabel(){
		return $this->context_label;
	}

	/**
	 * get the launch_presentation_locale
	 */
	public function getLaunchPresentationLocale(){
		return $this->launch_presentation_locale;
	}

	/**
	 * get the launch_presentation_document_target
	 */
	public function getLaunchPresentationDocumentTarget(){
		return $this->launch_presentation_document_target;
	}

	/**
	 * get the launch_presentation_width
	 */
	public function getLaunchPresentationWidth(){
		return $this->launch_presentation_width;
	}

	/**
	 * get the launch_presentation_height
	 */
	public function getLaunchPresentationHeight(){
		return $this->launch_presentation_height;
	}

	/**
	 * get the launch_presentation_return_url
	 */
	public function getLaunchPresentationReturnUrl(){
		return $this->launch_presentation_return_url;
	}

	/**
	 * get the tool_consumer_instance_guid
	 */
	public function getToolConsumerInstanceGuid(){
		return $this->tool_consumer_instance_guid;
	}

	/**
	 * get the tool_consumer_instance_name
	 */
	public function getToolConsumerInstanceName(){
		return $this->tool_consumer_instance_name;
	}

	/**
	 * get the tool_consumer_instance_description
	 */
	public function getToolConsumerInstanceDescription(){
		return $this->tool_consumer_instance_description;
	}

	/**
	 * get the tool_consumer_instance_url
	 */
	public function getToolConsumerInstanceUrl(){
		return $this->tool_consumer_instance_url;
	}

	/**
	 * get the tool_consumer_instance_contact_email
	 */
	public function getToolConsumerInstanceContactEmail(){
		return $this->tool_consumer_instance_contact_email;
	}

	/**
	 * get the lis_result_sourcedid
	 */
	public function getLisResultSourcedid(){
		return $this->lis_result_sourcedid;
	}

	/**
	 * get the lis_person_sourcedid
	 */
	public function getLisPersonSourcedid(){
		return $this->lis_person_sourcedid;
	}

	/**
	 * get the lis_course_offering_sourcedid
	 */
	public function getLisCourseOfferingsourcedid(){
		return $this->lis_course_offering_sourcedid;
	}

	/**
	 * get the lis_course_section_sourcedid
	 */
	public function getLisCourseSectionsourcedid(){
		return $this->lis_course_section_sourcedid;
	}

	/**
	 * get a custom param
	 * @param string $key The key to get
	 */
	public function getCustomParam($key){
		if(isset($this->custom[$key])){
			return $this->custom[$key];
		}
	}

	/**
	 * get all custom params
	 */
	public function getAllCustomParams(){
		return $this->custom;
	}

	/**
	 * get a ext param
	 * @param string $key The key to get
	 */
	public function getExtParam($key){
		if(isset($this->ext[$key])){
			return $this->ext[$key];
		}
	}

	/**
	 * get all ext params
	 */
	public function getAllExtParams(){
		return $this->ext;
	}

	public function __construct(
		$lti_message_type,
		$lti_version,
		$resource_link_id,
		$resource_link_title,
		$resource_link_description,
		$user_id,
		$user_image,
		$roles,
		$tool_consumer_instance_guid,
		$tool_consumer_instance_name,
		$tool_consumer_instance_description,
		$tool_consumer_instance_url,
		$tool_consumer_instance_contact_email,
		$lis_person_sourcedid,
		$lis_course_offering_sourcedid,
		$lis_course_section_sourcedid,
		$lis_result_sourcedid,
		$lis_person_name_given,
		$lis_person_name_family,
		$lis_person_name_full,
		$lis_person_contact_email_primary,
		$context_id,
		$context_type,
		$context_title,
		$context_label,
		$launch_presentation_locale,
		$launch_presentation_document_target,
		$launch_presentation_width,
		$launch_presentation_height,
		$launch_presentation_return_url,
		array $custom_,
		array $ext_
	){
		$this->lti_message_type                     = $lti_message_type;
		$this->lti_version                          = $lti_version;
		$this->resource_link_id                     = $resource_link_id;
		$this->resource_link_title                  = $resource_link_title;
		$this->resource_link_description            = $resource_link_description;
		$this->user_id                              = $user_id;
		$this->user_image                           = $user_image;
		$this->roles                                = $roles;
		$this->tool_consumer_instance_guid          = $tool_consumer_instance_guid;
		$this->tool_consumer_instance_name          = $tool_consumer_instance_name;
		$this->tool_consumer_instance_description   = $tool_consumer_instance_description;
		$this->tool_consumer_instance_url           = $tool_consumer_instance_url;
		$this->tool_consumer_instance_contact_email = $tool_consumer_instance_contact_email;
		$this->lis_person_sourcedid                 = $lis_person_sourcedid;
		$this->lis_course_offering_sourcedid        = $lis_course_offering_sourcedid;
		$this->lis_course_section_sourcedid         = $lis_course_section_sourcedid;
		$this->lis_result_sourcedid                 = $lis_result_sourcedid;
		$this->lis_person_name_given                = $lis_person_name_given;
		$this->lis_person_name_family               = $lis_person_name_family;
		$this->lis_person_name_full                 = $lis_person_name_full;
		$this->lis_person_contact_email_primary     = $lis_person_contact_email_primary;
		$this->context_id                           = $context_id;
		$this->context_type                         = $context_type;
		$this->context_title                        = $context_title;
		$this->context_label                        = $context_label;
		$this->launch_presentation_locale           = $launch_presentation_locale;
		$this->launch_presentation_document_target  = $launch_presentation_document_target;
		$this->launch_presentation_width            = $launch_presentation_width;
		$this->launch_presentation_height           = $launch_presentation_height;
		$this->launch_presentation_return_url       = $launch_presentation_return_url;
		$this->custom                               = $custom_;
		$this->ext                                  = $ext_;
	}

}

