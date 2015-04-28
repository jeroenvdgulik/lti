<?php

namespace Lti;

interface V1p1Interface {

	/**
	 * get the launch_presentation_css_url
	 */
	public function getLaunchPresentationCssUrl();

	/**
	 * get the tool_consumer_info_product_family
	 */
	public function getToolConsumerInfoProductFamily();

	/**
	 * get the tool_consumer_info_version
	 */
	public function getToolConsumerInfoVersion();

	/**
	 * get the lis_outcome_service_url
	 */
	public function getLisOutcomeServiceUrl();

}