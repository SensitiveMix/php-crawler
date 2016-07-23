<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/23
 * Time: 下午7:54
 */
    //连接数据库
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("weChat", $con);
    mysql_query("set names utf8;");
    include ("simple_html_dom.php");

    $url = 'http://www.wvmp360.com/card.asp?uid=18913590691&brand=';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    // 3. 执行并获取HTML文档内容
    $output = curl_exec($ch);

    if ($output === FALSE) {
    echo "CURL Error:" . curl_error($ch);
    }
    curl_close($ch);
    //编码
    $out = mb_convert_encoding($output, 'utf-8', 'GBK,UTF-8,ASCII');
    $cast = str_replace('<img src="', '<img src="http://www.wvmp360.com/', $out);
    $casts = str_replace('<img src="/UploadFiles', '<img src="http://www.wvmp360.com/UploadFiles', $cast);

    preg_match_all("/<div class=\"new_wvcon_ad\".*?>.*?<\/div>/ism", $casts, $match1);
    preg_match_all("/<div class=\"new_wvcon_nr1\".*?>.*?<\/div>/ism", $casts, $match2);

    $dom=str_get_html($casts);
    $result = $dom->find('div[class=new_wvcon]');

    foreach($result as $v) {
        $detail_content= $v->innertext;
        $str=preg_replace("/<div class=\"new_wvcon_form\".*?>.*?<\/div>/si","",$detail_content); //过滤会员表单
        $str1=preg_replace("/<div class=\"new_wvcon_info\".*?>.*?<\/div>/si","",$str); //过滤头像
        $str2=preg_replace("/<div class=\"new_wvcon_form_sm\".*?>.*?<\/div>/si","",$str1); //过滤提交申请
        $str3=preg_replace("/<div class=\"new_wvcon_form_an\".*?>.*?<\/div>/si","",$str2); //过滤提交申请按钮
        $str4=preg_replace("/<div class=\"userinfo_ewm2\".*?>.*?<\/div>/si","",$str3); //过滤二维码

        mysql_query("INSERT INTO vip_content(id,content) VALUES ('1','$str4')");
        echo $str4;



    }
    mysql_close($con);
