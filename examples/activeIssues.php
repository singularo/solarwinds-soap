<?php
/**
 * Simple test script to retrieve active issues.
 */

require_once __DIR__ . '/config.php';

use Solarwinds\Soap\activeIssuesList;
use Solarwinds\Soap\tKeyPair;

if (isset($argv[1])) {
    // Retrieve specific customer.
    $issueFilters[] = new tKeyPair('customerID', $argv[1]);
    $issueFilters[] = new tKeyPair('NOC_View_Status_Filter', 'normal');
    $issueFilters[] = new tKeyPair('NOC_View_Status_Filter', 'warning');
    $issueFilters[] = new tKeyPair('NOC_View_Status_Filter', 'failed');


    $activeIssues = new activeIssuesList($user, $pass, $issueFilters);
    print "Retrieving active issues for $argv[1]\n";
}
else {
    exit("Please pass customer id on command line.\n");
}

$result = $client->activeIssuesList($activeIssues);
$found_issues = $result->getReturn();

// Now loop through the responses and build up and array of information
$issues_output = [];
$count = 0;
foreach ($found_issues as $issue) {
    // Retrieve all the info for the customer
    $info = $issue->getIssue();

    // Loop through the info and set the keys/values
    foreach ($info as $details) {
        $issues_output[$count][$details->getKey()] = $details->getValue();
    }
    $count++;
}

// Sort the array so its in customer id order
asort($issues_output);

// Output the customer id and customer name
foreach ($issues_output as $value) {
    print $value['activeissue.customerid'] . ':' . $value['activeissue.devicename'] . ':' . $value['activeissue.servicename'] . "\n";
}
