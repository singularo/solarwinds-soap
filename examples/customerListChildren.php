<?php
/**
 * Simple test script to retrieve children of a specific customer.
 */

require_once __DIR__ . '/config.php';

use Solarwinds\Soap\customerListChildren;
use Solarwinds\Soap\tKeyPair;

if (isset($argv[1])) {
    // Retrieve specific customer.
    $customer_list = new customerListChildren($user, $pass, new tKeyPair('customerID', $argv[1]));
    print "Retrieving customers for $argv[1]\n";
}
else {
    exit("Please pass customer id on command line.\n");
}

// Actually call the api and get the results.
$result = $client->customerListChildren($customer_list);
$found_customers = $result->getReturn();

// Now loop through the responses and build up and array of information
$customer_output = [];
$count = 0;
foreach ($found_customers as $customer) {
    // Retrieve all the info for the customer
    $info = $customer->getInfo();

    // Loop through the info and set the keys/values
    foreach ($info as $details) {
        $customer_output[$count][$details->getKey()] = $details->getValue();
    }
    $count++;
}

// Sort the array so its in customer id order
asort($customer_output);

// Output the customer id and customer name
foreach ($customer_output as $value) {
    print $value['customer.customerid'] . ':' . $value['customer.customername'] . "\n";
}
