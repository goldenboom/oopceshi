<?php
	//新闻的方法
		header("Content-Type:text/html;charset=utf-8");//第三步用户管理（增删改查）user.php控制器里
		//判断session是否为空
		pdsess();
		session_start();
		//用户列表
		function lists(){
			pdsess();
			$sql="select count(*) as shuliang from liuyanban";
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
				$sql="select * from liuyanban limit $page_start,$meiye";
				$result=zengshangaicha($sql);
			}
			include("public/heads.php");
			include("view/liuyanban/lists.php");
		}
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			//输入sql语句
			$sql="delete from liuyanban where id=$id";
			$result = zengshangaicha($sql);
				
			header("location:?c=liuyanban&a=lists");
			
		}
		//修改用户
		function edit(){
			$id = $_GET['id'];
			$sql = "select * from liuyanban where id = $id";
			//返回model处理后的结果 
			$liuyan = zengshangaicha($sql);
	
			//引入edit文件
			include("public/heads.php");
			include("view/liuyanban/edit.php");
		}	
		function editaction(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$content = $_POST['content'];
			$createtime =date('Y-m-d H:i:s');
			// var_dump($_POST);
			$sql = "update liuyanban set name='$name',content='$content',createtime='$createtime' where id=$id";
			// var_dump($sql);
			$result = zengshangaicha($sql);	
			header("location:?c=liuyanban&a=lists");
		}