<?php

class V1p1p1Test extends \PHPUnit_Framework_TestCase {

	function getDefaultParams(){
		return [
			"lti_message_type"                     => "basic-lti-launch-reqeust",
			"lti_version"                          => "LTI-1p0",
			"resource_link_id"                     => "stories-from-the-mountain",
			"resource_link_title"                  => "Stories from the Mountain",
			"resource_link_description"            => "A Memoir",
			"user_id"                              => 90053,
			"user_image"                           => "http://www.gravatar.com/avatar/9321351ac36ea0cc38eb919003e8caa0.png",
			"roles"                                => "Learner,Member",
			"role_scope_mentor"                    => "90053,900054,90056",
			"lis_person_name_given"                => "Bilbo",
			"lis_person_name_family"               => "Baggins",
			"lis_person_name_full"                 => "Bilbo Baggins of Underhill, Shire",
			"lis_person_contact_email_primary"     => "bbaggins@shirenet.com",
			"context_id"                           => "SFTM-Vol1",
			"context_type"                         => "CourseSection",
			"context_label"                        => "SFTM-Vol1",
			"launch_presentation_locale"           => "en-US",
			"launch_presentation_document_target"  => "iframe",
			"launch_presentation_width"            => 500,
			"context_title"                        => "An evaluation of the writings of the Shire.",
			"launch_presentation_height"           => 500,
			"launch_presentation_return_url"       => "https://shire.edu/schools/launch-portal/",
			"tool_consumer_instance_guid"          => "shire.edu",
			"tool_consumer_instance_name"          => "The Shire School for the Gifted",
			"tool_consumer_instance_description"   => "A school for gifted students in the Shire",
			"tool_consumer_instance_url"           => "https://shire.edu",
			"tool_consumer_instance_contact_email" => "admin@shire.edu",
			"lis_result_sourcedid"                 => 91827364128736491287346,
			"lis_person_sourcedid"                 => 90053,
			"lis_course_offering_sourcedid"        => "SFTM:1234",
			"lis_course_section_sourcedid"         => "SFTM:1234-002",
			"custom_additional_skills"             => "burglary",
			"ext_special_equipment"                => "Dagger",
		];
	}

	function getBuiltLtiRequest(){
		$director = new \Lti\V1p1p1Director(new \Lti\V1p1p1Builder);
		$director->buildLtiRequest($this->getDefaultParams());
		return $director->getLtiRequest();
	}

	function test_BuilderInterface(){

		$inst = new Lti\V1p1p1Builder;
		$this->assertInstanceOf("\\Lti\\V1p1p1BuilderInterface", $inst);

	}

	function test_Director(){
		$director = new \Lti\V1p1p1Director(new \Lti\V1p1p1Builder);
		$director->buildLtiRequest($this->getDefaultParams());

		$inst = $director->getLtiRequest();

		$this->assertInstanceOf("\\Lti\\V1p1p1Interface", $inst);
	}

	/**
	 * @expectedException \Lti\Exceptions\MissingRequiredParameterException
	 */
	function test_required_lti_message_type(){

		$params = $this->getDefaultParams();
		unset($params["lti_message_type"]);

		$director = new \Lti\V1p1p1Director(new \Lti\V1p1p1Builder);
		$director->buildLtiRequest($params);

	}

	/**
	 * @expectedException \Lti\Exceptions\MissingRequiredParameterException
	 */
	function test_required_lti_version(){

		$params = $this->getDefaultParams();
		unset($params["lti_version"]);

		$director = new \Lti\V1p1p1Director(new \Lti\V1p1p1Builder);
		$director->buildLtiRequest($params);

	}

	/**
	 * @expectedException \Lti\Exceptions\MissingRequiredParameterException
	 */
	function test_required_resource_link_id(){

		$params = $this->getDefaultParams();
		unset($params["resource_link_id"]);

		$director = new \Lti\V1p1p1Director(new \Lti\V1p1p1Builder);
		$director->buildLtiRequest($params);

	}

	function test_getLtiMessageType(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "basic-lti-launch-reqeust";
		$result = $lti->getLtiMessageType();
		$this->assertEquals($expected, $result);
	}

	function test_getLtiVersion(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "LTI-1p0";
		$result = $lti->getLtiVersion();
		$this->assertEquals($expected, $result);
	}

	function test_getResourceLinkId(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "stories-from-the-mountain";
		$result = $lti->getResourceLinkId();
		$this->assertEquals($expected, $result);
	}

	function test_getResourceLinkTitle(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "Stories from the Mountain";
		$result = $lti->getResourceLinkTitle();
		$this->assertEquals($expected, $result);
	}

	function test_getResourceLinkDescription(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "A Memoir";
		$result = $lti->getResourceLinkDescription();
		$this->assertEquals($expected, $result);
	}

	function test_getUserId(){
		$lti = $this->getBuiltLtiRequest();
		$expected = 90053;
		$result = $lti->getUserId();
		$this->assertEquals($expected, $result);
	}

	function test_getUserImage(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "http://www.gravatar.com/avatar/9321351ac36ea0cc38eb919003e8caa0.png";
		$result = $lti->getUserImage();
		$this->assertEquals($expected, $result);
	}

	function test_getRoles(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "Learner,Member";
		$result = $lti->getRoles();
		$this->assertEquals($expected, $result);
	}

	function test_getRoleScopeMentor(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "90053,900054,90056";
		$result = $lti->getRoleScopeMentor();
		$this->assertEquals($expected, $result);
	}

	function test_getLisPersonNameGiven(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "Bilbo";
		$result = $lti->getLisPersonNameGiven();
		$this->assertEquals($expected, $result);
	}

