<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/17
 * Time: 下午10:39
 */

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.dreamtrips.com/trips/');
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$query = curl_exec($ch);
$out= mb_convert_encoding($query, 'utf-8', 'GBK,UTF-8,ASCII');

echo $out;
curl_close($ch);


