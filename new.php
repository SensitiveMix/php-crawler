<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">

    <title>旅行</title>
    <meta name="Keywords" content="">
    <meta content="" name="description">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="Stylesheet" type="text/css" href="css/css.css?20234234323">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/zepto.min.js"></script>
    <script type="text/javascript" src="js/globe.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="jquery.more.index.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

    <script>
        wx.config({
            debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
            appId: 'wx9d5b527bb0e88fbd', // 必填，公众号的唯一标识
            timestamp: '1468510273', // 必填，生成签名的时间戳
            nonceStr: '1468510273', // 必填，生成签名的随机串
            signature: '8b957be4ef3fdd68c51f5bf23400bc874022481b',// 必填，签名，见附录1
            jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
        });

        wx.ready(function(){

            //分享到朋友圈
            wx.onMenuShareTimeline({
                title:'旅行',
                link:'http://www.wvmp360.com/lytc.asp?uid=18913590691&brand=',
                imgUrl:'http://www.wvmp360.com/images/lytc.jpg',
                success:function(){alert('分享成功');},
                cancel:function(){
                }}
            );

            //分享给朋友
            wx.onMenuShareAppMessage({
                title: '旅行', // 分享标题
                desc: '让我们带着梦想去旅行，享受每一份快乐！边旅行边赚钱！', // 分享描述
                link: 'http://www.wvmp360.com/lytc.asp?uid=18913590691&brand=', // 分享链接
                imgUrl: 'http://www.wvmp360.com/images/lytc.jpg', // 分享图标
                type: '', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function (){alert('分享成功');},
                cancel: function (){
                }
            });


            wx.error(function(res){
                // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
                alert("errorMSG:"+res.errMsg);
            });
            //
        });

    </script>
    <script type="text/javascript">
        $(function(){
            $('#more').more({'address': 'lytc_lx.asp?cid=0&keys=&uid=18913590691&oid=0&tid=0&zid=0'})
        });
    </script>
