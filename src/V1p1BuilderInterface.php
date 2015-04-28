<?php

namespace Lti;

interface V1p1BuilderInterface {

	public function build();

	/**
	 * set the lti_message_type
	 * @param string $lti_message_type
	 */
	function setLtiMessageType($lti_message_type);

	/**
	 * set the lti_version
	 * @param string $lti_version
	 */
	function setLtiVersion($lti_version);

	/**
	 * set the resource_link_id
	 * @param string $resource_link_id
	 */
	function setResourceLinkId($resource_link_id);

	/**
	 * set the resource_link_title
	 * @param string $resource_link_title
	 */
	function setResourceLinkTitle($resource_link_title);

	/**
	 * set the resource_link_description
	 * @param string $resource_link_description
	 */
	function setResourceLinkDescription($resource_link_description);

	/**
	 * set the user_id
	 * @param string $user_id
	 */
	function setUserId($user_id);

	/**
	 * set the user_image
	 * @param string $user_image
	 */
	function setUserImage($user_image);

	/**
	 * set the roles
	 * @param string $roles
	 */
	function setRoles($roles);

	/**
	 * set the lis_person_name_given
	 * @param string $lis_person_name_given
	 */
	function setLisPersonNameGiven($lis_person_name_given);

	/**
	 * set the lis_person_name_family
	 * @param string $lis_person_name_family
	 */
	function setLisPersonNameFamily($lis_person_name_family);

	/**
	 * set the lis_person_name_full
	 * @param string $lis_person_name_full
	 */
	function setLisPersonNameFull($lis_person_name_full);

	/**
	 * set the lis_person_contact_email_primary
	 * @param string $lis_person_contact_email_primary
	 */
	function setLisPersonContactEmailPrimary($lis_person_contact_email_primary);

	/**
	 * set the context_id
	 * @param string $context_id
	 */
	function setContextId($context_id);

	/**
	 * set the context_type
	 * @param string $context_type
	 */
	function setContextType($context_type);

	/**
	 * set the context_title
	 * @param string $context_title
	 */
	function setContextTitle($context_title);

	/**
	 * set the context_label
	 * @param string $context_label
	 */
	function setContextLabel($context_label);

	/**
	 * set the launch_presentation_locale
	 * @param string $launch_presentation_locale
	 */
	function setLaunchPresentationLocale($launch_presentation_locale);

	/**
	 * set the launch_presentation_document_target
	 * @param string $launch_presentation_document_target
	 */
	function setLaunchPresentationDocumentTarget($launch_presentation_document_target);

	/**
	 * set the launch_presentation_css_url
	 * @param string $launch_presentation_css_url
	 */
	function setLaunchPresentationCssUrl($launch_presentation_css_url);

	/**
	 * set the launch_resentation_width
	 * @param string $launch_resentation_width
	 */
	function setLaunchResentationWidth($launch_resentation_width);

	/**
	 * set the launch_resentation_height
	 * @param string $launch_resentation_height
	 */
	function setLaunchResentationHeight($launch_resentation_height);

	/**
	 * set the launch_resentation_return_url
	 * @param string $launch_resentation_return_url
	 */
	function setLaunchResentationReturnUrl($launch_resentation_return_url);

	/**
	 * set the tool_consumer_info_product_family
	 * @param string $tool_consumer_info_product_family
	 */
	function setToolConsumerInfoProductFamily($tool_consumer_info_product_family);

	/**
	 * set the tool_consumer_info_version
	 * @param string $tool_consumer_info_version
	 */
	function setToolConsumerInfoVersion($tool_consumer_info_version);

	/**
	 * set the tool_consumer_instance_guid
	 * @param string $tool_consumer_instance_guid
	 */
	function setToolConsumerInstanceGuid($tool_consumer_instance_guid);

	/**
	 * set the tool_consumer_instance_name
	 * @param string $tool_consumer_instance_name
	 */
	function setToolConsumerInstanceName($tool_consumer_instance_name);

	/**
	 * set the tool_consumer_instance_description
	 * @param string $tool_consumer_instance_description
	 */
	function setToolConsumerInstanceDescription($tool_consumer_instance_description);

	/**
	 * set the tool_consumer_instance_url
	 * @param string $tool_consumer_instance_url
	 */
	function setToolConsumerInstanceUrl($tool_consumer_instance_url);

	/**
	 * set the tool_consumer_instance_contact_email
	 * @param string $tool_consumer_instance_contact_email
	 */
	function setToolConsumerInstanceContactEmail($tool_consumer_instance_contact_email);

	/**
	 * set the lis_result_sourcedid
	 * @param string $lis_result_sourcedid
	 */
	function setLisResultSourcedid($lis_result_sourcedid);

	/**
	 * set the lis_outcome_service_url
	 * @param string $lis_outcome_service_url
	 */
	function setLisOutcomeServiceUrl($lis_outcome_service_url);

	/**
	 * set the lis_person_sourcedid
	 * @param string $lis_person_sourcedid
	 */
	function setLisPersonSourcedid($lis_person_sourcedid);

	/**
	 * set the lis_course_offering_sourceded
	 * @param string $lis_course_offering_sourceded
	 */
	function setLisCourseOfferingSourceded($lis_course_offering_sourceded);

	/**
	 * set the lis_course_section_sourceded
	 * @param string $lis_course_section_sourceded
	 */
	function setLisCourseSectionSourceded($lis_course_section_sourceded);

	/**
	 * set custom params
	 * @param array $param An array of custom_key => value pair
	 */
	function setCustomParams(array $params);

	/**
	 * set ext params
	 * @param array $param An array of ext_key => value pair
	 */
	function setExtParams(array $params);

}