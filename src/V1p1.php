<?php

namespace Lti;

class V1p1 extends V1p0 implements V1p1Interface {

	protected $launch_presentation_css_url;
	protected $tool_consumer_info_product_family_code;
	protected $tool_consumer_info_version;
	protected $lis_outcome_service_url;

	/**
	 * get the launch_presentation_css_url
	 */
	public function getLaunchPresentationCssUrl() {
		return $this->launch_presentation_css_url;
	}

	/**
	 * get the tool_consumer_info_product_family_code
	 */
	public function getToolConsumerInfoProductFamilyCode() {
		return $this->tool_consumer_info_product_family_code;
	}

	/**
	 * get the tool_consumer_info_version
	 */
	public function getToolConsumerInfoVersion() {
		return $this->tool_consumer_info_version;
	}

	/**
	 * get the lis_outcome_service_url
	 */
	public function getLisOutcomeServiceUrl() {
		return $this->lis_outcome_service_url;
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
		$launch_presentation_css_url,
		$launch_presentation_width,
		$launch_presentation_height,
		$launch_presentation_return_url,
		$tool_consumer_info_product_family_code,
		$tool_consumer_info_version,
		$tool_consumer_instance_guid,
		$tool_consumer_instance_name,
		$tool_consumer_instance_description,
		$tool_consumer_instance_url,
		$tool_consumer_instance_contact_email,
		$lis_result_sourcedid,
		$lis_outcome_service_url,
		$lis_person_sourcedid,
		$lis_course_offering_sourcedid,
		$lis_course_section_sourcedid,
		array $custom_,
		array $ext_
	) {
		$this->lti_message_type                     = $lti_message_type;
		$this->lti_version                          = $lti_version;
		$this->resource_link_id                     = $resource_link_id;
		$this->resource_link_title                  = $resource_link_title;
		$this->resource_link_description            = $resource_link_description;
		$this->user_id                              = $user_id;
		$this->user_image                           = $user_image;
		$this->roles                                = $roles;
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
		$this->launch_presentation_css_url          = $launch_presentation_css_url;
		$this->launch_presentation_width            = $launch_presentation_width;
		$this->launch_presentation_height           = $launch_presentation_height;
		$this->launch_presentation_return_url       = $launch_presentation_return_url;
		$this->tool_consumer_info_product_family_code    = $tool_consumer_info_product_family_code;
		$this->tool_consumer_info_version           = $tool_consumer_info_version;
		$this->tool_consumer_instance_guid          = $tool_consumer_instance_guid;
		$this->tool_consumer_instance_name          = $tool_consumer_instance_name;
		$this->tool_consumer_instance_description   = $tool_consumer_instance_description;
		$this->tool_consumer_instance_url           = $tool_consumer_instance_url;
		$this->tool_consumer_instance_contact_email = $tool_consumer_instance_contact_email;
		$this->lis_result_sourcedid                 = $lis_result_sourcedid;
		$this->lis_outcome_service_url              = $lis_outcome_service_url;
		$this->lis_person_sourcedid                 = $lis_person_sourcedid;
		$this->lis_course_offering_sourcedid        = $lis_course_offering_sourcedid;
		$this->lis_course_section_sourcedid         = $lis_course_section_sourcedid;
		$this->custom                               = $custom_;
		$this->ext                                  = $ext_;
	}

}

