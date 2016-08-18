<?php
// API access key from Google API's Console
define('API_ACCESS_KEY', 'AIzaSyCEkFoRJ_4o-Hv4wWspfiOmVdHjW5gGd6A');
$registrationIds = array('123');
// prep the bundle
$msg = array
(
    'data' => '{
    "score": "5x1",
    "time": "15:10"
  }',
    'to' => 'eDOxMAhMdAQ:APA91bFbMOmkU563HaDWyljnzetH60nl8k8wLQU-pxN1FZM3ScfmwrX_VqLXLwPhPEpUcGMDDhmk1yZyWTVK4npp7GHxVVfKbuuVE1-SfwtUmhEo_QlaYXiEjhBURL6zjxJRP-_ut-bC'
);
$fields = array
(
    'data' => $msg
);

$data = '"data": {
				    "score": "5x1",
				    "time": "15:10"
 					 },
  					"to" :\'eDOxMAhMdAQ:APA91bFbMOmkU563HaDWyljnzetH60nl8k8wLQU-pxN1FZM3ScfmwrX_VqLXLwPhPEpUcGMDDhmk1yZyWTVK4npp7GHxVVfKbuuVE1-SfwtUmhEo_QlaYXiEjhBURL6zjxJRP-_ut-bC\' }';

$headers = array
(
    'Authorization: key=' . API_ACCESS_KEY,
    'Content-Type: application/json'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/gcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
var_dump($result);