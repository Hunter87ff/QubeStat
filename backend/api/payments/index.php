<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="https://test.payu.in/" target="_blank">
</head>
<body>
<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://test.payu.in/_payment', [
  'form_params' => [
    'key' => 'JPM7Fg',
    'surl' => 'https://test-payment-middleware.payu.in/simulatorResponse',
    'furl' => 'https://test-payment-middleware.payu.in/simulatorResponse',
    'txnid' => 'gt8l938459435',
    'amount' => 10,
    'productinfo' => 'iPhone',
    'firstname' => 'Hunter',
    'email' => 'test@test.com',
    'phone' => 6969696969,
    'address1' => 'Kolkata',
    'city' => 'You will never know',
    'state' => 'West Bengal',
    'country' => 'India',
    'zipcode' => '70009',
    'hash' => '08087d00df6da3effecb7b3cb80104512869359946551c3c2071d39f3facc737b4f41929a70f18f246339219e61130b4961609a1163503d76e3c5a86e43b91ef'
  ],
  'headers' => [
    'accept' => 'text/plain',
    'content-type' => 'application/x-www-form-urlencoded',
  ],
]);
echo $response->getHeader("location")[0];
// echo $response->getBody();
?>
</body>
</html>