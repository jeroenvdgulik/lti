<?php

class V1p1p1OutcomeServiceTest extends \PHPUnit_Framework_TestCase {

	function test_makeReplaceResultXML(){
		$xml = new Lti\V1p1p1OutcomeService;
		$expected = '<?xml version="1.0" encoding="UTF-8"?>'."\n".
			'<imsx_POXEnvelopeRequest xmlns="http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">'.
				'<imsx_POXHeader>'.
					'<imsx_POXRequestHeaderInfo>'.
						'<imsx_version>V1.0</imsx_version>'.
						'<imsx_messageIdentifier>0d67</imsx_messageIdentifier>'.
					'</imsx_POXRequestHeaderInfo>'.
				'</imsx_POXHeader>'.
				'<imsx_POXBody>'.
					'<replaceResultRequest>'.
						'<resultRecord>'.
							'<sourcedGUID>'.
								'<sourcedId>8420</sourcedId>'.
							'</sourcedGUID>'.
							'<result>'.
								'<resultScore>'.
									'<language>en-US</language>'.
									'<textString>.8</textString>'.
								'</resultScore>'.
							'</result>'.
						'</resultRecord>'.
					'</replaceResultRequest>'.
				'</imsx_POXBody>'.
			'</imsx_POXEnvelopeRequest>'."\n";

		$result = $xml->makeReplaceResultXML("8420", ".8", "0d67")->asXML();
		$this->assertEquals($expected, $result);
	}

	function test_makeReadResultXML(){
		$xml = new Lti\V1p1p1OutcomeService;
		$expected = '<?xml version="1.0" encoding="UTF-8"?>'."\n".
			'<imsx_POXEnvelopeRequest xmlns="http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">'.
				'<imsx_POXHeader>'.
					'<imsx_POXRequestHeaderInfo>'.
						'<imsx_version>V1.0</imsx_version>'.
						'<imsx_messageIdentifier>0d67</imsx_messageIdentifier>'.
					'</imsx_POXRequestHeaderInfo>'.
				'</imsx_POXHeader>'.
				'<imsx_POXBody>'.
					'<readResultRequest>'.
						'<resultRecord>'.
							'<sourcedGUID>'.
								'<sourcedId>8420</sourcedId>'.
							'</sourcedGUID>'.
						'</resultRecord>'.
					'</readResultRequest>'.
				'</imsx_POXBody>'.
			'</imsx_POXEnvelopeRequest>'."\n";

		$result = $xml->makeReadResultXML("8420", "0d67")->asXML();
		$this->assertEquals($expected, $result);
	}

	function test_makeDeleteResultXML(){
		$xml = new Lti\V1p1p1OutcomeService;
		$expected = '<?xml version="1.0" encoding="UTF-8"?>'."\n".
			'<imsx_POXEnvelopeRequest xmlns="http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">'.
				'<imsx_POXHeader>'.
					'<imsx_POXRequestHeaderInfo>'.
						'<imsx_version>V1.0</imsx_version>'.
						'<imsx_messageIdentifier>0d67</imsx_messageIdentifier>'.
					'</imsx_POXRequestHeaderInfo>'.
				'</imsx_POXHeader>'.
				'<imsx_POXBody>'.
					'<deleteResultRequest>'.
						'<resultRecord>'.
							'<sourcedGUID>'.
								'<sourcedId>8420</sourcedId>'.
							'</sourcedGUID>'.
						'</resultRecord>'.
					'</deleteResultRequest>'.
				'</imsx_POXBody>'.
			'</imsx_POXEnvelopeRequest>'."\n";

		$result = $xml->makeDeleteResultXML("8420", "0d67")->asXML();
		$this->assertEquals($expected, $result);
	}

	function test_parseReplaceResultResponseXML(){
		$xml = new Lti\V1p1p1OutcomeService;
		$data = '<?xml version="1.0" encoding="UTF-8"?>'."\n".
			'<?xml version="1.0" encoding="UTF-8"?>'.
				'<imsx_POXEnvelopeResponse xmlns="http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">'.
				'<imsx_POXHeader>'.
					'<imsx_POXResponseHeaderInfo>'.
						'<imsx_version>V1.0</imsx_version>'.
						'<imsx_messageIdentifier>5548f0e4c94c9</imsx_messageIdentifier>'.
						'<imsx_statusInfo>'.
							'<imsx_codeMajor>success</imsx_codeMajor>'.
							'<imsx_severity>status</imsx_severity>'.
							'<imsx_description>Score deleted</imsx_description>'.
							'<imsx_messageRefIdentifier>5548f0e4c084a</imsx_messageRefIdentifier>'.
							'<imsx_operationRefIdentifier>replaceResultResponse</imsx_messageRefIdentifier>'.
						'</imsx_statusInfo>'.
					'</imsx_POXResponseHeaderInfo>'.
				'</imsx_POXHeader>'.
					'<imsx_POXBody>'.
						'<replaceResultResponse />'.
					'</imsx_POXBody>'.
				'</imsx_POXEnvelopeResponse>'."\n";

		$result = $xml->parseReplaceResultResponse($data);
		// $this->assertEquals($expected, $result);
	}

	function test_parseDeleteResultResponseXML(){
		$xml = new Lti\V1p1p1OutcomeService;
		$data = '<?xml version="1.0" encoding="UTF-8"?>'."\n".
			'<?xml version="1.0" encoding="UTF-8"?>'.
				'<imsx_POXEnvelopeResponse xmlns="http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">'.
				'<imsx_POXHeader>'.
					'<imsx_POXResponseHeaderInfo>'.
						'<imsx_version>V1.0</imsx_version>'.
						'<imsx_messageIdentifier>5548f0e4c94c9</imsx_messageIdentifier>'.
						'<imsx_statusInfo>'.
							'<imsx_codeMajor>success</imsx_codeMajor>'.
							'<imsx_severity>status</imsx_severity>'.
							'<imsx_description>Score deleted</imsx_description>'.
							'<imsx_messageRefIdentifier>5548f0e4c084a</imsx_messageRefIdentifier>'.
							'<imsx_operationRefIdentifier>deleteResultResponse</imsx_messageRefIdentifier>'.
						'</imsx_statusInfo>'.
					'</imsx_POXResponseHeaderInfo>'.
				'</imsx_POXHeader>'.
					'<imsx_POXBody>'.
						'<deleteResultResponse />'.
					'</imsx_POXBody>'.
				'</imsx_POXEnvelopeResponse>'."\n";

		$result = $xml->parseDeleteResultResponse($data);
		// $this->assertEquals($expected, $result);
	}

}