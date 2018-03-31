<?php
/**
 * Simple test script, replace the vars with your own details
 */

$host = ''; // Hostname of n-central server
$user = ''; // username of user with api access
$pass = ''; // password of api user

require_once __DIR__ . '/vendor/autoload.php';

use Solarwinds\Soap\customerList;
use Solarwinds\Soap\tKeyPair;
use Solarwinds\Soap\ServerEI2SoapBindingImplService;

// Setup the service to talk to
$client = new ServerEI2SoapBindingImplService('https://' . $host . '/dms2/services2/ServerEI2?wsdl');

// Retrieve all customers.
$customerList = new customerList($user, $pass, new tKeyPair('', ''));

// Actually call the api and get the results.
$result = $client->customerList($customerList);
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
