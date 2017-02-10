<?php
	class add{
		public $name;
		public $age;
		public $sex;
		public function addlink(){
			$this -> name = $_POST["name"];
			$this -> age = $_POST["age"];
			$this -> sex = $_POST["sex"];
			//判断输入的结果是否为空
			if(!empty($this -> name && $this -> age && $this -> sex)){
				//添加姓名年龄性别
				$sql="insert into user(name,age,sex)value('$this->name','$this->age','$this->sex')";
				$result = zengshangaicha($sql);
				header("location:?c=lists&a=listslink");
			// 否则跳转到修改页带上为正确操作的数据一起添加
			}else{
				echo "<script language='javascript'>alert('请填写完整！');window.open('WebForm2.aspx')</script>";
				$result[0]['name'] = $this -> name;
				$result[0]['age'] = $this -> age;
				$result[0]['sex'] = $this -> sex;
				// var_dump($result[0]['name']);
				include("public/head.php");
				include("view/edit/edit.php");
				
			}
			
			
		}
		public function addlook(){
			include("public/head.php");
			include("view/add/add.php");
		}
	}