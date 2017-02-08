<?php
		header("Content-Type:text/html;charset=utf-8");//第三步用户管理（增删改查）user.php控制器里
		//判断session是否为空
		pdsess();
		session_start();
		//用户添加
		function add(){
			include("public/heads.php");
			include("view/nav/add.php");
		}
	/*	//用户列表
		function lists(){
			//sql语句查询
			$sql="select * from nav";
			$result = select($sql);
				include("public/heads.php");
				include("view/nav/lists.php");
			
			
		}
		//添加用户
		function addaction(){
			$name=$_POST['name'];
			$url=$_POST['url'];
			$sql="insert into nav(name,url)value('$name','$url')";
			$result = insert($sql);
			//并跳转到list
			header("location:?c=nav&a=lists");
			
		}
		//删除用户
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			//输入sql语句
			$sql="delete from nav where id=$id";
			remove($sql);
			header("location:?c=nav&a=lists");
			
		}
		//修改用户
		function edit(){
			//取到要修改的id
			$id = $_GET['id'];
			//输入sql语句
			$sql = "select * from nav where id = $id";
			//返回model处理后的结果 
			$arr = select($sql);
	
			//引入edit文件
			include("public/heads.php");
			include("view/nav/edit.php");
		}	
		//删除表中全部数据
		function delall(){
			$sql="delete from nav";
			$result = remove($sql);
			include("public/heads.php");
			include("view/nav/lists.php");
		}
		//开始修改
		function editaction(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$url = $_POST['url'];
				
					//查找name	
					$sql="select name from nav where name='$name'";
					$pd = select($sql);
					
						//修改数据
						$sql = "update nav set name='$name',url='$url' where id=$id";
						update($sql);	
						//并跳转到list
						header("location:?c=nav&a=lists");
					
		}*/
		//用户列表
		
		
		function lists(){
			//sql语句查询
			$sql="select * from nav";
			$result = zengshangaicha($sql);
				include("public/heads.php");
				include("view/nav/lists.php");
			
			
		}
		//添加用户
		function addaction(){
			$name=$_POST['name'];
			$url=$_POST['url'];
			$sql="insert into nav(name,url)value('$name','$url')";
			$return = zengshangaicha($sql);
			//并跳转到list
			header("location:?c=nav&a=lists");
			
		}
		//删除用户
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			//输入sql语句
			$sql="delete from nav where id=$id";
			zengshangaicha($sql);
			header("location:?c=nav&a=lists");
			
		}
		//修改用户
		function edit(){
			//取到要修改的id
			$id = $_GET['id'];
			//输入sql语句
			$sql = "select * from nav where id = $id";
			//返回model处理后的结果 
			$arr = zengshangaicha($sql);
	
			//引入edit文件
			include("public/heads.php");
			include("view/nav/edit.php");
		}	
		//删除表中全部数据
		function delall(){
			$sql="delete from nav";
			$result = zengshangaicha($sql);
			include("public/heads.php");
			include("view/nav/lists.php");
		}
		//开始修改
		function editaction(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$url = $_POST['url'];
				
					//查找name	
					$sql="select name from nav where name='$name'";
					$pd = zengshangaicha($sql);
					
						//修改数据
						$sql = "update nav set name='$name',url='$url' where id=$id";
						zengshangaicha($sql);	
						//并跳转到list
						header("location:?c=nav&a=lists");
					
		}