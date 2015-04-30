<?php

namespace Lti;

class V1p1p1Director {

	protected $builder;

	public function __construct(V1p1p1Builder $builder) {
		$this->builder = $builder;
	}

	public function getLtiRequest() {
		return $this->builder->build();
	}

	public function buildLtiRequest(array $params) {

		//necessary for constants
		$builder = $this->builder;

		// REQUIRED
		////////////////////////////////////////////////////////////////////////

		if(isset($params[$builder::LTI_MESSAGE_TYPE])) {
			$this->builder->setLtiMessageType($params[$builder::LTI_MESSAGE_TYPE]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.x requires the paramter 'lti_message_type'.");
		}

		if(isset($params[$builder::LTI_VERSION])) {
			$this->builder->setLtiVersion($params[$builder::LTI_VERSION]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.x requires the paramter 'lti_version'.");
		}

		if(isset($params[$builder::RESOURCE_LINK_ID])) {
			$this->builder->setResourceLinkId($params[$builder::RESOURCE_LINK_ID]);
		}else{
			throw new Exceptions\MissingRequiredParameterException("LTI v 1.x requires the paramter 'resource_link_id'.");
		}

		// RECOMMENDED or OPTIONAL
		////////////////////////////////////////////////////////////////////////

		$this->builder->setResourceLinkTitle($this->getKey($params, $builder::RESOURCE_LINK_TITLE));

		$this->builder->setResourceLinkDescription($this->getKey($params, $builder::RESOURCE_LINK_DESCRIPTION));

		$this->builder->setUserId($this->getKey($params, $builder::USER_ID));

		$this->builder->setUserImage($this->getKey($params, $builder::USER_IMAGE));

		$this->builder->setRoles($this->getKey($params, $builder::ROLES));

		$this->builder->setRoleScopeMentor($this->getKey($params, $builder::ROLE_SCOPE_MENTOR));

		$this->builder->setLisPersonNameGiven($this->getKey($params, $builder::LIS_PERSON_NAME_GIVEN));

		$this->builder->setLisPersonNameFamily($this->getKey($params, $builder::LIS_PERSON_NAME_FAMILY));

		$this->builder->setLisPersonNameFull($this->getKey($params, $builder::LIS_PERSON_NAME_FULL));

		$this->builder->setLisPersonContactEmailPrimary($this->getKey($params, $builder::LIS_PERSON_CONTACT_EMAIL_PRIMARY));

		$this->builder->setContextId($this->getKey($params, $builder::CONTEXT_ID));

		$this->builder->setContextType($this->getKey($params, $builder::CONTEXT_TYPE));

		$this->builder->setContextTitle($this->getKey($params, $builder::CONTEXT_TITLE));

		$this->builder->setContextLabel($this->getKey($params, $builder::CONTEXT_LABEL));

		$this->builder->setLaunchPresentationLocale($this->getKey($params, $builder::LAUNCH_PRESENTATION_LOCALE));

		$this->builder->setLaunchPresentationDocumentTarget($this->getKey($params, $builder::LAUNCH_PRESENTATION_DOCUMENT_TARGET));

		$this->builder->setLaunchPresentationCssUrl($this->getKey($params, $builder::LAUNCH_PRESENTATION_CSS_URL));

		$this->builder->setLaunchPresentationWidth($this->getKey($params, $builder::LAUNCH_PRESENTATION_WIDTH));

		$this->builder->setLaunchPresentationHeight($this->getKey($params, $builder::LAUNCH_PRESENTATION_HEIGHT));

		$this->builder->setLaunchPresentationReturnUrl($this->getKey($params, $builder::LAUNCH_PRESENTATION_RETURN_URL));

		$this->builder->setToolConsumerInfoProductFamilyCode($this->getKey($params, $builder::TOOL_CONSUMER_INFO_PRODUCT_FAMILY_CODE));

		$this->builder->setToolConsumerInfoVersion($this->getKey($params, $builder::TOOL_CONSUMER_INFO_VERSION));

		$this->builder->setToolConsumerInstanceGuid($this->getKey($params, $builder::TOOL_CONSUMER_INSTANCE_GUID));

		$this->builder->setToolConsumerInstanceName($this->getKey($params, $builder::TOOL_CONSUMER_INSTANCE_NAME));

		$this->builder->setToolConsumerInstanceDescription($this->getKey($params, $builder::TOOL_CONSUMER_INSTANCE_DESCRIPTION));

		$this->builder->setToolConsumerInstanceUrl($this->getKey($params, $builder::TOOL_CONSUMER_INSTANCE_URL));

		$this->builder->setToolConsumerInstanceContactEmail($this->getKey($params, $builder::TOOL_CONSUMER_INSTANCE_CONTACT_EMAIL));

		$this->builder->setLisResultSourcedid($this->getKey($params, $builder::LIS_RESULT_SOURCEDID));

		$this->builder->setLisOutcomeServiceUrl($this->getKey($params, $builder::LIS_OUTCOME_SERVICE_URL));

		$this->builder->setLisPersonSourcedid($this->getKey($params, $builder::LIS_PERSON_SOURCEDID));

		$this->builder->setLisCourseOfferingsourcedid($this->getKey($params, $builder::LIS_COURSE_OFFERING_SOURCEDID));

		$this->builder->setLisCourseSectionsourcedid($this->getKey($params, $builder::LIS_COURSE_SECTION_SOURCEDID));

		$custom = [];
		foreach($params as $key => $value) {
			if(stripos($key, $builder::PREFIX_CUSTOM) === 0) {
				$custom[$key] = $value;
			}
		}

		$this->builder->setCustomParams($custom);

		$ext = [];
		foreach($params as $key => $value) {
			if(stripos($key, $builder::PREFIX_EXT) === 0) {
				$ext[$key] = $value;
			}
		}

		$this->builder->setExtParams($ext);
	}

	protected function getKey(array $params, $key) {
		return isset($params[$key]) ? $params[$key] : null;
	}

}