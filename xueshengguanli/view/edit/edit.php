
			<form action="<?php
		if(!empty($result[0]["id"])){
			echo "?c=edit&a=editaction";
		}else{
			echo "?c=add&a=addlink";
		}
		?>" method="post">
			<center>
			
				<span style="color:grey;font-size:22px;margin-top:10px">姓名：</span><input type="text" name="name"  style="width:300px;height:40px" value="<?php     echo $result[0]['name'];
					?>"/><br /><br />	
				<span style="color:grey;font-size:22px;margin-top:10px">年龄：</span><input type="text" name="age"  style="width:300px;height:40px" value="<?php     echo $result[0]['age'];
					?>"/><br /><br />		
					
				<span style="color:grey;font-size:25px">特点：</span>
				<?php
				
					if($result[0]['sex'] == "男"){
						
						echo "<input type='radio' name='sex' checked='checked' value='男'/><span style='color:#2DACB1'>英俊潇洒</span><input type='radio' name='sex' value='女'><span style='color:#AF687C';>倾国倾城</span><br /><br />";
					}elseif($result[0]['sex'] == "女"){
						echo "<input type='radio' name='sex' value='男'/><span style='color:#2DACB1'>英俊潇洒</span><input type='radio' name='sex' checked='checked' value='女'><span style='color:#AF687C';>倾国倾城</span><br /><br />";
					}elseif(empty($result[0]['sex'])){
						echo "<input type='radio' name='sex' value='男'/><span style='color:#2DACB1'>英俊潇洒</span><input type='radio' name='sex' value='女'><span style='color:#AF687C';>倾国倾城</span><br /><br />";
					}
					?>
					<input type="hidden" name="id" value="<?php
						echo $result[0]["id"];
						?>" />
				<input type="submit" style="width:77px;height:33px;background-color:#fff;border-color:#8DD241" value="提交"/>	
				<input type="reset" style="width:77px;height:33px;background-color:#fff;border-color:#8DD241" value="重置"/>
			</center>
		</form>
	</div>	
</body>
</html>