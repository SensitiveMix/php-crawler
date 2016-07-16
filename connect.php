<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/16
 * Time: 下午10:14
 */
header('Content-type:text/html; charset=UTF-8');

$server_name="localhost:3306"; //数据库服务器名称
$username="root"; // 连接数据库用户名
$password=""; // 连接数据库密码
$mysql_database="wechat"; // 数据库的名字
// 连接到数据库
$conn=mysql_connect($server_name, $username, $password);
mysql_query("set names utf8");
// 从表中提取信息的sql语句
$strsql="select detail_title from homeArticle WHERE `postId`='view.asp?uid=18913590691&id=5014&Brand='";
//执行sql查询
//mysql_select_db($mysql_database,$conn);
//$result=mysql_query($sql);
$result=mysql_db_query($mysql_database, $strsql, $conn);
$row=mysql_fetch_row($result);
// 获取查询结果
// 定位到第一条记录
//mysql_data_seek($result, 0);
//// 循环取出记录
//while ($row=mysql_fetch_row($result))
//{
//    for ($i=0; $i<mysql_num_fields($result); $i++ )
//    {
//        echo $row[$i];
//    }
//}

print_r($row);
// 释放资源
//mysql_free_result($result);
// 关闭连接
mysql_close($conn);
?>