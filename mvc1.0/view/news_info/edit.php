<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理系统</title>
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
 <!------------------新闻和产品--------------------->
 </ul>
</aside>

<!------------------添加新闻分类详情页--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		<form action="?c=news_info&a=editaction" method="post">
			<?php
			// var_dump($arr);
			// var_dump($gai);
			//新闻分类详情页修改  
				
				foreach($types as $k=>$v){
					
							echo "<select name='id' id=''>";
								echo "<option value='".$v['id']."'>".$v['name']."</option>br";
							echo "</select><br />";
							
				}
				
				foreach($infos as $k=>$v){
					
					echo "标题：<input type='text' name='title' value='".$v['title']."'><br />";
					echo "作者：<input type='text' name='author'  value='".$v['author']."' /><br />";
					echo "内容：<textarea name='content' id='' cols='30' rows='10'valur'".$v['content']."'>".$v['content']."</textarea><br />";
					echo "<input type='submit'/>";
					
				}
						
			?>
			
		</form>
				
	</center>
 </div>
</section>
</body>
</html>
