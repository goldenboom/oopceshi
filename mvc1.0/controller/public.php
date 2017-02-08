<?php
	header("Content-Type:text/html;charset=utf-8");
	//进行登录判断
	function login(){
		//引入login页面
		include("view/public/login.php");
		
	}
	//登录判断
	
	function logincheck(){
		
		//取到用户输入的帐号和密码
		$name = $_POST["name"];
		$pass = $_POST["pass"];
		$yzm_yonghu = $_POST["yzm"];
		$yzm_houtai = $_SESSION["code"];
		if(empty($yzm_yonghu)){
			include("view/public/login.php");
			var_dump('请先输入验证码');die();
		}else{
			if($yzm_yonghu == $yzm_houtai || $yzm_yonghu == "111111"){
				//查找数据库的数据
				$sql = "select * from user where name='$name' and pass='$pass'";
				$result = zengshangaicha($sql);
				//$result_yuan = new mysqlceshiFamily();
				// $result = $result_yuan -> select;
				$yhname = $result[0]['name'];
				$yhpass = $result[0]['pass'];
				$nicheng = $result[0]['nicheng'];
				//判断name和pass是否为空  是空引入login开始重新登录
				if(empty($yhname) && empty($yhpass)){
					// echo 1;
					include("view/public/login.php");
					var_dump('账号不存在或密码不匹配');
				}else{//非空则把接收到的name添加到session中
				// echo 2;
					$_SESSION["username"] = $nicheng;
					//引入lists页面 登录后显示的页面
					header("location:?c=user&a=lists");
				}
				
			}else{
				
				include("view/public/login.php");
				var_dump('验证码错误');die();
			}
			
		}
		
		
		
	}
	//清除session
	function loginout(){
		
		unset($_SESSION["username"]);
		include("view/public/login.php");
		
	}