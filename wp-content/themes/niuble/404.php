<!doctype html>
<html>
    <head xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>牛逼了</title>
        <meta name="keywords" content="牛逼了,牛逼,NB,eric,代立晨,dlcdavid,4160911">
        <meta name="description" content="代立晨的个人站点哦亲。不接受围观哦亲。">
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30309190-1']);
            _gaq.push(['_setDomainName', 'niuble.com']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <!--
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        -->
        <style>
            body{ background:url('404.jpg') no-repeat center -40px; vertical-align: top;}
            .centerLayout{ width: 980px; margin:0 auto; min-height: 1200px; *height:1200px; *overflow: visible;}
            #followContainer{ padding: 1030px 0 0 700px;}
            .intoQZone{ display:inline-block; *display:inline; *zoom:1; vertical-align: top; margin-left: 10px; margin-right: 5px; width: 60px; height: 24px; line-height: 24px; background:url('qzone.png') no-repeat;}
        </style>
    </head>
    <body>
        <div class="centerLayout">
            <div id="followContainer">
                <iframe width="63" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&width=63&height=24&uid=1712262735&style=1&btn=light&dpc=1"></iframe>
                <a target="_blank" href="http://4160911.qzone.qq.com" class="intoQZone"></a>
                <iframe src="http://follow.v.t.qq.com/index.php?c=follow&a=quick&name=dlc_david&style=5&t=1332677884813&f=0" frameborder="0" scrolling="auto" width="125" height="24" marginwidth="0" marginheight="0" allowtransparency="true"></iframe>

            </div>
        </div>
    </body>
    <script src="./js/jquery-1.7.2.min.js"></script>
    <script>
        var bodyheight = $('.centerLayout').height();
        var height = $(window).height();
        $('body').click(function(){
            var top = $(document).scrollTop();
            if(top < bodyheight - height){
                $('html, body').stop(true).animate({scrollTop: bodyheight - height  }, 300);
            }else{
                $('html, body').stop(true).animate({scrollTop: 0 }, 300);
            }
        });
    </script>
</html>
