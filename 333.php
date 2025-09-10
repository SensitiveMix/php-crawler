<?php
header('Content-type:text/html; charset=GBK');
function request_post($url = '', $param = '') {
    if (empty($url) || empty($param)) {
        return false;
    }

    $postUrl = $url;
    $curlPost = $param;
    $curlPost = $param;
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
    curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    $data = curl_exec($ch);//运行curl
    $casts = str_replace('<img src="/UploadFiles', '<img src="http://www.wvmp360.com/UploadFiles', $data);
    curl_close($ch);

    return $casts;
}
function testAction(){
    $url = 'http://www.wvmp360.com/lytc_lx.asp?cid=0&keys=&uid=18913590691&oid=0&tid=0&zid=8';
    $post_data['last']       = '0';
    $post_data['amount']      = '100';
    $o = "";
    foreach ( $post_data as $k => $v )
    {
        $o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);

    $res = request_post($url, $post_data);
//    print_r($res);
    echo $res;

}
testAction();
?>
