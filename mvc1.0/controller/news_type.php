<?php
	//新闻的方法
		header("Content-Type:text/html;charset=utf-8");//第三步用户管理（增删改查）user.php控制器里
		//判断session是否为空
		pdsess();
		session_start();
		//新闻列表
		function lists(){
			pdsess();
			//sql语句查询
			$sql="select * from news_type as a order by concat(a.pid,a.id)";
			//执行sql语句
			$result = zengshangaicha($sql);
			include("public/heads.php");
			include("view/news_type/lists.php");
			
		}
		//用户添加
		function add(){
			pdsess();
			//sql语句查询
			$sql="select * from news_type as a order by concat(a.pid,a.id)";
			//执行sql语句
			$arr = zengshangaicha($sql);
			//var_dump($arr);die();
			include("public/heads.php");
			include("view/news_type/add.php");
		}
		//添加用户
		function addaction(){
			$pid=$_POST['pid'];
			$name=$_POST['name'];
			$sql="insert into news_type(pid,name) value('$pid','$name')";
			$result = zengshangaicha($sql);
			header("location:?c=news_type&a=lists");
			
		}
		//删除用户
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			$pid = $_GET['pid'];
				//sql语句查询子集是否存在
				$zi = "$pid"."$id".",";
				$sql="select * from news_type where pid='$zi'";
				$ziji = zengshangaicha($sql);
				var_dump($ziji);
				//判断子集是否为空
				if(empty($ziji)){
					//执行删除的sql语句
					$sql="delete from news_type where id=$id";
					zengshangaicha($sql);
					header("location:?c=news_type&a=lists");
				}else{
					echo "子集存在";
				}
				
			
					
		}
		//修改用户
		function edit(){
			//取到要修改的id
			$pid = $_GET['pid'];
			$id = $_GET['id'];
			//输入sql语句
			$sql = "select * from news_type where id = $id";
			//返回model处理后的结果 
			$result = zengshangaicha($sql);
			//引入edit文件
			include("public/heads.php");
			include("view/news_type/update.php");
		}	
		function editaction(){
			$pid = $_POST['pid'];
			$id = $_POST['id'];
			$name = $_POST['name'];
			$sql = "update news_type set name='$name' where id=$id";
			$result = zengshangaicha($sql);	
			header("location:?c=news_type&a=lists");
				
		}	