	function test_getLisPersonNameFamily(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "Baggins";
		$result = $lti->getLisPersonNameFamily();
		$this->assertEquals($expected, $result);
	}

	function test_getLisPersonNameFull(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "Bilbo Baggins of Underhill, Shire";
		$result = $lti->getLisPersonNameFull();
		$this->assertEquals($expected, $result);
	}

	function test_getLisPersonContactEmailPrimary(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "bbaggins@shirenet.com";
		$result = $lti->getLisPersonContactEmailPrimary();
		$this->assertEquals($expected, $result);
	}

	function test_getContextId(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "SFTM-Vol1";
		$result = $lti->getContextId();
		$this->assertEquals($expected, $result);
	}

	function test_getContextType(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "CourseSection";
		$result = $lti->getContextType();
		$this->assertEquals($expected, $result);
	}

	function test_getContextLabel(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "SFTM-Vol1";
		$result = $lti->getContextLabel();
		$this->assertEquals($expected, $result);
	}

	function test_getLaunchPresentationLocale(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "en-US";
		$result = $lti->getLaunchPresentationLocale();
		$this->assertEquals($expected, $result);
	}

	function test_getLaunchPresentationDocumentTarget(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "iframe";
		$result = $lti->getLaunchPresentationDocumentTarget();
		$this->assertEquals($expected, $result);
	}

	function test_getLaunchPresentationWidth(){
		$lti = $this->getBuiltLtiRequest();
		$expected = 500;
		$result = $lti->getLaunchPresentationWidth();
		$this->assertEquals($expected, $result);
	}

	function test_getContextTitle(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "An evaluation of the writings of the Shire.";
		$result = $lti->getContextTitle();
		$this->assertEquals($expected, $result);
	}

	function test_getLaunchPresentationHeight(){
		$lti = $this->getBuiltLtiRequest();
		$expected = 500;
		$result = $lti->getLaunchPresentationHeight();
		$this->assertEquals($expected, $result);
	}

	function test_getLaunchPresentationReturnUrl(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "https://shire.edu/schools/launch-portal/";
		$result = $lti->getLaunchPresentationReturnUrl();
		$this->assertEquals($expected, $result);
	}

	function test_getToolConsumerInstanceGuid(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "shire.edu";
		$result = $lti->getToolConsumerInstanceGuid();
		$this->assertEquals($expected, $result);
	}

	function test_getToolConsumerInstanceName(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "The Shire School for the Gifted";
		$result = $lti->getToolConsumerInstanceName();
		$this->assertEquals($expected, $result);
	}

	function test_getToolConsumerInstanceDescription(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "A school for gifted students in the Shire";
		$result = $lti->getToolConsumerInstanceDescription();
		$this->assertEquals($expected, $result);
	}

	function test_getToolConsumerInstanceUrl(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "https://shire.edu";
		$result = $lti->getToolConsumerInstanceUrl();
		$this->assertEquals($expected, $result);
	}

	function test_getToolConsumerInstanceContactEmail(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "admin@shire.edu";
		$result = $lti->getToolConsumerInstanceContactEmail();
		$this->assertEquals($expected, $result);
	}

	function test_getLisResultSourcedid(){
		$lti = $this->getBuiltLtiRequest();
		$expected = 91827364128736491287346;
		$result = $lti->getLisResultSourcedid();
		$this->assertEquals($expected, $result);
	}

	function test_getLisPersonSourcedid(){
		$lti = $this->getBuiltLtiRequest();
		$expected = 90053;
		$result = $lti->getLisPersonSourcedid();
		$this->assertEquals($expected, $result);
	}

	function test_getLisCourseOfferingSourcedid(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "SFTM:1234";
		$result = $lti->getLisCourseOfferingSourcedid();
		$this->assertEquals($expected, $result);
	}

	function test_getLisCourseSectionSourcedid(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "SFTM:1234-002";
		$result = $lti->getLisCourseSectionSourcedid();
		$this->assertEquals($expected, $result);
	}

	function test_getCustomParam(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "burglary";
		$result = $lti->getCustomParam("custom_additional_skills");
		$this->assertEquals($expected, $result);
	}

	function test_getAllCustomParams(){
		$lti = $this->getBuiltLtiRequest();
		$expected = ["custom_additional_skills" => "burglary"];
		$result = $lti->getAllCustomParams();
		$this->assertEquals($expected, $result);
	}

	function test_getExtParam(){
		$lti = $this->getBuiltLtiRequest();
		$expected = "Dagger";
		$result = $lti->getExtParam("ext_special_equipment");
		$this->assertEquals($expected, $result);
	}

	function test_getAllExtParams(){
		$lti = $this->getBuiltLtiRequest();
		$expected = ["ext_special_equipment" => "Dagger"];
		$result = $lti->getAllExtParams();
		$this->assertEquals($expected, $result);
	}

	function test_getContextId_change(){

		$expected = "A different context ID.";

		$params = $this->getDefaultParams();
		$params["context_id"] = $expected;

		$director = new \Lti\V1p1p1Director(new \Lti\V1p1p1Builder);
		$director->buildLtiRequest($params);
		$lti = $director->getLtiRequest();

		$result = $lti->getContextId();
		$this->assertEquals($expected, $result);
	}

	function test_getRoleScopeMentor_missing(){

		$params = $this->getDefaultParams();
		unset($params["role_scope_mentor"]);

		$director = new \Lti\V1p1p1Director(new \Lti\V1p1p1Builder);
		$director->buildLtiRequest($params);
		$lti = $director->getLtiRequest();

		$result = $lti->getRoleScopeMentor();
		$this->assertEquals(null, $result);
	}


}