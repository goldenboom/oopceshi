<?php
		header("Content-Type:text/html;charset=utf-8");//�������û�������ɾ�Ĳ飩user.php��������
		//�ж�session�Ƿ�Ϊ��
		pdsess();
		session_start();
		//�û����
		function add(){
			include("public/heads.php");
			include("view/nav/add.php");
		}
	/*	//�û��б�
		function lists(){
			//sql����ѯ
			$sql="select * from nav";
			$result = select($sql);
				include("public/heads.php");
				include("view/nav/lists.php");
			
			
		}
		//����û�
		function addaction(){
			$name=$_POST['name'];
			$url=$_POST['url'];
			$sql="insert into nav(name,url)value('$name','$url')";
			$result = insert($sql);
			//����ת��list
			header("location:?c=nav&a=lists");
			
		}
		//ɾ���û�
		function del(){
			//ȡ��Ҫɾ����id
			$id = $_GET['id'];
			//����sql���
			$sql="delete from nav where id=$id";
			remove($sql);
			header("location:?c=nav&a=lists");
			
		}
		//�޸��û�
		function edit(){
			//ȡ��Ҫ�޸ĵ�id
			$id = $_GET['id'];
			//����sql���
			$sql = "select * from nav where id = $id";
			//����model�����Ľ�� 
			$arr = select($sql);
	
			//����edit�ļ�
			include("public/heads.php");
			include("view/nav/edit.php");
		}	
		//ɾ������ȫ������
		function delall(){
			$sql="delete from nav";
			$result = remove($sql);
			include("public/heads.php");
			include("view/nav/lists.php");
		}
		//��ʼ�޸�
		function editaction(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$url = $_POST['url'];
				
					//����name	
					$sql="select name from nav where name='$name'";
					$pd = select($sql);
					
						//�޸�����
						$sql = "update nav set name='$name',url='$url' where id=$id";
						update($sql);	
						//����ת��list
						header("location:?c=nav&a=lists");
					
		}*/
		//�û��б�
		
		
		function lists(){
			//sql����ѯ
			$sql="select * from nav";
			$result = zengshangaicha($sql);
				include("public/heads.php");
				include("view/nav/lists.php");
			
			
		}
		//����û�
		function addaction(){
			$name=$_POST['name'];
			$url=$_POST['url'];
			$sql="insert into nav(name,url)value('$name','$url')";
			$return = zengshangaicha($sql);
			//����ת��list
			header("location:?c=nav&a=lists");
			
		}
		//ɾ���û�
		function del(){
			//ȡ��Ҫɾ����id
			$id = $_GET['id'];
			//����sql���
			$sql="delete from nav where id=$id";
			zengshangaicha($sql);
			header("location:?c=nav&a=lists");
			
		}
		//�޸��û�
		function edit(){
			//ȡ��Ҫ�޸ĵ�id
			$id = $_GET['id'];
			//����sql���
			$sql = "select * from nav where id = $id";
			//����model�����Ľ�� 
			$arr = zengshangaicha($sql);
	
			//����edit�ļ�
			include("public/heads.php");
			include("view/nav/edit.php");
		}	
		//ɾ������ȫ������
		function delall(){
			$sql="delete from nav";
			$result = zengshangaicha($sql);
			include("public/heads.php");
			include("view/nav/lists.php");
		}
		//��ʼ�޸�
		function editaction(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$url = $_POST['url'];
				
					//����name	
					$sql="select name from nav where name='$name'";
					$pd = zengshangaicha($sql);
					
						//�޸�����
						$sql = "update nav set name='$name',url='$url' where id=$id";
						zengshangaicha($sql);	
						//����ת��list
						header("location:?c=nav&a=lists");
					
		}