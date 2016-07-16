<?php
header("content-type:text/html; charset=utf-8");

include "simple_html_dom.php" ;
// Create DOM from URL or file
$html = new simple_html_dom();
// 从url中加载
$html->load_file('http://www.wvmp360.com/index.asp?uid=18913590691&brand=');
echo $html->load_file('http://www.wvmp360.com/index.asp?uid=18913590691&brand=');
$listinfo = $html->find('div[class=Contentbox] ul li a');
foreach($listinfo as $index=>$llstInfo){
    $html->load_file($llstInfo->href);
    $title =$html->find('h1[class=ph]');
    $contentv=$html->find('td[id=article_content]');
    $html->clear();
};
?>