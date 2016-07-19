<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/19
 * Time: 10:37
 */
header('Access-Control-Allow-Origin: *');
$aContext = array(
    'http' => array(
        'method' => 'POST',
        'Cookie'=>'ASPSESSIONIDSARRSDQR=FMBJCLLCDBNMGJJFPCKJMFIJ',
        'host'=>'www.wvmp360.com',
        'header' =>"Referer:http://www.wvmp360.com/lytc.asp?uid=18913590691&brand="
    ),
);
$cxContext = stream_context_create($aContext);

$cont = file_get_contents("http://www.wvmp360.com/lytc_lx.asp?cid=0&keys=&uid=18913590691&oid=0&tid=0&zid=", False, $cxContext);

echo $cont;



//$aContext = array(
//    'http' => array(
//        'method' => 'GET',
//        'header' =>"Referer:http://jipiao.kuxun.cn/beijing-shanghai.html\r\n"
//    ),
//);
//$cxContext = stream_context_create($aContext);
//
//$cont = file_get_contents("http://jipiao.kuxun.cn/internal_v2/ajax.php?from=PEK&to=SHA&date=2012-07-21&queryid=8e99dbcdcc58c75c&action=getSingleData_v3&p=1167634238556&fn_md5=&emptyrec=1111&ota_md5=", False, $cxContext);
//
//echo $cont;