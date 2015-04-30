<?php

namespace Lti;

class V1p1Builder extends V1p0Builder implements V1p1BuilderInterface {

	const LAUNCH_PRESENTATION_CSS_URL            = "launch_presentation_css_url";
	const TOOL_CONSUMER_INFO_PRODUCT_FAMILY_CODE = "tool_consumer_info_product_family_code";
	const TOOL_CONSUMER_INFO_VERSION             = "tool_consumer_info_version";
	const LIS_OUTCOME_SERVICE_URL                = "lis_outcome_service_url";

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

	public function build(){
		return new V1p1(
			$this->inst[self::LTI_MESSAGE_TYPE],
			$this->inst[self::LTI_VERSION],
			$this->inst[self::RESOURCE_LINK_ID],
			$this->inst[self::RESOURCE_LINK_TITLE],
			$this->inst[self::RESOURCE_LINK_DESCRIPTION],
			$this->inst[self::USER_ID],
			$this->inst[self::USER_IMAGE],
			$this->inst[self::ROLES],
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
	public function setLaunchPresentationCssUrl($launch_presentation_css_url){
		$this->inst[self::LAUNCH_PRESENTATION_CSS_URL] = $launch_presentation_css_url;
	}

	/**
	 * set the tool_consumer_info_product_family_code
	 * @param string $tool_consumer_info_product_family_code
	 */
	public function setToolConsumerInfoProductFamilyCode($tool_consumer_info_product_family_code){
		$this->inst[self::TOOL_CONSUMER_INFO_PRODUCT_FAMILY_CODE] = $tool_consumer_info_product_family_code;
	}

	/**
	 * set the tool_consumer_info_version
	 * @param string $tool_consumer_info_version
	 */
	public function setToolConsumerInfoVersion($tool_consumer_info_version){
		$this->inst[self::TOOL_CONSUMER_INFO_VERSION] = $tool_consumer_info_version;
	}

	/**
	 * set the lis_outcome_service_url
	 * @param string $lis_outcome_service_url
	 */
	public function setLisOutcomeServiceUrl($lis_outcome_service_url){
		$this->inst[self::LIS_OUTCOME_SERVICE_URL] = $lis_outcome_service_url;
	}

}