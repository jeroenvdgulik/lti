<?php

namespace Lti;

interface V1p1BuilderInterface extends V1p0BuilderInterface {

	/**
	 * set the launch_presentation_css_url
	 * @param string $launch_presentation_css_url
	 */
	function setLaunchPresentationCssUrl($launch_presentation_css_url);

	/**
	 * set the tool_consumer_info_product_family_code
	 * @param string $tool_consumer_info_product_family_code
	 */
	function setToolConsumerInfoProductFamilyCode($tool_consumer_info_product_family_code);

	/**
	 * set the tool_consumer_info_version
	 * @param string $tool_consumer_info_version
	 */
	function setToolConsumerInfoVersion($tool_consumer_info_version);

	/**
	 * set the lis_outcome_service_url
	 * @param string $lis_outcome_service_url
	 */
	function setLisOutcomeServiceUrl($lis_outcome_service_url);

}