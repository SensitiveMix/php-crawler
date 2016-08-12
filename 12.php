<?php
/**
 * Created by PhpStorm.
 * User: sopzhou
 * Date: 2016/8/8
 * Time: 18:17
 */
// API access key from Google API's Console
define('API_ACCESS_KEY', 'AIzaSyCPRURGRKWjANpU-54i1lXanhG91eqS-Xw');
$registrationIds = array('7096d9c9-cd20e46b-091c1ed8-a941d8e2-39aa084c-c8f9c00e-c83efd2a-a45d62b6');
// prep the bundle
$msg = array
(
    'body' 	=> 'sdfdfsdf',
    'title'		=> 'aaa',
    'vibrate'	=> 1,
    'sound'		=> 1,
);
$fields = array
(
    'registration_ids' => $registrationIds,
    'notification' => $msg
);

$headers = array
(
    'Authorization: key=' . API_ACCESS_KEY,
    'Content-Type: application/json'
);

$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
//curl_setopt( $ch, CURLOPT_PROXYPORT, "80");
//curl_setopt( $ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch);
curl_close( $ch );
var_dump($result);
echo $result;