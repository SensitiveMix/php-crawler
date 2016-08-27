<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/8/20
 * Time: 上午12:56
 */

$origin = '<div class="lytc_time">时间：<span>2016年11月28日-12月1日</span></div>';
$origin = trim($origin);
preg_match('/<span.*>(.*)<\/span>/isU', $origin, $arr);


$lpy = stripos($arr[0], '年');
$ILpy = strripos($arr[0], '年');
$fft = substr($arr[0], 6, 4);   //获取年
$fftL = substr($arr[0], $ILpy - 4, 4);   //获取年

$lps = stripos($arr[0], '日');
$fir = substr($arr[0], $lpy + 3, $lps - $lpy - 3);
$ffa = mb_ereg_replace('[^0-9]', '-', trim($fir));
$firResult = $ffa . '-' . $fft;     //开始时间
if ($lpy == $ILpy) {
    $fps = strripos($arr[0], '日');
    $fms = strripos($arr[0], '-');
    $last = substr($arr[0], $fms + 1, $fps - $fms - 1);
    $data = mb_ereg_replace('月', '-', trim($last));
    $fft = '-' . $fft;
    $lastResult = $data . $fft;     //终止时间
} else {
    $fps = strripos($arr[0], '日');
    $last = substr($arr[0], $ILpy + 3, $fps - $ILpy - 3);
    $data = mb_ereg_replace('月', '-', trim($last));
    $fftL = '-' . $fftL;
    $lastResult = $data . $fftL;     //终止时间
}


echo $firResult;
echo '<br/>';
echo $lastResult;

