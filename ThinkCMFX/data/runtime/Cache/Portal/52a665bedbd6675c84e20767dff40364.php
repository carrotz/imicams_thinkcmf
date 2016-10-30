<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
      > <?php echo ($post_title); ?></div>
    <div class="search">
      <div class="searchbox">
        <input name="" type="text" class="searchinput" />
        <input type="button" class="searchbtn" value="搜索" />
        <input type="button" class="searchbtngj" value="高级检索" />
      </div>
    </div>
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
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=9">
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
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=2">
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
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=6">
      <div><img src="/ThinkCMFX/themes/simplebootx/Public/images/icon_glgj.gif" width="26" height="26" /></div>
      <h2>管理工具</h2>
      </a>
    </li>
    <li class="sjbz">
      <a href="/ThinkCMFX/index.php?g=portal&m=list&a=index&id=10">
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
        <div class="subnav">
          <div class="title">前沿动态</div>
          <ul>
            <li>
              <a href="#">分类1</a>
            </li>
            <li class="current">
              <a href="#">分类2</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="right">
      
      <ul class="newsList">
        <li>
          <div class="pic"><img src="images/pic.jpg" width="182" height="123" /></div>
          <div class="info"><h3>人口健康平台工程技术中心2015年度工作总结交流会顺利召开</h3>
          <span>2016年3月31日，国家卫生计生委委管出版物主题宣传项目2015年总结暨2016年启动会在北京隆重召开，我所承办期刊《医学信息学杂志》荣获2015年度主题宣传激励活动“最佳期刊”。《医学信息学杂志》是国内创刊最早的医学信息方面的专业指导性刊物，自创刊之日起始终恪守理论与实践相结合</span></div>
        </li>
        <li>
          <div class="pic"><img src="images/pic.jpg" width="182" height="123" /></div>
          <div class="info"><h3>人口健康平台工程技术中心2015年度工作总结交流会顺利召开</h3>
          <span>2016年3月31日，国家卫生计生委委管出版物主题宣传项目2015年总结暨2016年启动会在北京隆重召开，我所承办期刊《医学信息学杂志》荣获2015年度主题宣传激励活动“最佳期刊”。《医学信息学杂志》是国内创刊最早的医学信息方面的专业指导性刊物，自创刊之日起始终恪守理论与实践相结</span></div>
        </li>
        <li>
          <div class="pic"><img src="images/pic.jpg" width="182" height="123" /></div>
          <div class="info"><h3>人口健康平台工程技术中心2015年度工作总结交流会顺利召开</h3>
          <span>2016年3月31日，国家卫生计生委委管出版物主题宣传项目2015年总结暨2016年启动会在北京隆重召开，我所承办期刊《医学信息学杂志》荣获2015年度主题宣传激励活动“最佳期刊”。《医学信息学杂志》是国内创刊最早的医学信息方面的专业指导性刊物，自创刊之日起始终恪守理论与实践相结合、普及与提高相并重、倡导服务创新......
推动事业发展的办刊宗旨。</span></div>
        </li>
      </ul>
        <div class="pages"><span class="disabled">
          <  Prev</span><span class="current">1</span>
          <a href="#?page=2">2</a>
          <a href="#?page=3">3</a>
          <a href="#?page=4">4</a>
          <a href="#?page=5">5</a>
          <a href="#?page=6">6</a>
          <a href="#?page=7">7</a>
          ...
          <a href="#?page=199">199</a>
          <a href="#?page=200">200</a>
          <a href="#?page=2">Next  >
          </a>
      </div>
        
      </div>
    </div>
</div>

<div class="container tc-main">
	
	
    <div class="pg-opt pin">
        <div class="container">
            <h2><?php echo ($name); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="span9">
			<div class="">
				<?php $lists = sp_sql_posts_paged("cid:$cat_id;order:post_date DESC;",10); var_dump($lists); ?>
				<?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>
				
				<div class="list-boxes">
					<h2><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></h2>
					<p><?php echo (msubstr($vo["post_excerpt"],0,256)); ?></p>
					<div>
						<div class="pull-left">
							<div class="list-actions">
							<a href="javascript:;"><i class="fa fa-eye"></i><span><?php echo ($vo["post_hits"]); ?></span></a>
							<a href="<?php echo U('article/do_like',array('id'=>$vo['object_id']));?>" class="js-count-btn"><i class="fa fa-thumbs-up"></i><span class="count"><?php echo ($vo["post_like"]); ?></span></a>
							<a href="<?php echo U('user/favorite/do_favorite',array('id'=>$vo['object_id']));?>" class="js-favorite-btn" data-title="<?php echo ($vo["post_title"]); ?>" data-url="<?php echo U('portal/article/index',array('id'=>$vo['tid']));?>" data-key="<?php echo sp_get_favorite_key('posts',$vo['object_id']);?>">
								<i class="fa fa-star-o"></i>
							</a>
							</div>
						</div>
						<a class="btn btn-warning pull-right" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">查看更多</a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
			</div>
			<div class="pagination"><ul><?php echo ($lists['page']); ?></ul></div>
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

</div>

    
<!-- JavaScript -->
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