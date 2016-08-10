<?php
$regId = 'AIzaSyCPRURGRKWjANpU-54i1lXanhG91eqS-Xw';
$msg = 'hello';
$message = array("message" => $msg);
$regArray = array('APA91bEdf1w4dQtsUqPT1jHhWEpvrpxzB1yrpL3RVtKrVxfzxfg2-Yl-pwHorsnmSnkqywQ8G90YcGEBoqCjgQU8CnjA0N7mOWF8bHMhHAs4ty46PPTX8yh6eSaSqvU3JTMmb-P0ma90EBG0rsQQbUh3aX895KxitI3LCiGOYqRfE5pZQ');
$url = 'https://android.googleapis.com/gcm/send';

$fields = array('registration_ids' => $regArray, 'data' => $message);
$headers = array('Authorization: key=<AIzaSyCPRURGRKWjANpU-54i1lXanhG91eqS-Xw>', 'Content-Type: application/json');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

$result = curl_exec($ch);
echo $result;
if ($result == FALSE) {
    die('Curl Failed');
}
curl_close($ch);

curl -X POST --header "Authorization: key=<API_ACCESS_KEY>" --Header "Content-Type: application/json" https://fcm.googleapis.com/fcm/send -d "{\"to\":\"<YOUR_DEVICE_ID_TOKEN>\",\"notification\":{\"body\":\"Yellow\"} \"priority":\"10"}"


