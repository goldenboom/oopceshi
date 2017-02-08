<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="public/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="public/js/jquery.js"></script>
<script src="public/js/verificationNumbers.js"></script>
<script src="public/js/Particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
  $(".submit_btn").click(function(){
	  location.href="index.html";
	  });
});
</script>
</head>
<body>
<!------------------登录页面--------------------->
<form action="?c=public&a=logincheck" method="post">
	<dl class="admin_login">
		 <dt>
			  <strong>登录</strong>
			  <em>login login go go go</em>
		 </dt>
		 <dd class="user_icon">
			<input type="text" name="name" placeholder="账号" class="login_txtbx"/>
		 </dd>
		 <dd class="pwd_icon">
		
			<input type="password" name="pass" placeholder="密码" class="login_txtbx"/>
		 </dd>
		 <dd class="pwd_yzm" >
			<input type="text" name="yzm" placeholder="验证码" style="width:45%" class="login_txtbx" id="" />
			<a href=""><img src="./view/public/yzm.php" alt="" /></a>
		 </dd>	
		 <dd>
			<input type="submit" value="立即登陆" class="submit_btn"/>
		 </dd>
	</dl>
</form>	
</body>
</html>
