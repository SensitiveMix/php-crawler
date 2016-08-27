<?php
/***************************************************************************

 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
**************************************************************************/



/**
 * @file baidu_transapi.php 
 * @author mouyantao(mouyantao@baidu.com)
 * @date 2015/06/23 14:32:18
 * @brief 
 *  
 **/

define("CURL_TIMEOUT",   10); 
define("URL",            "http://api.fanyi.baidu.com/api/trans/vip/translate"); 
define("APP_ID",         "20160820000027121"); //替换为您的APPID
define("SEC_KEY",        "2vExk81N69ddA7aUedyP");//替换为您的密钥

//翻译入口
function translate($query, $from, $to)
{
    $args = array(
        'q' => $query,
        'appid' => APP_ID,
        'salt' => rand(10000,99999),
        'from' => $from,
        'to' => $to,

    );
    $args['sign'] = buildSign($query, APP_ID, $args['salt'], SEC_KEY);
    $ret = call(URL, $args);
    $ret = json_decode($ret, true);
    print_r($ret) ;
    return $ret; 
}

//加密
function buildSign($query, $appID, $salt, $secKey)
{/*{{{*/
    $str = $appID . $query . $salt . $secKey;
    $ret = md5($str);
    return $ret;
}/*}}}*/

//发起网络请求
function call($url, $args=null, $method="post", $testflag = 0, $timeout = CURL_TIMEOUT, $headers=array())
{/*{{{*/
    $ret = false;
    $i = 0; 
    while($ret === false) 
    {
        if($i > 1)
            break;
        if($i > 0) 
        {
            sleep(1);
        }
        $ret = callOnce($url, $args, $method, false, $timeout, $headers);
        $i++;
    }
    return $ret;
}/*}}}*/

function callOnce($url, $args=null, $method="post", $withCookie = false, $timeout = CURL_TIMEOUT, $headers=array())
{/*{{{*/
    $ch = curl_init();
    if($method == "post") 
    {
        $data = convert($args);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_POST, 1);
    }
    else 
    {
        $data = convert($args);
        if($data) 
        {
            if(stripos($url, "?") > 0) 
            {
                $url .= "&$data";
            }
            else 
            {
                $url .= "?$data";
            }
        }
    }
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if(!empty($headers)) 
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    if($withCookie)
    {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $_COOKIE);
    }
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;
}/*}}}*/

function convert(&$args)
{/*{{{*/
    $data = '';
    if (is_array($args))
    {
        foreach ($args as $key=>$val)
        {
            if (is_array($val))
            {
                foreach ($val as $k=>$v)
                {
                    $data .= $key.'['.$k.']='.rawurlencode($v).'&';
                }
            }
            else
            {
                $data .="$key=".rawurlencode($val)."&";
            }
        }
        return trim($data, "&");
    }
    return $args;
}/*}}}*/



translate('apple','en','en');

/**
 * 调用的范例
 * 在输入起始地点时直接调用translate(x,y,z)
 * x  待查询的字符串
 * y  起始语言
 * z  目标语言
 * $query
 * 传入的字符串 必须要判断它的语言,根据待查询的语言设置y
 * 文档:http://api.fanyi.baidu.com/api/trans/product/apidoc
 *
 */
$allen = preg_match("/^[^/x80-/xff]+$/", $query);   //判断是否是英文
//$allcn = preg_match("/^[".chr(0xa1)."-".chr(0xff)."]+$/",$s);  //判断是否是中文
if(!$allen){
    translate('apple','en','en');   //例子  en代表英文
}else{
    translate('苹果','zh','en');     //例子  zh代表中文
}

