<?php
/**
 * Created by PhpStorm.
 * User: sopzhou
 * Date: 2016/8/8
 * Time: 18:17
 */
// API access key from Google API's Console
define('API_ACCESS_KEY', 'AIzaSyCPRURGRKWjANpU-54i1lXanhG91eqS-Xw');
$registrationIds [] = array('fir-5c89e');
// prep the bundle
$msg = array
(
    'title' => 'Firebase Notification',
    'message' => 'dfsdfdsf',
    'type' => 'message'
);
$fields = array
(
    'registration_ids' => $registrationIds,
    'data' => $msg
);

$headers = array
(
    'Content-Type: application/json',
    'Authorization: key=' . API_ACCESS_KEY
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
if ($result == FALSE) {
    die('Curl Failed');
}
//var_dump($result);
echo $result;