<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>留言板</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="public/css/style.css" />
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script src="public/js/jquery.js"></script>
<script src="public/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	(function($){
		$(window).load(function(){
			
			$("a[rel='load-content']").click(function(e){
				e.preventDefault();
				var url=$(this).attr("href");
				$.get(url,function(data){
					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
					//scroll-to appended content 
					$(".content").mCustomScrollbar("scrollTo","h2:last");
				});
			});
			
			$(".content").delegate("a[href='top']","click",function(e){
				e.preventDefault();
				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
			});
			
		});
	})(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src="public/images/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="#" target="_blank" class="website_icon">站点首页</a></li>
  <li><a href="#" class="admin_icon"><?php session_start(); echo $_SESSION["username"];
  	?></a></li>
  <li><a href="#" class="set_icon">账号设置</a></li>
  <li><a href="?c=public&a=loginout" class="quit_icon">安全退出</a></li>
 </ul>
</header>

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="?c=public&a=loginout">起始页</a></h2>
 <ul>
 
  <li>
   <dl>
    <dt>用户管理</dt>
    <!--跳转到用户-->
    <dd><a href="?c=user&a=lists" class="active">用户列表</a></dd>
    <dd><a href="?c=user&a=add">用户添加</a></dd>
   </dl>
  </li>
  <!------------------新闻和产品--------------------->
  <li>
   <dl>
    <dt>新闻管理</dt>
    <!--跳转到新闻-->
    <dd><a href="?c=news_type&a=lists">新闻列表查看</a></dd>
    <dd><a href="?c=news_type&a=add">新闻列表添加</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <!--跳转到新闻-->
    <dd><a href="?c=news_info&a=lists">新闻详情查看</a></dd>
    <dd><a href="?c=news_info&a=add">新闻详情添加</a></dd>
   </dl>
  </li>
  </li>
  <li>
   <dl>
    <dt>商品管理</dt>
    <!--跳转到新闻-->
    <dd><a href="?c=product_type&a=lists">商品列表查看</a></dd>
    <dd><a href="?c=product_type&a=add">商品列表添加</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <!--跳转到新闻-->
    <dd><a href="?c=product_info&a=lists">商品详情查看</a></dd>
    <dd><a href="?c=product_info&a=add">商品详情添加</a></dd>
   </dl>
  </li>
  <li>
   <dl>
   <dt>留言板管理</dt>
    <!--跳转到留言板-->
    <dd><a href="?c=liuyanban&a=lists">查看留言板</a></dd>
   </dl>
  </li>
  <li>
  <dl>
   <dt>导航管理</dt>
    <!--跳转到留言板-->
    <dd><a href="?c=nav&a=lists">查看导航栏</a></dd>
    <dd><a href="?c=nav&a=add">添加导航栏</a></dd>
   </dl>
  </li>
  <li>
	<dl>
  <dt>友情链接管理</dt>
    <!--跳转到留言板-->
    <dd><a href="?c=friend&a=lists">查看友情链接</a></dd>
    <dd><a href="?c=friend&a=add">添加友情链接</a></dd>
   </dl>
  </li>
 <!------------------新闻和产品--------------------->
 </ul>
</aside>

