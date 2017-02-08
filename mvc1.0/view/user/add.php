

<!------------------添加用户--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		
					<span style="color:red;"><?php
					echo "<strong style='color:red;'>"."*".$tishi."</strong>";
						?></span>
		<h1><strong style="color:grey;">用户资料添加</strong></h1>
		<form action="?c=user&a=addaction" method="post">
			<span style="color:grey;">用户名：</span><input type="text" name="name" class="textbox textbox_295" placeholder="未来登陆的帐号啊~"/><br /><br />	
			<span style="color:grey;">*密码：</span><input type="password" name="pass" class="textbox textbox_295" /><br /><br />	
			<span style="color:grey;">*再次输入密码：</span><input type="password" name="pass2" class="textbox textbox_295" /><br /><br />	
			<span style="color:grey;">姓：</span><input type="text" name="xing" class="textbox textbox_295" /><br /><br />	
			<span style="color:grey;">名：</span><input type="text" name="ming" class="textbox textbox_295" /><br /><br />	
			<span style="color:grey;">昵称：</span><input type="text" name="nicheng" class="textbox textbox_295" /><br /><br />		
			<span style="color:grey;">性别：</span><input type="radio" name="sex" value="男"/>先生<input type="radio" name="sex" value="女">女士<br /><br />		
					<span style="color:grey;">联系方式</span>
							<select name="sheng" id="">
									<option value="">请选择省份</option>
									<option value="河南省">河南省</option>
									<option value="河北省">河北省</option>
									<option value="山西省">山西省</option>
									<option value="陕西省">陕西省</option>
									<option value="吉林省">吉林省</option>
									<option value="江苏省">江苏省</option>
								</select>
								
								<select name="shi" id="">
									<option value="">请选择城市</option>
									<option value="太原市">太原市</option>
									<option value="晋中市">晋中市</option>
									<option value="吕梁市">吕梁市</option>
								</select>
								
								<select name="qv" id="">
									<option value="">请选择区域</option>
									<option value="南内环">南内环</option>
									<option value="小店">小店</option>
									<option value="柳巷">柳巷</option>
								</select>	<br />
			<span style="color:grey;">具体位置：</span><input type="text" name="xiangxi" class="textbox textbox_295" /><br /><br />	
			<span style="color:grey;">邮编:</span><input type="text" name="postcode" class="textbox textbox_295" /><br /><br />	
			<span style="color:red;">*用户的验证方式:</span><br /><br />
			<span style="color:grey;">手机:</span><input type="radio" name="rest"   value="phone"/><input type="text" name="phone" class="textbox textbox_295" /><br /><br />
			<span style="color:grey;">邮箱:</span><input type="radio" name="rest"  value="mail"/><input type="text" name="mail" class="textbox textbox_295" /><br /><br />	
			<span style="color:grey;">验证码:</span><input type="text" name="yzm" class="textbox textbox_295" placeholder="验证码"/>
			<img border="0" style="cursor:pointer;" onclick="this.src='./view/user/yzm.php?'+new Date().getTime();" src="./view/user/yzm.php">	<br />
			<span style="color:grey;">上海大众斯柯达承诺不会泄露您的个人信息，请放心填写。(*为必填)</span><br />
			<input type="checkbox" name="duanxin"  value="duanxin" /><span style="color:grey;">希望以后可以收到来自上海大众斯柯达的短信活动告知</span><br /><br />				
			<input type="checkbox" name="tongyi"  value="tongyi" /><span style="color:grey;">我已阅读并接受本站的使用条款</span><br /><br />					
			<span style="color:grey;">阅读条款</span>	
			<input type="submit" style="width:77px;height:33px" value="▶ 提交"/>
			<input type="reset" style="width:77px;height:33px" value="▶ 重置"/>
		</form>
	</center>
 </div>
</section>
</body>
</html>
