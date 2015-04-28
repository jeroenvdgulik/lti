<?php

namespace Lti;

class V1p1Builder extends V1p0Builder implements V1p1BuilderInterface {

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
			$this->inst["launch_presentation_width"],
			$this->inst["launch_presentation_height"],
			$this->inst["launch_presentation_return_url"],
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
			$this->inst["lis_course_offering_sourcedid"],
			$this->inst["lis_course_section_sourcedid"],
			$this->inst["custom_"],
			$this->inst["ext_"]
		);
	}

	/**
	 * set the launch_presentation_css_url
	 * @param string $launch_presentation_css_url
	 */
	public function setLaunchPresentationCssUrl($launch_presentation_css_url){
		$this->inst["launch_presentation_css_url"] = $launch_presentation_css_url;
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
	 * set the lis_outcome_service_url
	 * @param string $lis_outcome_service_url
	 */
	public function setLisOutcomeServiceUrl($lis_outcome_service_url){
		$this->inst["lis_outcome_service_url"] = $lis_outcome_service_url;
	}

}