<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/15
 * Time: 下午8:59
 */
include ("simple_html_dom.php");

//    connect mysql
//	header('Content-type:text/html; charset=UTF-8');
$con = mysql_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("weChat", $con);
mysql_query("set names utf8;");

// Create DOM from URL or file
for($i=1;$i<=5;$i++) {
    $urls = 'http://www.wvmp360.com/news.asp?news.asp?uid=18913590691&cid=101&keys=&brand=&page='.$i;

    $html = file_get_html($urls);


// Find all links
    foreach ($html->find('div[class=new_mplist]') as $element) {
        foreach ($element->find('div.piclist2') as $article) {
            $postId = $article->find('a', 0)->href;
            $content = $article;
            $url = 'http://www.wvmp360.com/' . $postId;
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
            $cast = str_replace('<img src="/editor', '<img src="http://www.wvmp360.com/editor', $out);
            $casts = str_replace('<img src="/UploadFiles', '<img src="http://www.wvmp360.com/UploadFiles', $cast);

            preg_match_all("/<div class=\"intitle\".*?>.*?<\/div>/ism", $casts, $match1);
            preg_match_all("/<span>(.*?)<\/span>/ism", $casts, $match2);
            preg_match_all("/<div style=\"padding:10px;\".*?>.*?<\/div>/ism", $casts, $match);preg_match_all("/<div style=\" margin:0 10px; text-align:left; font-size:12px; color:#999999;\".*?>.*?<\/div>/ism", $casts, $match3);

            $dom = str_get_html($casts);
            $result = $dom->find('div[style=padding:10px;]');
            $detail_title = $match1[0][0];
            $detail_time = $match2[0][1];


            foreach ($result as $v) {
                $detail_content = $v->innertext;
               echo $detail_content;

                mysql_query("INSERT INTO homeArticle (postId,home_content,detail_title,detail_time,detail_content)
            VALUES ('$postId','$content','$detail_title','$detail_time','$detail_content')");
            }

            $detail_content = "";
            $dom->clear();


        }


    }
}

mysql_close($con);
