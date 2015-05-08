<?php

namespace Lti;

class V1p1p1OutcomeService {

	protected $base = '<?xml version = "1.0" encoding = "UTF-8"?>'.
		              '<imsx_POXEnvelopeRequest xmlns = "http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">'.
		              '</imsx_POXEnvelopeRequest>';

	protected function getEnvelope($messageId = null){
		$messageId = $messageId ?: md5(microtime());
		$xml = new \SimpleXMLElement($this->base);
		// $envelope = \simplexml_load_string($base);

		$headerInfo = $xml->addChild("imsx_POXHeader")
			->addChild("imsx_POXRequestHeaderInfo");

		$headerInfo->addChild("imsx_version", "V1.0");
		$headerInfo->addChild("imsx_messageIdentifier", $messageId);
		return $xml;
	}

	function makeReplaceResultXML($sourcedId, $score, $messageId = null){
		$xml = $this->getEnvelope($messageId);
		$resultRecord = $xml->addChild("imsx_POXBody")
			->addChild("replaceResultRequest")
			->addChild("resultRecord");

		$resultRecord->addChild("sourcedGUID")
			->addChild("sourcedId", $sourcedId);
		$resultScore = $resultRecord->addChild("result")
			->addChild("resultScore");

		$resultScore->addChild("language", "en-US");
		$resultScore->addChild("textString", $score);
		return $xml;
	}

	function makeReadResultXML($sourcedId, $messageId = null){
		$xml = $this->getEnvelope($messageId);
		$resultRecord = $xml->addChild("imsx_POXBody")
			->addChild("readResultRequest")
			->addChild("resultRecord");

		$resultRecord->addChild("sourcedGUID")
			->addChild("sourcedId", $sourcedId);
		return $xml;
	}

	function makeDeleteResultXML($sourcedId, $messageId = null){
		$xml = $this->getEnvelope($messageId);
		$resultRecord = $xml->addChild("imsx_POXBody")
			->addChild("deleteResultRequest")
			->addChild("resultRecord");

		$resultRecord->addChild("sourcedGUID")
			->addChild("sourcedId", $sourcedId);
		return $xml;
	}

}

/*
makeReplaceResultXML
<?xml version = "1.0" encoding = "UTF-8"?>
<imsx_POXEnvelopeRequest xmlns = "http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">
  <imsx_POXHeader>
    <imsx_POXRequestHeaderInfo>
      <imsx_version>V1.0</imsx_version>
      <imsx_messageIdentifier>5548e06451568</imsx_messageIdentifier>
    </imsx_POXRequestHeaderInfo>
  </imsx_POXHeader>
  <imsx_POXBody>
    <replaceResultRequest>
      <resultRecord>
        <sourcedGUID>
          <sourcedId>ed4ec3e24ac1b1c25ddd816659e4bd91:::S3294476:::29123:::dyJ86SiwwA9</sourcedId>
        </sourcedGUID>
        <result>
          <resultScore>
            <language>en-US</language>
            <textString>1</textString>
          </resultScore>
        </result>
      </resultRecord>
    </replaceResultRequest>
  </imsx_POXBody>
</imsx_POXEnvelopeRequest>

makeReadResultXML
<?xml version = "1.0" encoding = "UTF-8"?>
<imsx_POXEnvelopeRequest xmlns = "http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">
  <imsx_POXHeader>
    <imsx_POXRequestHeaderInfo>
      <imsx_version>V1.0</imsx_version>
      <imsx_messageIdentifier>5548ef88e2f8b</imsx_messageIdentifier>
    </imsx_POXRequestHeaderInfo>
  </imsx_POXHeader>
  <imsx_POXBody>
    <readResultRequest>
      <resultRecord>
        <sourcedGUID>
          <sourcedId>ed4ec3e24ac1b1c25ddd816659e4bd91:::S3294476:::29123:::dyJ86SiwwA9</sourcedId>
        </sourcedGUID>
      </resultRecord>
    </readResultRequest>
  </imsx_POXBody>
</imsx_POXEnvelopeRequest>

makeDeleteResultXML
<?xml version = "1.0" encoding = "UTF-8"?>
<imsx_POXEnvelopeRequest xmlns = "http://www.imsglobal.org/services/ltiv1p1/xsd/imsoms_v1p0">
  <imsx_POXHeader>
    <imsx_POXRequestHeaderInfo>
      <imsx_version>V1.0</imsx_version>
      <imsx_messageIdentifier>5548ef88e2f8b</imsx_messageIdentifier>
    </imsx_POXRequestHeaderInfo>
  </imsx_POXHeader>
  <imsx_POXBody>
    <deleteResultRequest>
      <resultRecord>
        <sourcedGUID>
          <sourcedId>ed4ec3e24ac1b1c25ddd816659e4bd91:::S3294476:::29123:::dyJ86SiwwA9</sourcedId>
        </sourcedGUID>
      </resultRecord>
    </deleteResultRequest>
  </imsx_POXBody>
</imsx_POXEnvelopeRequest>

 */