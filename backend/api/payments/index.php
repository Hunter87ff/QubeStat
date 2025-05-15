<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");


/**
 * Generates a SHA-512 hash of the provided data.
 * @param mixed $data The input data to be hashed
 * @return string The SHA-512 hash as a hexadecimal string
 */
function sha512($data) {
    return hash("sha512", $data);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the payment form submission
    $data = json_decode(file_get_contents("php://input"), true);
    // Process the payment with the received data
    // print the payload
    $application_payload;
    if(isset($data['application_payload'])) {
        $application_payload = $data['application_payload'];
        $data["payload"] = $application_payload;
    } else {
        $application_payload = null;
    }

    echo json_encode($data);
    exit;
}

?>

<form id="payment-form" action="https://test.payu.in/_payment" method="post" enctype="application/x-www-form-urlencoded"> <br>
    <input name="key" value="JPM7Fg"> <br>
    <input name="surl" value="https://test-payment-middleware.payu.in/simulatorResponse"> <br>
    <input name="furl" value="https://test-payment-middleware.payu.in/simulatorResponse"> <br>
    <input name="txnid" value="ypl938459435"> <br>
    <input name="amount" value="10"> <br>
    <input name="productinfo" value="test"> <br>
    <input name="firstname" value="test"> <br>
    <input name="email" value="test@test.com"> <br>
    <input name="phone" value="9"> <br>
    <input name="hash" value="ba02cb25a731c76ae3069b886413e5aeb084969db47f1460d77290b7e70619043bf9142bd140a3e9d6dc867a1536a51118498c61c7d239f8d09e336274fd3b8c"> <br>
    <button type="submit">Pay Now</button>
</form>