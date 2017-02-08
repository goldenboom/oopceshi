<?php
	//新闻的方法
		header("Content-Type:text/html;charset=utf-8");//第三步用户管理（增删改查）user.php控制器里
		//判断session是否为空
		pdsess();
		session_start();
		//用户列表
		function soso(){
			
			$soso = $_POST['soso'];
			$ziduan = "title";
			$sql="select * from news_info where $ziduan like'%$soso%'";
			$result=zengshangaicha($sql);
			if(empty($result)){
				$ziduan = "content";
				$sql="select * from news_info where $ziduan like'%$soso%'";
				$result=zengshangaicha($sql);
				if(empty($result)){
					$ziduan = "author";
					$sql="select * from news_info where $ziduan like'%$soso%'";
					$result=zengshangaicha($sql);
					if(empty($result)){
						$ziduan = "createtime";
						$sql="select * from news_info where $ziduan like'%$soso%'";
						$result=zengshangaicha($sql);
						if(empty($result)){
							$weichaxundao = "未查询到相关内容";
							$ziduan = "createtime";
							$sql="select * from news_info";
							$result=zengshangaicha($sql);
								
						}
					}
				}
			}
			include("public/heads.php");
			include("view/news_info/lists.php");
		}
		function lists(){
			pdsess();
			//sql语句查询
			$sql="select count(*) as shuliang from news_info";
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
				$sql="select * from news_info limit $page_start,$meiye";
				$result=zengshangaicha($sql);
			}
			
			if(!empty($result)){
				include("public/heads.php");
				include("view/news_info/lists.php");
			}else{
				include("public/heads.php");
				include("view/news_info/add.php");
			}
		}
		//用户添加
		function add(){
			pdsess();
			//sql语句查询
			$sql="select * from news_type as a order by concat(a.pid,a.id)";
			//执行sql语句
			$arr = zengshangaicha($sql);
			include("public/heads.php");
			include("view/news_info/add.php");
		}
		//添加用户
		function addaction(){
			//父级的id  在这里作为内容的pid
			$pid=$_POST['id'];
			//标题
			$title=$_POST['title'];
			//作者
			$author=$_POST['author'];
			//内容
			$content=$_POST['content'];
			$createtime=date('Y-m-d H:i:s');
			
			$sql="insert into news_info(pid,title,author,content,createtime)value('$pid','$title','$author','$content','$createtime')";
			$result = zengshangaicha($sql);
			header("location:?c=news_info&a=lists");
		
			
		}
		//删除用户
		function del(){
			//取到要删除的id
			$id = $_GET['id'];
			//输入sql语句
			$sql="delete from news_info where id=$id";
			$result = zengshangaicha($sql);
				
			header("location:?c=news_info&a=lists");
			
		}
		//修改用户
		function edit(){
			$pid = $_GET['pid'];
			//sql语句查询
			$sql="select * from news_info where pid=$pid";
			//执行sql语句
			$infos = zengshangaicha($sql);
			//查找被修改的数据的pid  也就是它父级的id
			$sql = "select * from news_type where id = $pid";
			//返回model处理后的结果 
			$types = zengshangaicha($sql);
	
			//引入edit文件
			include("public/heads.php");
			include("view/news_info/edit.php");
		}	
		function editaction(){
			$pid = $_POST['id'];
			$title = $_POST['title'];
			$author = $_POST['author'];
			$content = $_POST['content'];
			$createtime =date('Y-m-d H:i:s');
			$sql = "update news_info set title='$title',author='$author',content='$content',createtime='$createtime' where pid=$pid";
		
			$result = zengshangaicha($sql);	
			header("location:?c=news_info&a=lists");
		}