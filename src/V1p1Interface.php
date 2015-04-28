<?php

namespace Lti;

interface V1p1Interface {

	/**
	 * get the lti_message_type
	 */
	public function getLtiMessageType();

	/**
	 * get the lti_version
	 */
	public function getLtiVersion();

	/**
	 * get the resource_link_id
	 */
	public function getResourceLinkId();

	/**
	 * get the resource_link_title
	 */
	public function getResourceLinkTitle();

	/**
	 * get the resource_link_description
	 */
	public function getResourceLinkDescription();

	/**
	 * get the user_id
	 */
	public function getUserId();

	/**
	 * get the user_image
	 */
	public function getUserImage();

	/**
	 * get the roles
	 */
	public function getRoles();

	/**
	 * get the lis_person_name_given
	 */
	public function getLisPersonNameGiven();

	/**
	 * get the lis_person_name_family
	 */
	public function getLisPersonNameFamily();

	/**
	 * get the lis_person_name_full
	 */
	public function getLisPersonNameFull();

	/**
	 * get the lis_person_contact_email_primary
	 */
	public function getLisPersonContactEmailPrimary();

	/**
	 * get the context_id
	 */
	public function getContextId();

	/**
	 * get the context_type
	 */
	public function getContextType();

	/**
	 * get the context_title
	 */
	public function getContextTitle();

	/**
	 * get the context_label
	 */
	public function getContextLabel();

	/**
	 * get the launch_presentation_locale
	 */
	public function getLaunchPresentationLocale();

	/**
	 * get the launch_presentation_document_target
	 */
	public function getLaunchPresentationDocumentTarget();

	/**
	 * get the launch_presentation_css_url
	 */
	public function getLaunchPresentationCssUrl();

	/**
	 * get the launch_resentation_width
	 */
	public function getLaunchResentationWidth();

	/**
	 * get the launch_resentation_height
	 */
	public function getLaunchResentationHeight();

	/**
	 * get the launch_resentation_return_url
	 */
	public function getLaunchResentationReturnUrl();

	/**
	 * get the tool_consumer_info_product_family
	 */
	public function getToolConsumerInfoProductFamily();

	/**
	 * get the tool_consumer_info_version
	 */
	public function getToolConsumerInfoVersion();

	/**
	 * get the tool_consumer_instance_guid
	 */
	public function getToolConsumerInstanceGuid();

	/**
	 * get the tool_consumer_instance_name
	 */
	public function getToolConsumerInstanceName();

	/**
	 * get the tool_consumer_instance_description
	 */
	public function getToolConsumerInstanceDescription();

	/**
	 * get the tool_consumer_instance_url
	 */
	public function getToolConsumerInstanceUrl();

	/**
	 * get the tool_consumer_instance_contact_email
	 */
	public function getToolConsumerInstanceContactEmail();


	/**
	 * get the lis_result_sourcedid
	 */
	public function getLisResultSourcedid();


	/**
	 * get the lis_outcome_service_url
	 */
	public function getLisOutcomeServiceUrl();


	/**
	 * get the lis_person_sourcedid
	 */
	public function getLisPersonSourcedid();


	/**
	 * get the lis_course_offering_sourceded
	 */
	public function getLisCourseOfferingSourceded();


	/**
	 * get the lis_course_section_sourceded
	 */
	public function getLisCourseSectionSourceded();

	/**
	 * get a custom param
	 * @param string $key The key to get
	 */
	public function getCustomParam($key);

	/**
	 * get all custom params
	 */
	public function getAllCustomParams();

	/**
	 * get a ext param
	 * @param string $key The key to get
	 */
	public function getExtParam($key);

	/**
	 * get all ext params
	 */
	public function getAllExtParams();

}