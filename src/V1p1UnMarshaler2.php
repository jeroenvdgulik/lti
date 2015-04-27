<?php

namespace Lti;

class V1p1UnMarshaler2 {

	protected function makeNew(){
		return new V1p1;
	}

	function unMarshal(array $params){
		$Obj = $this->makeNew();

		// REQUIRED
		////////////////////////////////////////////////////////////////////////

		if(isset($params["lti_message_type"])){
			$Obj->setLtiMessageType($params["lti_message_type"]);
		}else{
			throw new MissingRequiredParamterException("LTI v 1.1 requires the paramter 'lti_message_type'.");
		}

		if(isset($params["lti_version"])){
			$Obj->setLtiVersion($params["lti_version"]);
		}else{
			throw new MissingRequiredParamterException("LTI v 1.1 requires the paramter 'lti_version'.");
		}

		if(isset($params["resource_link_id"])){
			$Obj->setResourceLinkId($params["resource_link_id"]);
		}else{
			throw new MissingRequiredParamterException("LTI v 1.1 requires the paramter 'resource_link_id'.");
		}

		// RECOMMENDED or OPTIONAL
		////////////////////////////////////////////////////////////////////////

		if(isset($params["resource_link_title"])){
			$Obj->setResourceLinkTitle($params["resource_link_title"]);
		}

		if(isset($params["resource_link_description"])){
			$Obj->setResourceLinkDescription($params["resource_link_description"]);
		}

		if(isset($params["user_id"])){
			$Obj->setUserId($params["user_id"]);
		}

		if(isset($params["user_image"])){
			$Obj->setUserImage($params["user_image"]);
		}

		if(isset($params["roles"])){
			$Obj->setRoles($params["roles"]);
		}

		if(isset($params["lis_person_name_given"])){
			$Obj->setLisPersonNameGiven($params["lis_person_name_given"]);
		}

		if(isset($params["lis_person_name_family"])){
			$Obj->setLisPersonNameFamily($params["lis_person_name_family"]);
		}

		if(isset($params["lis_person_name_full"])){
			$Obj->setLisPersonNameFull($params["lis_person_name_full"]);
		}

		if(isset($params["lis_person_contact_email_primary"])){
			$Obj->setLisPersonContactEmailPrimary($params["lis_person_contact_email_primary"]);
		}

		if(isset($params["context_id"])){
			$Obj->setContextId($params["context_id"]);
		}

		if(isset($params["context_type"])){
			$Obj->setContextType($params["context_type"]);
		}

		if(isset($params["context_title"])){
			$Obj->setContextTitle($params["context_title"]);
		}

		if(isset($params["context_label"])){
			$Obj->setContextLabel($params["context_label"]);
		}

		if(isset($params["launch_presentation_locale"])){
			$Obj->setLaunchPresentationLocale($params["launch_presentation_locale"]);
		}

		if(isset($params["launch_presentation_document_target"])){
			$Obj->setLaunchPresentationDocumentTarget($params["launch_presentation_document_target"]);
		}

		if(isset($params["launch_presentation_css_url"])){
			$Obj->setLaunchPresentationCssUrl($params["launch_presentation_css_url"]);
		}

		if(isset($params["launch_resentation_width"])){
			$Obj->setLaunchResentationWidth($params["launch_resentation_width"]);
		}

		if(isset($params["launch_resentation_height"])){
			$Obj->setLaunchResentationHeight($params["launch_resentation_height"]);
		}

		if(isset($params["launch_resentation_return_url"])){
			$Obj->setLaunchResentationReturnUrl($params["launch_resentation_return_url"]);
		}

		if(isset($params["tool_consumer_info_product_family"])){
			$Obj->setToolConsumerInfoProductFamily($params["tool_consumer_info_product_family"]);
		}

		if(isset($params["tool_consumer_info_version"])){
			$Obj->setToolConsumerInfoVersion($params["tool_consumer_info_version"]);
		}

		if(isset($params["tool_consumer_instance_guid"])){
			$Obj->setToolConsumerInstanceGuid($params["tool_consumer_instance_guid"]);
		}

		if(isset($params["tool_consumer_instance_name"])){
			$Obj->setToolConsumerInstanceName($params["tool_consumer_instance_name"]);
		}

		if(isset($params["tool_consumer_instance_description"])){
			$Obj->setToolConsumerInstanceDescription($params["tool_consumer_instance_description"]);
		}

		if(isset($params["tool_consumer_instance_url"])){
			$Obj->setToolConsumerInstanceUrl($params["tool_consumer_instance_url"]);
		}

		if(isset($params["tool_consumer_instance_contact_email"])){
			$Obj->setToolConsumerInstanceContactEmail($params["tool_consumer_instance_contact_email"]);
		}

		if(isset($params["lis_result_sourcedid"])){
			$Obj->setLisResultSourcedid($params["lis_result_sourcedid"]);
		}

		if(isset($params["lis_outcome_service_url"])){
			$Obj->setLisOutcomeServiceUrl($params["lis_outcome_service_url"]);
		}

		if(isset($params["lis_person_sourcedid"])){
			$Obj->setLisPersonSourcedid($params["lis_person_sourcedid"]);
		}

		if(isset($params["lis_course_offering_sourceded"])){
			$Obj->setLisCourseOfferingSourceded($params["lis_course_offering_sourceded"]);
		}

		if(isset($params["lis_course_section_sourceded"])){
			$Obj->setLisCourseSectionSourceded($params["lis_course_section_sourceded"]);
		}

		$custom = [];
		foreach($params as $key => $value){
			if(stripos($key, "custom_") === 0){
				$custom[$key] = $value;
			}
		}

		$Obj->setCustomParams($custom);

		$ext = [];
		foreach($params as $key => $value){
			if(stripos($key, "ext_") === 0){
				$ext[$key] = $value;
			}
		}

		$Obj->setExtParams($ext);

		return $Obj;

	}

}