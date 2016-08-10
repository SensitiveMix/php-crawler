<?php
header('Content-type:text/html; charset=utf-8');
function request_post($url = '', $param = '') {
    if (empty($url) || empty($param)) {
        return false;
    }

    $postUrl = $url;
    $curlPost = $param;
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
    curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    $data = curl_exec($ch);//运行curl
    curl_close($ch);
    $dataEncode= mb_convert_encoding($data, 'utf-8', 'GBK,UTF-8,ASCII');


    return $dataEncode;

}
function testAction($Orgin,$Des,$StartDate,$EndDate){
    $url = 'https://www.dreamtrips.com/Package/GetLowestAirFare?';
    $post_data['Orgin']       = $Orgin;
    $post_data['Destination']      = $Des;
    $post_data['StartDate']       = $StartDate;
    $post_data['EndDate']      = $EndDate;
    $o = "";
    foreach ( $post_data as $k => $v )
    {
        $o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);

    $res = request_post($url, $post_data);
    echo $res;
}

/**
 * 第一个参数 起始地点机场代码
 * 第二个参数 终点机场代码
 * 第三个参数 机票起始时间
 * 第四个参数 机票终止时间
 *
 */
testAction('SHA','TYS','9-1-2016','9-30-2016');


