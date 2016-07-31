<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/30
 * Time: 下午2:07
 */
$url="https://webservices.wvhservices.com/LocationService.svc/GetAiportLocationJson?method=jQuery19107593850123613375_1469858596712&term=shang";

$postUrl = $url;
//    $curlPost = $param;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $postUrl);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    $data = curl_exec($ch);//运行curl
    curl_close($ch);
    $dataEncode= mb_convert_encoding($data, 'utf-8', 'GBK,UTF-8,ASCII');

    echo $data;