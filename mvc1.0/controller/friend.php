<?php
		header("Content-Type:text/html;charset=utf-8");//第三步用户管理（增删改查）user.php控制器里
		//判断session是否为空
		pdsess();
		session_start();
		//用户列表
		function lists(){
			//sql语句查询
			$sql="select count(*) as shuliang from friend";
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
				$sql="select * from friend limit $page_start,$meiye";
				$result=zengshangaicha($sql);
			}
			$result = zengshangaicha($sql);
				include("public/heads.php");
				include("view/friend/lists.php");
			
			
		}
		//用户添加
		function add(){
			include("public/heads.php");
			include("view/friend/add.php");
		}
		//添加用户
		function addaction(){
			$name=$_POST['name'];
			$url="http://".$_POST['url'];
			$sql="insert into friend(name,url)value('$name','$url')";
			$result = zengshangaicha($sql);
			//并跳转到list
			header("location:?c=friend&a=lists");
			
		}
		//删除用户
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			//输入sql语句
			$sql="delete from friend where id=$id";
			zengshangaicha($sql);
			header("location:?c=friend&a=lists");
			
		}
		//修改用户
		function edit(){
			//取到要修改的id
			$id = $_GET['id'];
			//输入sql语句
			$sql = "select * from friend where id = $id";
			//返回model处理后的结果 
			$arr = zengshangaicha($sql);
	
			//引入edit文件
			include("public/heads.php");
			include("view/friend/edit.php");
		}	
		//删除表中全部数据
		function delall(){
			$sql="delete from friend";
			$result = zengshangaicha($sql);
			include("public/heads.php");
			include("view/friend/lists.php");
		}
		//开始修改
		function editaction(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$url = "http://".$_POST['url'];
				
					//查找name	
					$sql="select name from friend where name='$name'";
					$pd = zengshangaicha($sql);
					
						//修改数据
						$sql = "update friend set name='$name',url='$url' where id=$id";
						zengshangaicha($sql);	
						//并跳转到list
						header("location:?c=friend&a=lists");
					
		}