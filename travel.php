
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">

    <title>旅行</title>
    <meta name="Keywords" content="">
    <meta content="" name="description">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="Stylesheet" type="text/css" href="http://www.wvmp360.com/css/css.css?20234234323">
    <script type="text/javascript" src="http://www.wvmp360.com/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.wvmp360.com/js/zepto.min.js"></script>
    <script type="text/javascript" src="http://www.wvmp360.com/js/globe.js"></script>
    <script type="text/javascript" src="http://www.wvmp360.com/js/swiper.min.js"></script>
    <script type="text/javascript" src="http://www.wvmp360.com/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="http://www.wvmp360.com/jquery.more.index.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

    <script>
        wx.config({
            debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
            appId: 'wx9d5b527bb0e88fbd', // 必填，公众号的唯一标识
            timestamp: '1468843139', // 必填，生成签名的时间戳
            nonceStr: '1468843139', // 必填，生成签名的随机串
            signature: '53062b74bd9617d70b8a68d2ec43aed084e1767e',// 必填，签名，见附录1
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
            $('#more').more({'address': 'http://www.wvmp360.com/lytc_lx.asp?cid=0&keys=&uid=18913590691&oid=0&tid=0&zid=0'})
        });
    </script>
</head>
<body>
<div class="new_body">

    <div class="lytc-banner">
        <div class="swiper-main">
            <div class="swiper-container swiper-banner">
                <div class="swiper-wrapper"><div class="swiper-slide"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank"><img src="UploadFiles/2015716105337449.jpg"></a></div><div class="swiper-slide"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank"><img src="UploadFiles/2015716105346210.jpg"></a></div><div class="swiper-slide"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank"><img src="UploadFiles/2015716105355867.jpg"></a></div><div class="swiper-slide"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank"><img src="UploadFiles/20166310546627.jpg"></a></div><div class="swiper-slide"><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand=" target="_blank"><img src="UploadFiles/2016631081264.jpg"></a></div></div>
            </div>
            <div class="pagination"></div>
        </div>
    </div>

    <div class="n_search">
        <form action="lytc.asp" method="get" class="n_search_form">
            <input type="hidden" value="18913590691" name="uid">
            <div class="s-btn"><button type="submit"><img src="http://www.wvmp360.com//images/n_search_an.png"></button></div>
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
            <div class="lytc_tab_con" id="lytc_tab_con1">
                <ul>
                    <li><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">默认排序</a></li>
                    <li><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;cid=0&amp;oid=1&amp;tid=0&amp;zid=0&amp;keys=">更新时间</a></li>
                    <li><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;cid=0&amp;oid=2&amp;tid=0&amp;zid=0&amp;keys=">价格从高到低</a></li>
                    <li><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;cid=0&amp;oid=3&amp;tid=0&amp;zid=0&amp;keys=">价格从低到高</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
            <div class="lytc_tab_con" id="lytc_tab_con2">
                <ul>
                    <li><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">全部</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=7&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">中国</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=1&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">亚洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=2&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">欧洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=3&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">北美洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=4&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">南美洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=5&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">澳洲</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=6&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" target="_self">非洲</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
            <div class="lytc_tab_con" id="lytc_tab_con3">
                <ul>
                    <li><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">全部</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=8&amp;keys=" target="_self">直升机</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=1&amp;keys=" target="_self">欢迎之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=2&amp;keys=" target="_self">邮轮之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=3&amp;keys=" target="_self">铂金之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=4&amp;keys=" target="_self">体育赛事</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=5&amp;keys=" target="_self">公益之旅</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=6&amp;keys=" target="_self">户外运动</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=7&amp;keys=" target="_self">其他</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
            <div class="lytc_tab_con" id="lytc_tab_con4">
                <ul>
                    <li><a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=0&amp;zid=0&amp;keys=" class="a">全部</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=1&amp;zid=0&amp;keys=" target="_self">1月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=2&amp;zid=0&amp;keys=" target="_self">2月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=3&amp;zid=0&amp;keys=" target="_self">3月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=4&amp;zid=0&amp;keys=" target="_self">4月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=5&amp;zid=0&amp;keys=" target="_self">5月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=6&amp;zid=0&amp;keys=" target="_self">6月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=7&amp;zid=0&amp;keys=" target="_self">7月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=8&amp;zid=0&amp;keys=" target="_self">8月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=9&amp;zid=0&amp;keys=" target="_self">9月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=10&amp;zid=0&amp;keys=" target="_self">10月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=11&amp;zid=0&amp;keys=" target="_self">11月</a></li><li><a href="lytc.asp?uid=18913590691&amp;cid=0&amp;oid=0&amp;tid=12&amp;zid=0&amp;keys=" target="_self">12月</a></li>
                </ul>
                <div class="lytc_tab_close">关闭</div>
            </div>
        </div>
        <div class="lytcclass" style=" padding:0 3px;"></div>
        <div class="single_item"></div>
        <div class="new_more"><a href="javascript:void(0)">加载更多</a></div><br>

    </div>
    <div class="new_footer">
        <a name="StranLink" id="StranLink" style="color:red;cursor:pointer; font-size:16px;">简体中文</a><br>
        <span style="color:#ff0000;"></span>
        <p>
            <span style="line-height:1.5;">桂ICP备14006405号</span>
        </p>
    </div>
</div>
<script type="text/javascript" src="http://www.wvmp360.com/js/language.js"></script>
<div class="new_bottom">

    <div class="new_bottomin">
        <a href="http://www.wvmp360.com/index.asp?uid=18913590691&amp;brand="><div class="a1">首页</div></a>

        <a href="http://www.wvmp360.com/card.asp?uid=18913590691&amp;brand="><div class="a2">名片</div></a>

        <a href="http://www.wvmp360.com/lytc.asp?uid=18913590691&amp;brand="><div class="a3 a">旅行</div></a>

        <a href="http://www.wvmp360.com/user.asp?uid=18913590691&amp;brand="><div class="a4">会员</div></a>
        <a href="http://www.wvmp360.com/find.asp?uid=18913590691&amp;brand="><div class="a5">发现</div></a>
    </div>

</div>




</body>