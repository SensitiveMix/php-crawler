<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/8/17
 * Time: 上午12:33
 */

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.mohou.com/models/model-120398.html");
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 3. 执行并获取HTML文档内容
$output = curl_exec($ch);
if($output === FALSE ){
    echo "CURL Error:".curl_error($ch);
}

echo $output;
curl_close($ch);