<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<?php $news_list = sp_sql_posts_paged_bycatid(9,"",6); ?>

<head>
    <title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
    <meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($site_seo_description); ?>">
    	<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/ThinkCMFX/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/ThinkCMFX/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
    <link href="/ThinkCMFX/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/ThinkCMFX/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/ThinkCMFX/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/ThinkCMFX/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/ThinkCMFX/themes/simplebootx/Public/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	
    <!--    <link href="/ThinkCMFX/themes/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet">-->
    <link href="/ThinkCMFX/themes/simplebootx/Public/css/lrtk.css" rel="stylesheet">
    <link href="/ThinkCMFX/themes/simplebootx/Public/css/webcss.css" rel="stylesheet">
    <script src="/ThinkCMFX/public/js/jquery-1.8.3.min.js"></script>
    <script src="/ThinkCMFX/public/js/koala.min.1.5.js"></script>


</head>

<body>
    <div id="Head">
        <div class="home-logo"><img src="/ThinkCMFX/themes/simplebootx/Public/images/logo-home.jpg" width="438" height="138" /></div>
        <div id="Menunav">
            <ul>
                <li class="hover">
                    <a href="/ThinkCMFX" class="home">首页</a>
                </li>
                <li>
                    <a href="#" class="cotact">中心概况</a>
                </li>
                <li>
                    <a href="#" class="gcjs">工程技术中心网站</a>
                </li>
            </ul>
        </div>

        <form method="post" action="/ThinkCMFX/search.php">
            <div class="search">
                <div class="searchbox">
                    <input type="text" style="padding: 0 5px; width: 430px; line-height: 40px; border: 0; height: 40px; float: left;" placeholder="请输入关键字" name="keyword" />
                    <input type="submit" value="搜索" style="font-size: 14px; float: left; background: url(/ThinkCMFX/themes/simplebootx/Public/images/icon_search.gif) no-repeat 20px 10px #28bc94; height: 40px; padding-left: 30px; line-height: 40px; color: #fff; width: 110px; border: 0; cursor: pointer"/>
                    <!--                <input type="button" class="searchbtngj" value="高级检索" />-->
                </div>
            </div>
        </form> 
        
    </div>
    <div class="MainContainer">
        <div class="ContentContainer">
            <div class="cont">
                <div class="jiaodian">

                    <!-- 代码 开始 -->
                    <div id="fsD1" class="focus">
                        <div id="D1pic1" class="fPic">
                            <div class="fcon" style="display: none;">
                                <a target="_blank" href="http://www.lanrentuku.com/"><img src="/ThinkCMFX/themes/simplebootx/Public/images/01.jpg" style="opacity: 1; " /></a>
                                <!--            <span class="shadow"><a target="_blank" href="http://ln.qq.com/a/20140625/015503.htm">红三代叶明子太庙办盛典 白色羽毛装高贵动人</a></span>-->
                            </div>

                            <div class="fcon" style="display: none;">
                                <a target="_blank" href="http://www.lanrentuku.com/"><img src="/ThinkCMFX/themes/simplebootx/Public/images/02.jpg" style="opacity: 1; " /></a>
                                <!-- <span class="shadow"><a target="_blank" href="http://ln.qq.com/a/20140625/015503.htm">佟大为登封面表情搞怪 成熟男人也是天真男孩</a></span>-->
                            </div>

                        </div>
                        <div class="fbg">
                            <div class="D1fBt" id="D1fBt">
                                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a>
                                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>
                            </div>
                        </div>
                        <!-- 
   <span class="prev"></span>   
    <span class="next"></span>  -->
                    </div>
                    <script type="text/javascript">
                        Qfast.add('widgets', {
                            path: "/ThinkCMFX/public/js/terminator2.2.min.js",
                            type: "js",
                            requires: ['fx']
                        });
                        Qfast(false, 'widgets', function () {
                            K.tabs({
                                id: 'fsD1', //焦点图包裹id  
                                conId: "D1pic1", //** 大图域包裹id  
                                tabId: "D1fBt",
                                tabTn: "a",
                                conCn: '.fcon', //** 大图域配置class       
                                auto: 1, //自动播放 1或0
                                effect: 'fade', //效果配置
                                eType: 'click', //** 鼠标事件
                                pageBt: true, //是否有按钮切换页码
                                bns: ['.prev', '.next'], //** 前后按钮配置class                          
                                interval: 3000 //** 停顿时间  
                            })
                        })
                    </script>
                    <!-- 代码 结束 -->
                </div>
                <div class="news">
                    <div class="homebox">
                        <div class="title">
                            <h3>
                              <div><a href="/ThinkCMFX/index.php?g=&m=list&a=index&id=12">前沿动态</a></div>
                            </h3>
                        </div>
                        <div class="content">
                            <ul class="list_r1">
                                <?php if(is_array($news_list['posts'])): $i = 0; $__LIST__ = $news_list['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                        <a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"><?php echo ($vo["post_title"]); ?></a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cont homemenu">
                <ul class="homem_li">
                    <li class="llgs">
                        <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_llgs_big.gif" width="50" height="50" /></div>
                        <h2>理论概述</h2>
                        <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                    </li>
                    <a href="/ThinkCMFX/index.php?g=portal&m=article&a=index&id=6">
                        <li class="yjzz">
                            <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_yjzz_big.gif" width="50" height="50" /></div>
                            <h2>研究组织</h2>
                            <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                        </li>
                    </a>
                    <li class="sjzy">
                        <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjzy_big.gif" width="50" height="50" /></div>
                        <h2>数据资源</h2>
                        <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                    </li>
                    <li class="sjzc">
                        <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjzc_big.gif" width="50" height="50" /></div>
                        <h2>数据政策</h2>
                        <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                    </li>
                    <li class="sjbz">
                        <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjbz_big.gif" width="50" height="50" /></div>
                        <h2>数据标准</h2>
                        <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                    </li>
                    <li class="sjcc">
                        <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjcc_big.gif" width="50" height="50" /></div>
                        <h2>数据仓储</h2>
                        <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                    </li>
                    <li class="glgj">
                        <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_glgj_big.gif" width="50" height="50" /></div>
                        <h2>管理工具</h2>
                        <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                    </li>
                    <li class="hyxm">
                        <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_hyxm_big.gif" width="50" height="50" /></div>
                        <h2>会议项目</h2>
                        <p>人口健康平台工程技术中心与桂林理工大学环境科学与工程学院学术交流会议顺利召开</p>
                    </li>
                </ul>
            </div>

            <div class="cont homechart">
                <div class="title">开放资源收录统计</div>
                <div class="content" style="text-align:center;"><img src="/ThinkCMFX/themes/simplebootx/Public/images/chart.gif" width="735" height="378" style="margin:0 auto;" /></div>
            </div>

        </div>
        <?php echo hook('footer');?>
<div id="footer">
    <a target="_blank" href="http://www.imicams.ac.cn/">© 中国医学科学院医学信息研究所 </a>
</div>
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div>
<?php echo ($site_tongji); ?>
 <?php echo hook('footer_end');?>
    </div>

</body>

</html>