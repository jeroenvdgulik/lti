<?php

namespace Lti;

class V1p0Builder implements V1p0BuilderInterface {

	const LTI_MESSAGE_TYPE                     = "lti_message_type";
	const LTI_VERSION                          = "lti_version";
	const RESOURCE_LINK_ID                     = "resource_link_id";
	const RESOURCE_LINK_TITLE                  = "resource_link_title";
	const RESOURCE_LINK_DESCRIPTION            = "resource_link_description";
	const USER_ID                              = "user_id";
	const USER_IMAGE                           = "user_image";
	const ROLES                                = "roles";
	const TOOL_CONSUMER_INSTANCE_GUID          = "tool_consumer_instance_guid";
	const TOOL_CONSUMER_INSTANCE_NAME          = "tool_consumer_instance_name";
	const TOOL_CONSUMER_INSTANCE_DESCRIPTION   = "tool_consumer_instance_description";
	const TOOL_CONSUMER_INSTANCE_URL           = "tool_consumer_instance_url";
	const TOOL_CONSUMER_INSTANCE_CONTACT_EMAIL = "tool_consumer_instance_contact_email";
	const LIS_PERSON_SOURCEDID                 = "lis_person_sourcedid";
	const LIS_COURSE_OFFERING_SOURCEDID        = "lis_course_offering_sourcedid";
	const LIS_COURSE_SECTION_SOURCEDID         = "lis_course_section_sourcedid";
	const LIS_RESULT_SOURCEDID                 = "lis_result_sourcedid";
	const LIS_PERSON_NAME_GIVEN                = "lis_person_name_given";
	const LIS_PERSON_NAME_FAMILY               = "lis_person_name_family";
	const LIS_PERSON_NAME_FULL                 = "lis_person_name_full";
	const LIS_PERSON_CONTACT_EMAIL_PRIMARY     = "lis_person_contact_email_primary";
	const CONTEXT_ID                           = "context_id";
	const CONTEXT_TYPE                         = "context_type";
	const CONTEXT_TITLE                        = "context_title";
	const CONTEXT_LABEL                        = "context_label";
	const LAUNCH_PRESENTATION_LOCALE           = "launch_presentation_locale";
	const LAUNCH_PRESENTATION_DOCUMENT_TARGET  = "launch_presentation_document_target";
	const LAUNCH_PRESENTATION_WIDTH            = "launch_presentation_width";
	const LAUNCH_PRESENTATION_HEIGHT           = "launch_presentation_height";
	const LAUNCH_PRESENTATION_RETURN_URL       = "launch_presentation_return_url";
	const PREFIX_CUSTOM                        = "custom_";
	const PREFIX_EXT                           = "ext_";

	/**
	 * `lti_message_type`, `lti_version`, `resource_link_id` are excluded
	 * becasue they are required and should not have a default value
	 */
	protected $inst = [
		self::RESOURCE_LINK_TITLE                  => null,
		self::RESOURCE_LINK_DESCRIPTION            => null,
		self::USER_ID                              => null,
		self::USER_IMAGE                           => null,
		self::ROLES                                => null,
		self::TOOL_CONSUMER_INSTANCE_GUID          => null,
		self::TOOL_CONSUMER_INSTANCE_NAME          => null,
		self::TOOL_CONSUMER_INSTANCE_DESCRIPTION   => null,
		self::TOOL_CONSUMER_INSTANCE_URL           => null,
		self::TOOL_CONSUMER_INSTANCE_CONTACT_EMAIL => null,
		self::LIS_PERSON_SOURCEDID                 => null,
		self::LIS_COURSE_OFFERING_SOURCEDID        => null,
		self::LIS_COURSE_SECTION_SOURCEDID         => null,
		self::LIS_RESULT_SOURCEDID                 => null,
		self::LIS_PERSON_NAME_GIVEN                => null,
		self::LIS_PERSON_NAME_FAMILY               => null,
		self::LIS_PERSON_NAME_FULL                 => null,
		self::LIS_PERSON_CONTACT_EMAIL_PRIMARY     => null,
		self::CONTEXT_ID                           => null,
		self::CONTEXT_TYPE                         => null,
		self::CONTEXT_TITLE                        => null,
		self::CONTEXT_LABEL                        => null,
		self::LAUNCH_PRESENTATION_LOCALE           => null,
		self::LAUNCH_PRESENTATION_DOCUMENT_TARGET  => null,
		self::LAUNCH_PRESENTATION_WIDTH            => null,
		self::LAUNCH_PRESENTATION_HEIGHT           => null,
		self::LAUNCH_PRESENTATION_RETURN_URL       => null,
	];

	protected $custom = [];

	protected $ext    = [];

