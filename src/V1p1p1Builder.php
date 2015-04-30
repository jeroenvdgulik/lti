<?php

namespace Lti;

class V1p1p1Builder extends V1p1Builder implements V1p1p1BuilderInterface {

	const ROLE_SCOPE_MENTOR = "role_scope_mentor";

	/**
	 * `lti_message_type`, `lti_version`, `resource_link_id` are excluded
	 * becasue they are required and should not have a default value
	 */
	protected $inst = [
		self::RESOURCE_LINK_TITLE                    => null,
		self::RESOURCE_LINK_DESCRIPTION              => null,
		self::USER_ID                                => null,
		self::USER_IMAGE                             => null,
		self::ROLES                                  => null,
		self::ROLE_SCOPE_MENTOR                      => null,
		self::LIS_PERSON_NAME_GIVEN                  => null,
		self::LIS_PERSON_NAME_FAMILY                 => null,
		self::LIS_PERSON_NAME_FULL                   => null,
		self::LIS_PERSON_CONTACT_EMAIL_PRIMARY       => null,
		self::CONTEXT_ID                             => null,
		self::CONTEXT_TYPE                           => null,
		self::CONTEXT_TITLE                          => null,
		self::CONTEXT_LABEL                          => null,
		self::LAUNCH_PRESENTATION_LOCALE             => null,
		self::LAUNCH_PRESENTATION_DOCUMENT_TARGET    => null,
		self::LAUNCH_PRESENTATION_CSS_URL            => null,
		self::LAUNCH_PRESENTATION_WIDTH              => null,
		self::LAUNCH_PRESENTATION_HEIGHT             => null,
		self::LAUNCH_PRESENTATION_RETURN_URL         => null,
		self::TOOL_CONSUMER_INFO_PRODUCT_FAMILY_CODE => null,
		self::TOOL_CONSUMER_INFO_VERSION             => null,
		self::TOOL_CONSUMER_INSTANCE_GUID            => null,
		self::TOOL_CONSUMER_INSTANCE_NAME            => null,
		self::TOOL_CONSUMER_INSTANCE_DESCRIPTION     => null,
		self::TOOL_CONSUMER_INSTANCE_URL             => null,
		self::TOOL_CONSUMER_INSTANCE_CONTACT_EMAIL   => null,
		self::LIS_RESULT_SOURCEDID                   => null,
		self::LIS_OUTCOME_SERVICE_URL                => null,
		self::LIS_PERSON_SOURCEDID                   => null,
		self::LIS_COURSE_OFFERING_SOURCEDID          => null,
		self::LIS_COURSE_SECTION_SOURCEDID           => null,
	];

	public function build() {
		return new V1p1p1(
			$this->inst[self::LTI_MESSAGE_TYPE],
			$this->inst[self::LTI_VERSION],
			$this->inst[self::RESOURCE_LINK_ID],
			$this->inst[self::RESOURCE_LINK_TITLE],
			$this->inst[self::RESOURCE_LINK_DESCRIPTION],
			$this->inst[self::USER_ID],
			$this->inst[self::USER_IMAGE],
			$this->inst[self::ROLES],
			$this->inst[self::ROLE_SCOPE_MENTOR],
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
			$this->inst[self::LAUNCH_PRESENTATION_CSS_URL],
			$this->inst[self::LAUNCH_PRESENTATION_WIDTH],
			$this->inst[self::LAUNCH_PRESENTATION_HEIGHT],
			$this->inst[self::LAUNCH_PRESENTATION_RETURN_URL],
			$this->inst[self::TOOL_CONSUMER_INFO_PRODUCT_FAMILY_CODE],
			$this->inst[self::TOOL_CONSUMER_INFO_VERSION],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_GUID],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_NAME],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_DESCRIPTION],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_URL],
			$this->inst[self::TOOL_CONSUMER_INSTANCE_CONTACT_EMAIL],
			$this->inst[self::LIS_RESULT_SOURCEDID],
			$this->inst[self::LIS_OUTCOME_SERVICE_URL],
			$this->inst[self::LIS_PERSON_SOURCEDID],
			$this->inst[self::LIS_COURSE_OFFERING_SOURCEDID],
			$this->inst[self::LIS_COURSE_SECTION_SOURCEDID],
			$this->custom,
			$this->ext
		);
	}

	/**
	 * set the launch_presentation_css_url
	 * @param string $launch_presentation_css_url
	 */
	public function setRoleScopeMentor($role_scope_mentor) {
		$this->inst[self::ROLE_SCOPE_MENTOR] = $role_scope_mentor;
	}

}