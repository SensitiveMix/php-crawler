<?php
header('Content-type:text/html; charset=utf-8');
include ("../simple_html_dom.php");

$con = mysql_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("travel", $con);
mysql_query("set names utf8;");
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
function testAction(){
    $url = 'http://www.wvmp360.com/lytc_lx.asp?cid=0&keys=&uid=&oid=0&tid=0&zid=0';
    $post_data['last']       = '0';
    $post_data['amount']      = '300';
    $o = "";
    foreach ( $post_data as $k => $v )
    {
        $o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);

    $res = request_post($url, $post_data);
    $dom = str_get_html($res);
    foreach($dom->find('li') as $item){
        $postId= $item->innertext;
        $postId = $item->find('a', 0)->href;

        $url='http://www.wvmp360.com/'.$postId;
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, "gzip");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);

        if($output === FALSE ){
            echo "CURL Error:".curl_error($ch);
        }
        curl_close($ch);
        //编码
        $out= mb_convert_encoding($output, 'utf-8', 'GBK,UTF-8,ASCII');
        $cast=str_replace('<img src="/editor','<img src="http://www.wvmp360.com/editor',$out);
        $cast1=str_replace('<img alt src="/UploadFiles','<img alt src="http://www.wvmp360.com/UploadFiles',$cast);
        $casts=str_replace('<img src="/UploadFiles','<img src="http://www.wvmp360.com/UploadFiles',$cast1);

        preg_match_all("/<div class=\"swiper-wrapper\".*?>.*?<\/div>/ism",$casts,$match1);
        preg_match_all("/<div class=\"lytc_t\".*?>.*?<\/div>/ism",$casts,$match2);
        preg_match_all("/<div class=\"lytc_price2\".*?>.*?<\/div>/ism",$casts,$match3);
        preg_match_all("/<div class=\"lytc_price\".*?>.*?<\/div>/ism",$casts,$match4);
        preg_match_all("/<div class=\"lytc_time\".*?>.*?<\/div>/ism",$casts,$match5);
        preg_match_all("/<div class=\"lytc-banner\".*?>.*?<\/div>/ism",$casts,$match6);

        preg_match_all("/<span style=\"font-size:12px;color:#337FE5;\".*?>.*?<\/span>/ism",$casts,$match7);


        /**
         * 正则配置详情页城市URL
         * CV1 获取整个详情页
         * CV3 初始值
         */
        $cv1=str_get_html($casts);
        $cv3=$cv1->find('span[style=font-size:12px;color:#337FE5;]');
        if(count($cv3)==0){
            $cv3=$cv1->find('span[style=color:#337FE5;font-size:12px;]');
            if(count($cv3)==0){
                $cv3=$cv1->find('span[style=color:#337FE5;]');
                if(count($cv3)==0){
                    $cv3=$cv1->find('span[style=line-height:2;color:#337FE5;font-size:12px;]');
                    if(count($cv3)==0){
                        $cv3=$cv1->find('span[style=font-size:12px;line-height:2;color:#337FE5;]');
                        if(count($cv3)==0){
                            $cv3=$cv1->find('span[style=line-height:2;font-size:12px;color:#337FE5;]');
                            if(count($cv3)==0){
                                $cv3=$cv1->find('span[style=line-height:2;font-size:12px;]');
                                if(count($cv3)==0){
                                    $cv3=$cv1->find('span[style=line-height:2;color:#337FE5;]');
                                    if(count($cv3)==0){
                                        $cv3=$cv1->find('span[style=color:#337fe5;]');
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $cv4=str_get_html($cv3[0]);
        $cv2 = $cv4->find('span',0)->innertext;             //旅游详情页具体WV网址
        $pos= strpos($cv2,"-");                             //获取'-'的位置
        $pos1= strrpos($cv2,"/");                           //获取'/'最后出现的位置
        $countryName= substr($cv2,$pos1+1,($pos-$pos1-1));  //截取城市名称
        echo '<br/>';
        $cv1->clear();
        $cv4->clear();




        $lytc_t=$match2[0][0];      //详情页标题
        $lytc_price2=$match3[0][0]; //旅游套餐价格
        $lytc_price=$match4[0][0];  //抵用积分,会员专享
        $lytc_time=$match5[0][0];   //旅游套餐时间

        $swiperImg=str_get_html($casts);
        $swiperResult = $swiperImg->find('div[class=lytc-banner]');
        $detail_swiper=str_replace('<img src="../UploadFiles','<img src="http://www.wvmp360.com/UploadFiles',$swiperResult[0]);
//        echo $detail_swiper;
//        print_r($swiperResult);



        $castValue=preg_replace("/<div class=\"innav t_center\".*?>.*?<\/div>/si","",$casts);             //过滤底部事业说明,申请网站
        $castValue1=preg_replace("/<div class=\"userinfo\".*?>.*?<\/div>/si","",$castValue);              //过滤杨的信息
        $castValue2=preg_replace("/<div class=\"userinfo_ewm2\".*?>.*?<\/div>/si","",$castValue1);        //过滤底部图片信息
        $castValue3=preg_replace("/<div class=\"new_more\".*?>.*?<\/div>/si","",$castValue2);             //过滤懒加载,加载更多
        $castValue4=preg_replace("/<div class=\"lytc_ad\".*?>.*?<\/div>/si","",$castValue3);              //过滤页底广告
        $dom=str_get_html($castValue4);
        $result = $dom->find('div[class=tab_content]');
        $detail_content=$result[0];
//        echo $detail_content;


        mysql_query("INSERT INTO travel (postId,home_content,lytc_t,lytc_price2,lytc_price,lytc_time,detail_content,detail_swiper,countryName)
       VALUES ('$postId','$item','$lytc_t','$lytc_price2','$lytc_price','$lytc_time','$detail_content','$detail_swiper','$countryName')");


    }
}
testAction();

/**
 * oid 排序规则
 * 0 默认排序
 * 1 更新时间
 * 2 价格从高到低
 * 3 价格从低到高
 */


/**
 * cid 地域
 * 0 全部
 * 1 亚洲
 * 2 欧洲
 * 3 北美洲
 * 4 南美洲
 * 5 澳洲
 * 6 非洲
 * 7 中国
 */

/**
 * zid 主题
 * 1 欢迎之旅
 * 2 游轮之旅
 * 3 铂金之旅
 * 4 体育赛事
 * 5 公益之旅
 * 6 户外运动
 * 7 其他
 * 8 直升机
 */

/**
 * tid  出行月份
 *
 */

//http://www.wvmp360.com/lytc.asp?uid=&cid=0&oid=0&tid=0&zid=0&keys=
//http://www.wvmp360.com/lytc_lx.asp?cid=0&keys=&uid=&oid=0&tid=0&zid=0     默认排序

