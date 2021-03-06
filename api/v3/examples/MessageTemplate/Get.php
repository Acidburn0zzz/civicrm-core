<?php
/**
 * Test Generated example of using message_template get API.
 *
 *
 * @return array
 *   API result array
 */
function message_template_get_example() {
  $params = array(
    'msg_title' => 'msg_title_166',
    'msg_subject' => 'msg_subject_166',
    'msg_text' => 'msg_text_166',
    'msg_html' => 'msg_html_166',
    'workflow_id' => 166,
    'is_default' => '1',
    'is_reserved' => 1,
  );

  try{
    $result = civicrm_api3('message_template', 'get', $params);
  }
  catch (CiviCRM_API3_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return array(
      'error' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    );
  }

  return $result;
}

/**
 * Function returns array of result expected from previous function.
 *
 * @return array
 *   API result array
 */
function message_template_get_expectedresult() {

  $expectedResult = array(
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 66,
    'values' => array(
      '66' => array(
        'id' => '66',
        'msg_title' => 'msg_title_166',
        'msg_subject' => 'msg_subject_166',
        'msg_text' => 'msg_text_166',
        'msg_html' => 'msg_html_166',
        'is_active' => '1',
        'workflow_id' => '166',
        'is_default' => '1',
        'is_reserved' => '1',
        'is_sms' => '1',
        'pdf_format_id' => '166',
      ),
    ),
  );

  return $expectedResult;
}

/**
* This example has been generated from the API test suite.
* The test that created it is called
* testGet
* and can be found in
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/MessageTemplateTest.php
*
* You can see the outcome of the API tests at
* https://test.civicrm.org/job/CiviCRM-master-git/
*
* To Learn about the API read
* http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
*
* Browse the api on your own site with the api explorer
* http://MYSITE.ORG/path/to/civicrm/api
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/
