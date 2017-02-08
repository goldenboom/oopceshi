<?php
		header("Content-Type:text/html;charset=utf-8");//第三步用户管理（增删改查）user.php控制器里
		//判断session是否为空
		pdsess();
		//用户列表
		function lists($tishi=""){
			//sql语句查询
			$sql="select count(*) as shuliang from user";
			//执行sql语句
			$zongshu = zengshangaicha($sql);
			$shuliang = $zongshu[0]['shuliang'];
			$meiye=5;
			$ye=ceil($shuliang/$meiye);
			$page=$_GET['page'];
			if($page>$ye){
				$page=$ye;
			}
			if($page<=0){
				$page=1;
			}
			$page_start=($page-1)*$meiye;
			
			for($i=1;$i<=$ye;$i++){
				$sql="select * from user limit $page_start,$meiye";
				$result=zengshangaicha($sql);
			}
			//执行sql语句
			$result = zengshangaicha($sql);
				include("public/heads.php");
				include("view/user/lists.php");
			
			
		}
		//用户添加
		function add($tishi=""){
			include("public/heads.php");
			include("view/user/add.php");
		}
		//添加用户
		function addaction(){
			// <!--  所有需要传的数据-->
			// <!--  name用户名-->
			// <!--  pass密码-->
			// <!--  pass2密码确认-->
			// <!--  xing姓-->
			// <!--  ming名-->
			// <!--  nicheng昵称-->
			// <!--  sex性别-->
			// <!--  sheng省  有很多value属性-->
			// <!--  shi市    有很多value属性-->
			// <!--  qv区    有很多value属性-->
			// <!--  xiangxi详细-->
			// <!--  youbian邮编-->
			// <!--  选择手机还是邮箱验证  rest-->
			// <!--  选择手机只取手机的信息   --->  
			// <!--  选择邮箱只取邮箱的信息  -->
			// <!--  phone手机号  -->
			// <!--  mail手机号  -->
			// <!--  取验证码的值 $_SESSION["code"]  -->
			// <!--  yzm对比传过来的值 -->
			//<!--  duanxin短信-->
			//<!--  tongyi同意 -->
			$pass2=$_POST['pass2'];
			$yzmhoutai = $_SESSION["code"];
			$tongyi=$_POST['tongyi'];
			$name=$_POST['name'];
			$pass=$_POST['pass'];
			$xing=$_POST['xing'];
			$ming=$_POST['ming'];
			$nicheng=$_POST['nicheng'];
			$sex=$_POST['sex'];
			$sheng=$_POST['sheng'];
			$shi=$_POST['shi'];
			$qv=$_POST['qv'];
			$xiangxi=$_POST['xiangxi'];
			$postcode=$_POST['postcode'];
			$rest=$_POST['rest'];
			$phone=$_POST['phone'];
			$mail=$_POST['mail'];
			$yzmkehu=$_POST['yzm'];
			$duanxin=$_POST['duanxin'];
			if(!empty($tongyi)){
				if($pass==$pass2){
					if(strlen($pass)+strlen($pass2)>=12){
						if($yzmkehu==$yzmhoutai){
							if($rest=="phone"){
								$sql="insert into user(name,pass,sex,xing,ming,nicheng,sheng,shi,qv,xiangxi,postcode,rest,phone)values('$name','$pass','$sex','$xing','$ming','$nicheng','$sheng','$shi','$qv','$xiangxi','$postcode','$rest','$phone')";
								$result = zengshangaicha($sql);
								if($result>0){
									$tishi ="*添加成功~";lists($tishi);die();
								}else{
									$tishi = "*由于未知的原因添加失败了，您的资料已消失在异次元空间里-v-，重新添加吧~";add($tishi);die();
								}
							}elseif($rest=='mile'){
								$sql="insert into user(name,pass,sex,xing,ming,nicheng,sheng,shi,qv,xiangxi,postcode,rest,mile)values('$name','$pass','$sex','$xing','$ming','$nicheng','$sheng','$shi','$qv','$xiangxi','$postcode','$rest','$mile')";
								$result = zengshangaicha($sql);
								if($result>0){
									$tishi ="*添加成功~";lists($tishi);die();
								}else{
									$tishi = "*由于未知的原因添加失败了，您的资料已消失在异次元空间里-v-，重新添加吧~";add($tishi);die();
								}
							}
						}else{
							$tishi = "*验证码错误，瞅清楚~";add($tishi);die();
						}
					}else{
							$tishi = "*密码长度需要超过6位~";add($tishi);die();
					}	
				}else{
					$tishi = "*两次密码输入不一样啊~是不是写错了~~";add($tishi);die();
				}
			}else{
				$tishi = "*请仔细阅读本站的使用条款再注册o~";
				add($tishi);
				die();
			}	
		}
		//删除用户
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			//输入sql语句
			$sql="delete from user where id=$id";
			$result = zengshangaicha($sql);
				//引入ok文件
			header("location:?c=user&a=lists");
			
		}
		//修改用户
		function edit(){
			//取到要修改的id
			$id = $_GET['id'];
			//输入sql语句
			$sql = "select * from user where id = $id";
			//返回model处理后的结果 
			$arr = zengshangaicha($sql);
	
			//引入edit文件
			include("public/heads.php");
			include("view/user/edit.php");
		}	
		//删除表中全部数据
		function delall(){
			$sql="delete from user";
			$result = zengshangaicha($sql);
			include("public/heads.php");
			include("view/user/add.php");
		}
		//开始修改
		function editaction(){
			$pass2=$_POST['pass2'];
			$yzmhoutai = $_SESSION["code"];
			$tongyi=$_POST['tongyi'];
			$name=$_POST['name'];
			$pass=$_POST['pass'];
			$xing=$_POST['xing'];
			$ming=$_POST['ming'];
			$nicheng=$_POST['nicheng'];
			$sex=$_POST['sex'];
			$sheng=$_POST['sheng'];
			$shi=$_POST['shi'];
			$qv=$_POST['qv'];
			$xiangxi=$_POST['xiangxi'];
			$postcode=$_POST['postcode'];
			$rest=$_POST['rest'];
			$phone=$_POST['phone'];
			$mail=$_POST['mail'];
			$yzmkehu=$_POST['yzm'];
			$duanxin=$_POST['duanxin'];
			$id=$_POST['id'];
				if(strlen($name)>=6){
					
			
					if(strlen($pass)>=6){
							if($rest=="phone"){
								$sql = "update user set name='$name',pass='$pass',sex='$sex',xing='$xing',ming='$ming',nicheng='$nicheng',sheng='$sheng',shi='$shi',qv='$qv',xiangxi='$xiangxi',postcode='$postcode',rest='$rest',phone='$phone' where id='$id'";
								$result = zengshangaicha($sql);
								if($result>0){
									$tishi ="*修改成功~";lists($tishi);die();
								}else{
									$tishi = "*由于未知的原因修改失败了，您的资料已消失在异次元空间里-v-，重新修改吧~";lists($tishi);die();
								}
							}elseif($rest=='mile'){
								$sql="insert into user(name,pass,sex,xing,ming,nicheng,sheng,shi,qv,xiangxi,postcode,rest,mile)values('$name','$pass','$sex','$xing','$ming','$nicheng','$sheng','$shi','$qv','$xiangxi','$postcode','$rest','$mile')";
								$result = zengshangaicha($sql);
								if($result>0){
									$tishi ="*修改成功~";lists($tishi);die();
								}else{
									$tishi = "*由于未知的原因修改失败了，您的资料已消失在异次元空间里-v-，重新修改吧~";lists($tishi);die();
								}
							}
					}else{
							$tishi = "*密码长度需要超过6位~";lists($tishi);die();
					}	
				}else{
					$tishi = "*帐号长度需要超过6位~";lists($tishi);die();
				}
	}