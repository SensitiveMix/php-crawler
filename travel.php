<?php

$url='http://www.wvmp360.com/lytc.asp?uid=18913590691&brand=';
ob_start(); //打开输出缓冲区
$ch = curl_init(); //初始化会话
curl_setopt( $ch, CURLOPT_URL, $url ); //设定目标URL
curl_exec( $ch ); //发送请求
$retrievedhtml = ob_get_contents(); //返回内部缓冲区的内容
//ob_end_clean(); //删除内部缓冲区的内容并关闭内部缓冲区
echo $retrievedhtml;
curl_close( $ch ); //会话结束