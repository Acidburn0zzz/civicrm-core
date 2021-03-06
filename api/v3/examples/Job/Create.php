<?php
/**
 * Test Generated example of using job create API.
 *
 *
 * @return array
 *   API result array
 */
function job_create_example() {
  $params = array(
    'sequential' => 1,
    'name' => 'API_Test_Job',
    'description' => 'A long description written by hand in cursive',
    'run_frequency' => 'Daily',
    'api_entity' => 'ApiTestEntity',
    'api_action' => 'apitestaction',
    'parameters' => 'Semi-formal explanation of runtime job parameters',
    'is_active' => 1,
  );

  try{
    $result = civicrm_api3('job', 'create', $params);
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
function job_create_expectedresult() {

  $expectedResult = array(
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 29,
    'values' => array(
      '0' => array(
        'id' => '29',
        'domain_id' => '1',
        'run_frequency' => 'Daily',
        'last_run' => '',
        'name' => 'API_Test_Job',
        'description' => 'A long description written by hand in cursive',
        'api_entity' => 'ApiTestEntity',
        'api_action' => 'apitestaction',
        'parameters' => 'Semi-formal explanation of runtime job parameters',
        'is_active' => '1',
      ),
    ),
  );

  return $expectedResult;
}

/**
* This example has been generated from the API test suite.
* The test that created it is called
* testCreate
* and can be found in
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/JobTest.php
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
