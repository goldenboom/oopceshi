<?php
	class lists{
		
		public function listslink(){
			$sql="select * from user";
			$result = zengshangaicha($sql);
			include("public/head.php");
			include("view/look/look.php");
			
		}
	}