<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/19
 * Time: 9:44
 */

include ("simple_html_dom.php");

    //    connect mysql
//	header('Content-type:text/html; charset=UTF-8');
//    $con = mysql_connect("localhost","root","");
//    if (!$con)
//    {
//        die('Could not connect: ' . mysql_error());
//    }
//    mysql_select_db("we_chat", $con);
//    mysql_query("set names utf8;");

// Create DOM from URL or file
$html = file_get_html('http://www.wvmp360.com/lytc.asp?uid=18913590691&brand=');
        $url='http://www.wvmp360.com/lytc.asp?uid=18913590691&brand=';
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, "gzip");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        $out= mb_convert_encoding($output, 'utf-8', 'GBK,UTF-8,ASCII');
        $cast=str_replace('<script src="/jquery.more.index.js','<script src="http://www.wvmp360.com/jquery.more.index.js',$out);
//        $casts=str_replace('<script src="/jquery','<script src="http://www.wvmp360.com/jquery',$cast);

        if($output === FALSE ){
            echo "CURL Error:".curl_error($ch);
        }
        curl_close($ch);

        echo $out;


// Find all links
//foreach($html->find('div[class=newnews_list]') as $element){
//    foreach($element->find('div.single_item') as $article){
////        $postId = $article->find('a', 0)->href;
//        $content=$article;

//        //编码




//        echo $html;
//        print_r($match);
//        var_dump(count($detail_content));


//
//        mysql_query("INSERT INTO homeArticle (postId,home_content,detail_title,detail_time,detail_content,detail_content_count)
//        VALUES ('$postId','$content','$detail_title','$detail_time','$detail_content','$detail_content_count')");
//    }
//
//
//}

//    mysql_close($con);
