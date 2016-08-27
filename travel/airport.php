<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/30
 * Time: 下午2:07
 */
$url = "https://webservices.wvhservices.com/LocationService.svc/GetAiportLocationJson?method=jQuery19107593850123613375_1469858596712&term=beijing";

$postUrl = $url;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_HEADER, 0);
$output = curl_exec($ch);
curl_close($ch);


echo $output;