</head>
<body>
<div class="new_body">

    <div class="lytc-banner">
        <div class="swiper-main">
            <div class="swiper-container swiper-banner">
                <div class="swiper-wrapper" style="transform: translate3d(-3486px, 0px, 0px); transition-duration: 0.3s;"><div xmlns="http://www.w3.org/1999/xhtml" class="swiper-slide" style="width: 581px;"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank" style="height: 0px;"><img src="UploadFiles/2016631081264.jpg"></a></div><div class="swiper-slide" style="width: 581px;"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank" style="height: 0px;"><img src="UploadFiles/2015716105337449.jpg"></a></div><div class="swiper-slide" style="width: 581px;"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank" style="height: 0px;"><img src="UploadFiles/2015716105346210.jpg"></a></div><div class="swiper-slide" style="width: 581px;"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank" style="height: 0px;"><img src="UploadFiles/2015716105355867.jpg"></a></div><div class="swiper-slide" style="width: 581px;"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank" style="height: 0px;"><img src="UploadFiles/20166310546627.jpg"></a></div><div class="swiper-slide" style="width: 581px;"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank" style="height: 0px;"><img src="UploadFiles/2016631081264.jpg"></a></div><div xmlns="http://www.w3.org/1999/xhtml" class="swiper-slide" style="width: 581px;"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank" style="height: 0px;"><img src="UploadFiles/2015716105337449.jpg"></a></div></div>
            </div>
            <div class="pagination"><span class="swiper-pagination-switch swiper-active-switch swiper-activeslide-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span></div>
        </div>
    </div>

    <div class="n_search">
        <form action="lytc.asp" method="get" class="n_search_form">
            <input type="hidden" value="18913590691" name="uid">
            <div class="s-btn"><button type="submit"><img src="../images/n_search_an.png"></button></div>
            <div class="s-val"><input type="text" name="keys" value="" placeholder="想去哪儿？从这里开始..."></div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            //Default Action
            $(".lytc_tab_con").hide(); //Hide all content
            //$("ul.tabs li:first").addClass("active").show(); //Activate first tab
            //$(".lytc_tab_con:first").show(); //Show first tab content

            //On Click Event
            $("ul.lytc_tab_nav li").click(function() {
                $("ul.lytc_tab_nav li").removeClass("active"); //Remove any "active" class
                $(this).addClass("active"); //Add "active" class to selected tab
                $(".lytc_tab_con").hide(); //Hide all tab content
                var activeTab = $(this).find("a").attr("name"); //Find the rel attribute value to identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active content
                //$(activeTab).show();
                //var activeHref = $(this).find("a").attr("href");
                //$("#newsmore").attr("href",activeHref);
                return false;
            });
            $("div.lytc_tab_close").click(function() {
                $(".lytc_tab_con").hide();
            });


        });
    </script>
    <div id="more" class="newnews_list noline">
        <div class="lytc_tab">
            <ul class="lytc_tab_nav">
                <li><a href="#" name="#lytc_tab_con1">综合排序</a><i></i></li>
                <li class="a"><a href="#" name="#lytc_tab_con2">地域</a><i></i></li>
                <li><a href="#" name="#lytc_tab_con3">主题</a><i></i></li>
                <li><a href="#" name="#lytc_tab_con4">出游月份</a></li>
            </ul>
            <div class="lytc_tab_con" id="lytc_tab_con1" style="display: none;">
                <ul>
                    <li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">默认排序</a></li>
                    <li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=1&amp;tid=0&amp;zid=0&amp;keys=">更新时间</a></li>
                    <li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=2&amp;tid=0&amp;zid=0&amp;keys=">价格从高到低</a></li>
                    <li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=3&amp;tid=0&amp;zid=0&amp;keys=">价格从低到高</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
            <div class="lytc_tab_con" id="lytc_tab_con2" style="display: none;">
                <ul>
                    <li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">全部</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=7&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">中国</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=1&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">亚洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=2&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">欧洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=3&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">北美洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=4&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">南美洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=5&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">澳洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=6&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">非洲</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
            <div class="lytc_tab_con" id="lytc_tab_con3" style="display: none;">
                <ul>
                    <li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">全部</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=8&amp;keys=" target="_self">直升机</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=1&amp;keys=" target="_self">欢迎之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=2&amp;keys=" target="_self">邮轮之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=3&amp;keys=" target="_self">铂金之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=4&amp;keys=" target="_self">体育赛事</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=5&amp;keys=" target="_self">公益之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=6&amp;keys=" target="_self">户外运动</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=7&amp;keys=" target="_self">其他</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
            <div class="lytc_tab_con" id="lytc_tab_con4" style="display: none;">
                <ul>
                    <li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">全部</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=1&amp;zid=0&amp;keys=" target="_self">1月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=2&amp;zid=0&amp;keys=" target="_self">2月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=3&amp;zid=0&amp;keys=" target="_self">3月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=4&amp;zid=0&amp;keys=" target="_self">4月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=5&amp;zid=0&amp;keys=" target="_self">5月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=6&amp;zid=0&amp;keys=" target="_self">6月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=7&amp;zid=0&amp;keys=" target="_self">7月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=8&amp;zid=0&amp;keys=" target="_self">8月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=9&amp;zid=0&amp;keys=" target="_self">9月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=10&amp;zid=0&amp;keys=" target="_self">10月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=11&amp;zid=0&amp;keys=" target="_self">11月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=12&amp;zid=0&amp;keys=" target="_self">12月</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
        </div>
        <div class="lytcclass" style=" padding:0 3px;"></div>
        <div style="display: none;"><div class="single_item"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4794" target="_self"><div class="img"><img src="UploadFiles/201671512207234.png"></div><div class="text"><h3>欢迎DreamTrip：澳大利亚珀斯，12月2日至5日 西澳大利亚州珀斯，澳大利亚</h3><span><b>时间</b>2016年12月2日 - 12月5日</span><span><b>价格</b><p><cite>$</cite>289/人</p><i>抵积分</i></span></div></a></li></div></div>
        <div class="single_item" id="more_element_1"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4816" target="_self"><div class="img"><img src="UploadFiles/2016418122615434.jpg"></div><div class="text"><h3>欢迎DreamTrip：澳大利亚墨尔本，10月18日至21日 墨尔本，维多利亚，澳大利亚</h3><span><b>时间</b>2016年10月18日 - 10月21日</span><span><b>价格</b><p><cite>$</cite>369/人</p><i>抵积分180</i></span></div></a></li></div><div class="single_item" id="more_element_2"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4815" target="_self"><div class="img"><img src="UploadFiles/2016715144951948.png"></div><div class="text"><h3>游览澳大利亚的酒厂和野生动物：11月18-22 阿德莱德，南澳大利亚，澳大利亚</h3><span><b>时间</b>2016年11月18日 - 11月22日</span><span><b>价格</b><p><cite>$</cite>659/人</p><i>抵积分150</i></span></div></a></li></div><div class="single_item" id="more_element_3"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4814" target="_self"><div class="img"><img src="UploadFiles/2016715143431862.png"></div><div class="text"><h3>海滩的幸福和大堡礁：11月11日-15日昆士兰市，澳大利亚，哈密顿岛</h3><span><b>时间</b>2016年11月15日—11月15日</span><span><b>价格</b><p><cite>$</cite>789/人</p><i>抵积分210</i></span></div></a></li></div><div class="single_item" id="more_element_4"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4813" target="_self"><div class="img"><img src="UploadFiles/2016715143431862.png"></div><div class="text"><h3>海滩的幸福和大堡礁：12月20日-24日昆士兰市，澳大利亚，哈密顿岛</h3><span><b>时间</b>2016年12月20日—12月24日</span><span><b>价格</b><p><cite>$</cite>789/人</p><i>抵积分210</i></span></div></a></li></div><div class="single_item" id="more_element_5"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4812" target="_self"><div class="img"><img src="UploadFiles/2016715142013378.png"></div><div class="text"><h3>头盔潜水在长滩岛：11月25日-28日长滩岛，菲律宾</h3><span><b>时间</b>2016年11月25日-28日</span><span><b>价格</b><p><cite>$</cite>639/人</p><i>抵积分240</i></span></div></a></li></div><div class="single_item" id="more_element_6"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4811" target="_self"><div class="img"><img src="UploadFiles/2016715134521652.png"></div><div class="text"><h3>主题公园在澳大利亚的冒险：12月6日 - 11日昆士兰市，澳大利亚，黄金海岸</h3><span><b>时间</b>2016年12月6日 - 12月11日</span><span><b>价格</b><p><cite>$</cite>469/人</p><i>抵积分120</i></span></div></a></li></div><div class="single_item" id="more_element_7"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4810" target="_self"><div class="img"><img src="UploadFiles/2016715134521652.png"></div><div class="text"><h3>主题公园在澳大利亚的冒险：10月11日 - 16日昆士兰市，澳大利亚，黄金海岸</h3><span><b>时间</b>2016年10月11日 - 10月16日</span><span><b>价格</b><p><cite>$</cite>469/人</p><i>抵积分120</i></span></div></a></li></div><div class="single_item" id="more_element_8"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4809" target="_self"><div class="img"><img src="UploadFiles/2016715134736555.png"></div><div class="text"><h3>沙漠Safari和法拉利世界阿布扎比10月22日-10月26日</h3><span><b>时间</b>2016年10月22日-10月26日</span><span><b>价格</b><p><cite>$</cite>999/人</p><i>抵积分270</i></span></div></a></li></div><div class="single_item" id="more_element_9"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4808" target="_self"><div class="img"><img src="UploadFiles/2016715134629127.png"></div><div class="text"><h3>沙漠Safari和法拉利世界阿布扎比11月19日-11月23日</h3><span><b>时间</b>2016年11月19日-11月23日</span><span><b>价格</b><p><cite>$</cite>999/人</p><i>抵积分270</i></span></div></a></li></div><div class="single_item" id="more_element_10"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4807" target="_self"><div class="img"><img src="UploadFiles/2016715134521652.png"></div><div class="text"><h3>主题公园在澳大利亚的冒险：11月7日-12日昆士兰市，澳大利亚，黄金海岸</h3><span><b>时间</b>2016年11月7日 - 11月12日</span><span><b>价格</b><p><cite>$</cite>489/人</p><i>抵积分120</i></span></div></a></li></div><div class="single_item" id="more_element_11"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4806" target="_self"><div class="img"><img src="UploadFiles/2016715133744362.png"></div><div class="text"><h3>沙漠Safari和法拉利世界阿布扎比12月17日-12月21日</h3><span><b>时间</b>2016年12月17日-12月21日</span><span><b>价格</b><p><cite>$</cite>999/人</p><i>抵积分300</i></span></div></a></li></div><div class="single_item" id="more_element_12"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4805" target="_self"><div class="img"><img src="UploadFiles/201671513213898.png"></div><div class="text"><h3>沙漠Safari和法拉利世界阿布扎比2月22日-2月26日</h3><span><b>时间</b>2017年2月22日-2月26日</span><span><b>价格</b><p><cite>$</cite>999/人</p><i>抵积分270</i></span></div></a></li></div><div class="single_item" id="more_element_13"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4797" target="_self"><div class="img"><img src="UploadFiles/201671513213898.png"></div><div class="text"><h3>沙漠Safari和法拉利世界阿布扎比1月14日-1月18日</h3><span><b>时间</b>2017年1月14日-1月18日</span><span><b>价格</b><p><cite>$</cite>999/人</p><i>抵积分270</i></span></div></a></li></div><div class="single_item" id="more_element_14"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4796" target="_self"><div class="img"><img src="UploadFiles/2016715124620924.png"></div><div class="text"><h3>看到惊人的风景悉尼南部 新南威尔士市，澳大利亚，悉尼</h3><span><b>时间</b>2017年3月9日 - 3月14日</span><span><b>价格</b><p><cite>$</cite>1079/人</p><i>抵积分390</i></span></div></a></li></div><div class="single_item" id="more_element_15"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4795" target="_self"><div class="img"><img src="UploadFiles/2016715123940189.png"></div><div class="text"><h3>看到惊人的风景悉尼南部 新南威尔士市，澳大利亚，悉尼2017年2月9日- 2月14日</h3><span><b>时间</b>2017年2月9日- 2月14日</span><span><b>价格</b><p><cite>$</cite>1079/人</p><i>抵积分390</i></span></div></a></li></div><div class="single_item" id="more_element_16"><li><a href="lytc_view.asp?uid=18913590691&amp;id=4794" target="_self"><div class="img"><img src="UploadFiles/201671512207234.png"></div><div class="text"><h3>欢迎DreamTrip：澳大利亚珀斯，12月2日至5日 西澳大利亚州珀斯，澳大利亚</h3><span><b>时间</b>2016年12月2日 - 12月5日</span><span><b>价格</b><p><cite>$</cite>289/人</p><i>抵积分</i></span></div></a></li></div><div class="new_more" style="display: block;"><a href="javascript:void(0)">加载更多</a></div><br>

        <div class="more_loader_spinner" style="display: none;"></div></div>
    <div class="new_footer">
        <a name="StranLink" id="StranLink" style="color:red;cursor:pointer; font-size:16px;" href="javascript:StranBody()" title="點擊以繁體中文方式浏覽">繁體中文</a><br>
        <span style="color:#ff0000;"></span>
        <p>
            <span style="line-height:1.5;">桂ICP备14006405号</span>
        </p>
    </div>
</div>
<script type="text/javascript" src="js/language.js"></script>
<div class="new_bottom">

    <div class="new_bottomin">
        <a href="http://www.wvmp360.com/index.asp?uid=18913590691&amp;brand="><div class="a1">首页</div></a>

        <a href="http://www.wvmp360.com/card.asp?uid=18913590691&amp;brand="><div class="a2">名片</div></a>

        <a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand="><div class="a3 a">旅行</div></a>

        <a href="user.asp?uid=18913590691&amp;brand="><div class="a4">会员</div></a>
        <a href="find.asp?uid=18913590691&amp;brand="><div class="a5">发现</div></a>
    </div>

</div>




</body></html>