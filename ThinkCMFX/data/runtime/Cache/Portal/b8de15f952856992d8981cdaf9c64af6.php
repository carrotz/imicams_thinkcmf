<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html lang="en">
	<head>
		<title>ThinkCMF-跳转提示</title>
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
	
		<style type="text/css">
		*{ padding: 0; margin: 0; }
		body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
		.system-message{ padding: 24px 48px;text-align: center; }
		.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; text-align: center;}
		.system-message .jump{ padding-top: 10px}
		.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
		.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
		</style>
	</head>
<body class="body-white">
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

	<div class="system-message">
	<?php if(isset($message)): ?><h1>^_^</h1>
	<p class="success"><?php echo($message); ?></p>
	<?php else: ?>
	<h1>&gt;_&lt;</h1>
	<p class="error"><?php echo($error); ?></p><?php endif; ?>
	<p class="detail"></p>
	<p class="jump">
	ThinkCMF：页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
	</p>
	</div>
	<script type="text/javascript">
	(function(){
	var wait = document.getElementById('wait'),href = document.getElementById('href').href;
	var interval = setInterval(function(){
		var time = --wait.innerHTML;
		if(time <= 0) {
			location.href = href;
			clearInterval(interval);
		};
	}, 1000);
	})();
	</script>

</body>
</html>