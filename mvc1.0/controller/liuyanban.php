<?php
	//���ŵķ���
		header("Content-Type:text/html;charset=utf-8");//�������û�������ɾ�Ĳ飩user.php��������
		//�ж�session�Ƿ�Ϊ��
		pdsess();
		session_start();
		//�û��б�
		function lists(){
			pdsess();
			$sql="select count(*) as shuliang from liuyanban";
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
				$sql="select * from liuyanban limit $page_start,$meiye";
				$result=zengshangaicha($sql);
			}
			include("public/heads.php");
			include("view/liuyanban/lists.php");
		}
		function del(){
			//ȡ��Ҫɾ����id
			$id = $_GET['id'];
			//����sql���
			$sql="delete from liuyanban where id=$id";
			$result = zengshangaicha($sql);
				
			header("location:?c=liuyanban&a=lists");
			
		}
		//�޸��û�
		function edit(){
			$id = $_GET['id'];
			$sql = "select * from liuyanban where id = $id";
			//����model�����Ľ�� 
			$liuyan = zengshangaicha($sql);
	
			//����edit�ļ�
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