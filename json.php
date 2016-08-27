<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/8/25
 * Time: 上午12:51
 */

$json_string='{"id":1,"name":"php100.com","email":"admin@php100.com","interest":["wordpress","php"]} ';
$obj=json_decode($json_string);
//echo $obj->name; //prints foo
//echo $obj->interest[1]; //prints php

echo json_decode($json_string)->name;