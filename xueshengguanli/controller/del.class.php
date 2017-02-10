<?php
	class del{
		
		public function dellink(){
			$id = $_GET['id'];
			$sql="delete from user where id=".$id;
			zengshangaicha($sql);
			header("location:?c=lists&a=listslink");
		}
	}