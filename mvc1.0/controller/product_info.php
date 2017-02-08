<?php
	//新闻的方法
		header("Content-Type:text/html;charset=utf-8");//第三步用户管理（增删改查）user.php控制器里
		//判断session是否为空
		pdsess();
		session_start();
		//用户列表
		function lists(){
			pdsess();
			//sql语句查询
			$sql="select count(*) as shuliang from product_info";
			//执行sql语句
			$lujin = "D:/wamp/www/php/mvc1.0/public/upload/<br/>";
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
				$sql="select * from product_info limit $page_start,$meiye";
				$result=zengshangaicha($sql);
			}
			if(!empty($result)){
				include("public/heads.php");
				include("view/product_info/lists.php");
			}else{
				include("public/heads.php");
				include("view/product_info/add.php");
			}
		}
		//用户添加
		function add(){
			pdsess();
			//sql语句查询
			$sql="select * from product_type";
			//执行sql语句
			$arr = zengshangaicha($sql);
			//var_dump($arr);die();
			include("public/heads.php");
			include("view/product_info/add.php");
		}
		//添加用户
		function addaction(){
			//父级的id  在这里作为内容的pid
			$pid=$_POST['id'];
			$type=$_POST['type'];
			$details=$_POST['details'];
			$intro=$_POST['intro'];
			//类型
			$tp = $_FILES["file"];
			//存到......里
			$lujin = "../mvc1.1/public/images/";
			$imagename = images($tp,$lujin);
			$createtime=date('Y-m-d H:i:s');
			$sql="insert into product_info(pid,imagename,type,intro,details,createtime)values('$pid','$imagename','$type','$intro','$details','$createtime')";
			$a=zengshangaicha($sql);
			// var_dump($sql);die();
			header("location:?c=product_info&a=lists");
		
			
		}
		//删除用户
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			//输入sql语句
			$sql="delete from product_info where id=$id";
			$result = zengshangaicha($sql);
				
			header("location:?c=product_info&a=lists");
			
		}
		//修改用户
		function edit(){
			//取到要修改的id
			$id = $_GET['id'];
			
			//用被修改的pid 查找它的数据
			$sql="select * from product_info where id=$id";
			//被修改的数据
			$shujv = zengshangaicha($sql);
			
			$createtime =date('Y-m-d H:i:s');
			//引入edit文件
			include("public/heads.php");
			include("view/product_info/edit.php");
		}	
		function editaction(){
			$id = $_POST['id'];
			$type=$_POST['type'];
			$details=$_POST['details'];
			$intro=$_POST['intro'];
			//类型
			$tp = $_FILES["file"];
			//存到......里
			$lujin = "../mvc1.1/public/images/";
			$imagename = images($tp,$lujin);
			$createtime = $_POST['createtime'];
			
			// var_dump($imagename);die();
			$sql = "update product_info set type='$type',details='$details',intro='$intro',imagename='$imagename',createtime='$createtime' where id=$id";
			// var_dump($sql);
			$result = zengshangaicha($sql);	
			
			header("location:?c=product_info&a=lists");
		}