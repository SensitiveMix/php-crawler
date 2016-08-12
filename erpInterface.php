<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/8/12
 * Time: 下午6:09
 */
$cardId = $_GET['id'];

$postUrl = "http://erp.zluan.com/erp_api/customerHandler.ashx?CardID=" . $cardId;
$ch = curl_init();//初始化curl
curl_setopt($ch, CURLOPT_URL, $postUrl);//抓取指定网页
curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
//curl_setopt($ch, CURLOPT_GET, 1);//post提交方式
$data = curl_exec($ch);//运行curl


$callback = $_GET['callback'];
echo $callback . '(' . json_encode($data) . ')';


