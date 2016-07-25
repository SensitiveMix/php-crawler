<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/25
 * Time: 下午8:14
 */
    include ("../simple_html_dom.php");

    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("system_intro", $con);
    mysql_query("set names utf8;");

    $url='http://www.wvmp360.com/help.asp?uid=18913590691';

    // Create DOM from URL or file
    // $html = file_get_html('http://www.wvmp360.com/news.asp?cid=34&uid=18913590691&brand=');

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
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
    $dom = str_get_html($out);
    $result = $dom->find('div[class=new_help]');
    foreach($result as $item) {
        $result_content = $item->innertext;
        $domes = str_get_html($result_content);
        $result_content_ul = $domes->find('ul');
        foreach ($result_content_ul as $items) {
            foreach ($items->find('li') as $itemValue) {
                //主页每一条内容
                $content=$itemValue;

                $postId = $itemValue->find('a', 0)->href;


                $detail_url='http://www.wvmp360.com/'.$postId;
                $ch=curl_init();
                curl_setopt($ch,CURLOPT_URL,$detail_url);
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
                $cast=str_replace('<img src="/editor','<img src="http://www.wvmp360.com/editor',$out);
                $casts=str_replace('<img src="/UploadFiles','<img src="http://www.wvmp360.com/UploadFiles',$cast);

                preg_match_all("/<div class=\"intitle\".*?>.*?<\/div>/ism",$casts,$match1);
                preg_match_all("/<div class=\"intime\".*?>.*?<\/div>/ism",$casts,$match2);
                preg_match_all("/<div style=\"padding:10px;\".*?>.*?<\/div>/ism",$casts,$match);
                //详情页时间
                $detail_time=preg_replace("/<a[^>]*>(.*)<\/a>/isU",'${2}',$match2[0][0]);
                $detail_content=$match[0][0];
                $detail_title=$match1[0][0];


                $dom=str_get_html($casts);
                $result = $dom->find('div[style=padding:10px;]');
                $result = $dom->find('div[class=new_help]');
                print_r(count($postId));

                mysql_query("INSERT INTO intro (postId,home_content,detail_title,detail_time,detail_content)
            VALUES ('$postId','$content','$detail_title','$detail_time','$detail_content')");

            }
        }
    }
        mysql_close($con);