	public function build() {
		return new V1p0(
			$this->inst[self::LTI_MESSAGE_TYPE],
			$this->inst[self::LTI_VERSION],
			$this->inst[self::RESOURCE_LINK_ID],
			$this->inst[self::RESOURCE_LINK_TITLE],
			$this->inst[self::RESOURCE_LINK_DESCRIPTION],
			$this->inst[self::USER_ID],
			$this->inst[self::USER_IMAGE],
			$this->inst[self::ROLES],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_GUID],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_NAME],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_DESCRIPTION],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_URL],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_CONTACT_EMAIL],
			$this->inst[self::LIS_PERSON_SOURCEDID],
			$this->inst[self::LIS_COURSE_OFFERING_SOURCEDID],
			$this->inst[self::LIS_COURSE_SECTION_SOURCEDID],
			$this->inst[self::LIS_RESULT_SOURCEDID],
			$this->inst[self::LIS_PERSON_NAME_GIVEN],
			$this->inst[self::LIS_PERSON_NAME_FAMILY],
			$this->inst[self::LIS_PERSON_NAME_FULL],
			$this->inst[self::LIS_PERSON_CONTACT_EMAIL_PRIMARY],
			$this->inst[self::CONTEXT_ID],
			$this->inst[self::CONTEXT_TYPE],
			$this->inst[self::CONTEXT_TITLE],
			$this->inst[self::CONTEXT_LABEL],
			$this->inst[self::LAUNCH_PRESENTATION_LOCALE],
			$this->inst[self::LAUNCH_PRESENTATION_DOCUMENT_TARGET],
			$this->inst[self::LAUNCH_PRESENTATION_WIDTH],
			$this->inst[self::LAUNCH_PRESENTATION_HEIGHT],
			$this->inst[self::LAUNCH_PRESENTATION_RETURN_URL],
			$this->custom,
			$this->ext
		);
	}

	/**
	 * set the lti_message_type
	 * @param string $lti_message_type
	 */
	public function setLtiMessageType($lti_message_type) {
		$this->inst[self::LTI_MESSAGE_TYPE] = $lti_message_type;
	}

	/**
	 * set the lti_version
	 * @param string $lti_version
	 */
	public function setLtiVersion($lti_version) {
		$this->inst[self::LTI_VERSION] = $lti_version;
	}

	/**
	 * set the resource_link_id
	 * @param string $resource_link_id
	 */
	public function setResourceLinkId($resource_link_id) {
		$this->inst[self::RESOURCE_LINK_ID] = $resource_link_id;
	}

	/**
	 * set the resource_link_title
	 * @param string $resource_link_title
	 */
	public function setResourceLinkTitle($resource_link_title) {
		$this->inst[self::RESOURCE_LINK_TITLE] = $resource_link_title;
	}

	/**
	 * set the resource_link_description
	 * @param string $resource_link_description
	 */
	public function setResourceLinkDescription($resource_link_description) {
		$this->inst[self::RESOURCE_LINK_DESCRIPTION] = $resource_link_description;
	}

	/**
	 * set the user_id
	 * @param string $user_id
	 */
	public function setUserId($user_id) {
		$this->inst[self::USER_ID] = $user_id;
	}

	/**
	 * set the user_image
	 * @param string $user_image
	 */
	public function setUserImage($user_image) {
		$this->inst[self::USER_IMAGE] = $user_image;
	}

	/**
	 * set the roles
	 * @param string $roles
	 */
	public function setRoles($roles) {
		$this->inst[self::ROLES] = $roles;
	}

	/**
	 * set the lis_person_name_given
	 * @param string $lis_person_name_given
	 */
	public function setLisPersonNameGiven($lis_person_name_given) {
		$this->inst[self::LIS_PERSON_NAME_GIVEN] = $lis_person_name_given;
	}

	/**
	 * set the lis_person_name_family
	 * @param string $lis_person_name_family
	 */
	public function setLisPersonNameFamily($lis_person_name_family) {
		$this->inst[self::LIS_PERSON_NAME_FAMILY] = $lis_person_name_family;
	}

	/**
	 * set the lis_person_name_full
	 * @param string $lis_person_name_full
	 */
	public function setLisPersonNameFull($lis_person_name_full) {
		$this->inst[self::LIS_PERSON_NAME_FULL] = $lis_person_name_full;
	}

	/**
	 * set the lis_person_contact_email_primary
	 * @param string $lis_person_contact_email_primary
	 */
	public function setLisPersonContactEmailPrimary($lis_person_contact_email_primary) {
		$this->inst[self::LIS_PERSON_CONTACT_EMAIL_PRIMARY] = $lis_person_contact_email_primary;
	}

	/**
	 * set the context_id
	 * @param string $context_id
	 */
	public function setContextId($context_id) {
		$this->inst[self::CONTEXT_ID] = $context_id;
	}

	/**
	 * set the context_type
	 * @param string $context_type
	 */
	public function setContextType($context_type) {
		$this->inst[self::CONTEXT_TYPE] = $context_type;
	}

	/**
	 * set the context_title
	 * @param string $context_title
	 */
	public function setContextTitle($context_title) {
		$this->inst[self::CONTEXT_TITLE] = $context_title;
	}

	/**
	 * set the context_label
	 * @param string $context_label
	 */
	public function setContextLabel($context_label) {
		$this->inst[self::CONTEXT_LABEL] = $context_label;
	}

	/**
	 * set the launch_presentation_locale
	 * @param string $launch_presentation_locale
	 */
	public function setLaunchPresentationLocale($launch_presentation_locale) {
		$this->inst[self::LAUNCH_PRESENTATION_LOCALE] = $launch_presentation_locale;
	}

	/**
	 * set the launch_presentation_document_target
	 * @param string $launch_presentation_document_target
	 */
	public function setLaunchPresentationDocumentTarget($launch_presentation_document_target) {
		$this->inst[self::LAUNCH_PRESENTATION_DOCUMENT_TARGET] = $launch_presentation_document_target;
	}

	/**
	 * set the launch_presentation_width
	 * @param string $launch_presentation_width
	 */
	public function setLaunchPresentationWidth($launch_presentation_width) {
		$this->inst[self::LAUNCH_PRESENTATION_WIDTH] = $launch_presentation_width;
	}

	/**
	 * set the launch_presentation_height
	 * @param string $launch_presentation_height
	 */
	public function setLaunchPresentationHeight($launch_presentation_height) {
		$this->inst[self::LAUNCH_PRESENTATION_HEIGHT] = $launch_presentation_height;
	}

	/**
	 * set the launch_presentation_return_url
	 * @param string $launch_presentation_return_url
	 */
	public function setLaunchPresentationReturnUrl($launch_presentation_return_url) {
		$this->inst[self::LAUNCH_PRESENTATION_RETURN_URL] = $launch_presentation_return_url;
	}

	/**
	 * set the tool_consumer_instance_guid
	 * @param string $tool_consumer_instance_guid
	 */
	public function setToolConsumerInstanceGuid($tool_consumer_instance_guid) {
		$this->inst[self::TOOL_CONSUMER_INSTANCE_GUID] = $tool_consumer_instance_guid;
	}

	/**
	 * set the tool_consumer_instance_name
	 * @param string $tool_consumer_instance_name
	 */
	public function setToolConsumerInstanceName($tool_consumer_instance_name) {
		$this->inst[self::TOOL_CONSUMER_INSTANCE_NAME] = $tool_consumer_instance_name;
	}

	/**
	 * set the tool_consumer_instance_description
	 * @param string $tool_consumer_instance_description
	 */
	public function setToolConsumerInstanceDescription($tool_consumer_instance_description) {
		$this->inst[self::TOOL_CONSUMER_INSTANCE_DESCRIPTION] = $tool_consumer_instance_description;
	}

	/**
	 * set the tool_consumer_instance_url
	 * @param string $tool_consumer_instance_url
	 */
	public function setToolConsumerInstanceUrl($tool_consumer_instance_url) {
		$this->inst[self::TOOL_CONSUMER_INSTANCE_URL] = $tool_consumer_instance_url;
	}

	/**
	 * set the tool_consumer_instance_contact_email
	 * @param string $tool_consumer_instance_contact_email
	 */
	public function setToolConsumerInstanceContactEmail($tool_consumer_instance_contact_email) {
		$this->inst[self::TOOL_CONSUMER_INSTANCE_CONTACT_EMAIL] = $tool_consumer_instance_contact_email;
	}

	/**
	 * set the lis_result_sourcedid
	 * @param string $lis_result_sourcedid
	 */
	public function setLisResultSourcedid($lis_result_sourcedid) {
		$this->inst[self::LIS_RESULT_SOURCEDID] = $lis_result_sourcedid;
	}

	/**
	 * set the lis_person_sourcedid
	 * @param string $lis_person_sourcedid
	 */
	public function setLisPersonSourcedid($lis_person_sourcedid) {
		$this->inst[self::LIS_PERSON_SOURCEDID] = $lis_person_sourcedid;
	}

	/**
	 * set the lis_course_offering_sourcedid
	 * @param string $lis_course_offering_sourcedid
	 */
	public function setLisCourseOfferingsourcedid($lis_course_offering_sourcedid) {
		$this->inst[self::LIS_COURSE_OFFERING_SOURCEDID] = $lis_course_offering_sourcedid;
	}

	/**
	 * set the lis_course_section_sourcedid
	 * @param string $lis_course_section_sourcedid
	 */
	public function setLisCourseSectionsourcedid($lis_course_section_sourcedid) {
		$this->inst[self::LIS_COURSE_SECTION_SOURCEDID] = $lis_course_section_sourcedid;
	}

	/**
	 * set custom params
	 * @param array $params An array of custom_key => value pair
	 */
	public function setCustomParams(array $params) {
		foreach($params as $key => $value) {
			$key = strtolower($key);
			if(strpos($key, self::PREFIX_CUSTOM) === 0) {
				$this->custom[$key] = $value;
			}
		}
	}

	/**
	 * set ext params
	 * @param array $params An array of ext_key => value pair
	 */
	public function setExtParams(array $params) {
		foreach($params as $key => $value) {
			$key = strtolower($key);
			if(strpos($key, self::PREFIX_EXT) === 0) {
				$this->ext[$key] = $value;
			}
		}
	}

}