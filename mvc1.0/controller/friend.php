<?php
		header("Content-Type:text/html;charset=utf-8");//�������û�������ɾ�Ĳ飩user.php��������
		//�ж�session�Ƿ�Ϊ��
		pdsess();
		session_start();
		//�û��б�
		function lists(){
			//sql����ѯ
			$sql="select count(*) as shuliang from friend";
			//ִ��sql���
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
		//�û����
		function add(){
			include("public/heads.php");
			include("view/friend/add.php");
		}
		//����û�
		function addaction(){
			$name=$_POST['name'];
			$url="http://".$_POST['url'];
			$sql="insert into friend(name,url)value('$name','$url')";
			$result = zengshangaicha($sql);
			//����ת��list
			header("location:?c=friend&a=lists");
			
		}
		//ɾ���û�
		function del(){
			//ȡ��Ҫɾ����id
			$id = $_GET['id'];
			//����sql���
			$sql="delete from friend where id=$id";
			zengshangaicha($sql);
			header("location:?c=friend&a=lists");
			
		}
		//�޸��û�
		function edit(){
			//ȡ��Ҫ�޸ĵ�id
			$id = $_GET['id'];
			//����sql���
			$sql = "select * from friend where id = $id";
			//����model�����Ľ�� 
			$arr = zengshangaicha($sql);
	
			//����edit�ļ�
			include("public/heads.php");
			include("view/friend/edit.php");
		}	
		//ɾ������ȫ������
		function delall(){
			$sql="delete from friend";
			$result = zengshangaicha($sql);
			include("public/heads.php");
			include("view/friend/lists.php");
		}
		//��ʼ�޸�
		function editaction(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$url = "http://".$_POST['url'];
				
					//����name	
					$sql="select name from friend where name='$name'";
					$pd = zengshangaicha($sql);
					
						//�޸�����
						$sql = "update friend set name='$name',url='$url' where id=$id";
						zengshangaicha($sql);	
						//����ת��list
						header("location:?c=friend&a=lists");
					
		}