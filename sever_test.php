<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/7/22
 * Time: 上午12:09
 */

$conn=mysql_connect('222.73.22.86','root','root');
if(!$conn) echo "失败!";
else echo "成功!";
// 从表中提取信息的sql语句
$sql="SELECT * FROM we_chat where postId!=''";
// 执行sql查询
$result=mysql_db_query('info', $sql, $conn);
// 获取查询结果
$row=mysql_fetch_row($result);
mysql_close();