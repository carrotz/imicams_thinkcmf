<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo ($name); ?> <?php echo ($seo_title); ?> <?php echo ($site_name); ?></title>
	<meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
	<meta name="description" content="<?php echo ($seo_description); ?>">
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
	
    <link href="/ThinkCMFX/themes/simplebootx/Public/css/webcss.css" rel="stylesheet">
</head>
<body>
<?php echo hook('body_start');?>
<?php $term_data = sp_get_term($term_id); $term_articles = sp_sql_posts("cid:$term_id;field:post_title,post_excerpt,tid,smeta,term_id;"); ?>
<div id="Head">
    <div class="logo"><img src="/ThinkCMFX/themes/simplebootx/Public/images/logo.gif" width="1000" height="138" /></div>
</div>
<div class="SubContainer">
    <div class="location">
        <div class="left">
            <a href="#"><?php echo ($term_data[name]); ?></a>
            <?php if($post_title): ?>> <?php echo ($post_title); endif; ?>
        </div>
        <form method="post" action="/ThinkCMFX/search.php">
            <div class="search">
                <div class="searchbox">
                    <input type="text" style="padding: 0 5px; width: 430px; line-height: 40px; border: 0; height: 40px; float: left;" placeholder="请输入关键字" name="keyword" />
                    <input type="submit" value="搜索" style="font-size: 14px; float: left; background: url(/ThinkCMFX/themes/simplebootx/Public/images/icon_search.gif) no-repeat 20px 10px #28bc94; height: 40px; padding-left: 30px; line-height: 40px; color: #fff; width: 110px; border: 0; cursor: pointer" />
                    <!--                <input type="button" class="searchbtngj" value="高级检索" />-->
                </div>
            </div>
        </form>
    </div>
</div>
<div class="ContentContainer">
    <div class="cont Submenu">
  <ul class="subm_li">
    <li class="sy">
      <a href="/ThinkCMFX">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sy.gif" width="26" height="26" /></div>
      <h2> 首页 </h2>
      </a>
    </li>
    <li class="qydt">
      <a href="/ThinkCMFX/index.php?g=&m=list&a=index&id=12">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_qydt.gif" width="26" height="26" /></div>
      <h2>前沿动态</h2>
      </a>
    </li>
    <li class="yjzz">
      <a href="/ThinkCMFX/index.php?g=portal&m=article&a=index&id=6">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_yjzz.gif" width="26" height="26" /></div>
      <h2>研究组织</h2>
      </a>
    </li>
    <li class="szzy">
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=4">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_szzy.gif" width="26" height="26" /></div>
      <h2>数字资源</h2>
      </a>
    </li>
    <li class="sjglsmzq">
      <a href="/ThinkCMFX/index.php?g=portal&m=article&a=index&id=3">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjglsmzq.gif" width="26" height="26" /></div>
      <h2>数据管理生命周期</h2>
      </a>
    </li>
    <li class="sjcc">
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=5">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjcc.gif" width="26" height="26" /></div>
      <h2>数据仓储</h2>
      </a>
    </li>
    <li class="glgj">
      <a href="/ThinkCMFX/index.php?g=portal&m=article&a=index&id=24">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_glgj.gif" width="26" height="26" /></div>
      <h2>管理工具</h2>
      </a>
    </li>
    <li class="sjbz">
      <a href="/ThinkCMFX/index.php?g=portal&m=article&a=index&id=22">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjbz.gif" width="26" height="26" /></div>
      <h2>数据标准</h2>
      </a>
    </li>
    <li class="sjzc">
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=7">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_sjzc.gif" width="26" height="26" /></div>
      <h2>数据政策</h2>
      </a>
    </li>
    <li class="yjzz">
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=8">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_yjzz.gif" width="26" height="26" /></div>
      <h2>相关会议项目</h2>
      </a>
    </li>
  </ul>
</div>
<!--
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            
            <div class="row">
                <div class="nav-collapse collapse" id="main-menu">
                    <?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
                </div>
            </div>
        </div>
    </div>
</div>-->

    
    <div class="submain">
      <div class="left">
        <div class="leftnav">
          <div class="title"><?php echo ($term_data[name]); ?></div>
          <ul>
            <?php if(is_array($term_articles)): foreach($term_articles as $key=>$vo): ?><li>
                  <a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a>
                </li><?php endforeach; endif; ?>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="article">
          <h1><?php echo ($post_title); ?></h1>
          <?php echo ($post_content); ?>
        </div>
        <?php if(!empty($post_source)): ?><div>
                <b>注：本文转载自<?php echo ($post_source); ?>，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如有侵权行为，请联系我们，我们会及时删除。</b>
            </div><?php endif; ?>
        <div>
            <?php if(!empty($prev)): ?><a href="<?php echo leuu('article/index',array('id'=>$prev['tid'],'cid'=>$prev['term_id']));?>" class="btn btn-primary pull-left">上一篇</a><?php endif; ?>
            <?php if(!empty($next)): ?><a href="<?php echo leuu('article/index',array('id'=>$next['tid'],'cid'=>$next['term_id']));?>" class="btn btn-warning pull-right">下一篇</a><?php endif; ?>
            <script type="text/javascript" src="/ThinkCMFX/themes/simplebootx/Public/js/qrcode.min.js"></script>
            <div id="qrcode" style="width: 100px;margin:0 auto"></div>
            <div class="clearfix"></div>
        </div>


        <?php echo hook('comment',array( 'post_id'=>$object_id, 'post_table'=>'posts', 'post_title'=>$post_title ));?>
      </div>
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


<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/ThinkCMFX/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/ThinkCMFX/public/js/jquery.js"></script>
    <script src="/ThinkCMFX/public/js/wind.js"></script>
    <script src="/ThinkCMFX/themes/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/ThinkCMFX/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/ThinkCMFX/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


</body>
</html>