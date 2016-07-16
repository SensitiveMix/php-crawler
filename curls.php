<?php
header("Access-Control-Allow-Origin:*");

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.wvmp360.com/index.asp?uid=18913590691&brand=");
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 3. 执行并获取HTML文档内容
$output = curl_exec($ch);
if($output === FALSE ){
    echo "CURL Error:".curl_error($ch);
}
curl_close($ch);
//编码
$out= mb_convert_encoding($output, 'utf-8', 'GBK,UTF-8,ASCII');

$cast=str_replace('<img src="','<img src="http://www.wvmp360.com/',$out);
//printf($output);
preg_match_all("/<div class=\"single_item\".*?>.*?<\/div>/ism",$cast,$match);

//echo $cast;
print_r($match);
//echo str_replace('/*.jpg/',"http://www.wvmp360.com/UploadFiles/2015716105346210.jpg",$out);

