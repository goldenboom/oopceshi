	<table border="1px solid red"  style="color:red;border-color:green;">
	<tr>
		<td width="200px" style="color:black" height="30px">姓名</td>
		<td width="200px" style="color:black">年龄</td>
		<td width="200px" style="color:black">性别</td>
		<td width="200px" style="color:black">操作</td>
	</tr>
	
	<?php
	
		// var_dump($result);
		foreach($result as $k => $v){
		echo 	"<tr>";
			echo 	"<td style='color:black' width='200px' height='30px'>".$v["name"]."</td>";
			echo 	"<td style='color:black' >".$v["age"]."</td>";
			echo 	"<td style='color:black'>".$v["sex"]."</td>";
			echo 	"<td><a style='text-decoration:none;color:#0D7600!important;' href='?c=edit&a=editlink&id=".$v["id"]."'>修改</a><a style='text-decoration:none;color:#EA1F00!important;' href='?c=del&a=dellink&id=".$v["id"]."'>删除</a></td>";
		echo 	"</tr>";
					
		}
			
		?>
	</table>
</center>	
</body>
</html>