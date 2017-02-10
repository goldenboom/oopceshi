<?php
	class edit{
		
		public function editlink(){
			$id = $_GET["id"];
			$sql="select *from user where id=".$id;
			$result = zengshangaicha($sql);
			include("public/head.php");
			include("view/edit/edit.php");
			
		}
		public function editaction(){
			$name = $_POST["name"];
			$age = $_POST["age"];
			$sex = $_POST["sex"];
			$id = $_POST["id"];
			if(!empty($id)){
				$sql="update user set name='".$name."',age='".$age."',sex='".$sex."' where id=".$id;
				zengshangaicha($sql);
				header("location:?c=lists&a=listslink");
			}else{
				if(!empty($this -> name && $this -> age && $this -> sex)){
					$sql = "insert into user(name,age,sex)value('$this->name','$this->age','$this->sex')";
					zengshangaicha($sql);
					header("location:?c=lists&a=listslink");
				}else{
					echo "<script language='javascript'>alert('请填写完整！');window.open('WebForm2.aspx')</script>";
					$result[0]['name'] = $this -> name;
					$result[0]['age'] = $this -> age;
					$result[0]['sex'] = $this -> sex;
					// var_dump($result[0]['name']);die();
					include("view/edit/edit.php");
					
				}
				
			}
			
		}
	}