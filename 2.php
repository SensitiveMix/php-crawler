<?php
$txt  = "<a http='http://www.fkblog.org'>FKBlog</a>";
echo preg_replace("/<a[^>]*>(.*)<\/a>/isU",'${2}',$txt);
