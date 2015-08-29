<?php
 
require "twilio-php/Services/Twilio.php";
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACbd0afab17e4792a3f65f527761889c13";
$AuthToken = "7cbdee70c2f1243fb801ec197eff17b8";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
try {
    $sms = $client->account->sms_messages->create(
        "+18123011780", // From this number
        "+8801988150641", // To this number
        "Hi Tazim,Plese donate blood and fuck tammi's Voda!"
    );
} catch (Services_Twilio_RestException $e) {
    echo $e->getMessage();
}

?>
