
<!------------------修改用户--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
	<br /><br /><br /><br /><br /><br />
		<span><h1>修改页面</h1></span>
		<br /><br /><br /><br /><br /><br /><br />
		<form action="?c=user&a=editaction" method="post">
							
							<!--  所有需要传的数据-->
							<!--  name用户名-->
							<!--  pass密码-->
							<!--  pass2密码确认-->
							<!--  xing姓-->
							<!--  ming名-->
							<!--  nicheng昵称-->
							<!--  sex性别-->
							<!--  sheng省  有很多value属性-->
							<!--  shi市    有很多value属性-->
							<!--  qv区    有很多value属性-->
							<!--  xiangxi详细-->
							<!--  youbian邮编-->
							<!--  选择手机还是邮箱验证  rest-->
							<!--  选择手机只取手机的信息   --->  
							<!--  选择邮箱只取邮箱的信息  -->
							<!--  phone手机号  -->
							<!--  mail手机号  -->
							<!--  取验证码的值 $_SESSION["code"]  -->
							<!--  yzm对比传过来的值 -->
							<!--  duanxin短信-->
							<!--  tongyi同意 -->
							
							<div class="ma1">
							<input type="hidden" name="id" value="<?php
								echo $arr[0]['id'];
								?>"/>
								&nbsp;&nbsp;&nbsp;&nbsp;*用户名:<input type="text" name="name"  value="<?php echo $arr[0]['name'];
					?>" placeholder="未来登陆的帐号啊~"/>
							</div>
							<div class="ma1">
								<span class="mima">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*密码:<input type="password" name="pass" value="<?php echo $arr[0]['pass'];
					?>"  placeholder="请输入超过6位的密码"/>
								</span>
							</div>
							<div class="ma1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*姓:<input type="text" name="xing"  value="<?php echo $arr[0]['xing'];
					?>" /></div>
							<div class="ma1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*名:<input type="text" name="ming"  value="<?php echo $arr[0]['ming'];
					?>" /></div>
							<div class="ma1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;昵称:<input type="text" name="nicheng"  value="<?php echo $arr[0]['nicheng'];
					?>" placeholder="取个好听的名字吧~"/></div>
							<div class="ma1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php
								if($arr[0]['name']="男"){
									echo "性别:<input type='radio' name='sex'value='男' checked='checked'>先生
								<input type='radio' name='sex' value='女'>女士
								";
								}else{
									echo "性别:<input type='radio' name='sex'value='男'>先生
								<input type='radio' name='sex' value='女' checked='checked'>女士
								";
								}
									?>
							</div><br/>	
							<div class="ma2">
								<span class="lianxi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系方式</span>
								<select name="sheng"  value="<?php echo $arr[0]['sheng'];
					?>" id="">
									<option value="">请选择省份</option>
									<option value="河南省">河南省</option>
									<option value="河北省">河北省</option>
									<option value="山西省">山西省</option>
									<option value="陕西省">陕西省</option>
									<option value="吉林省">吉林省</option>
									<option value="江苏省">江苏省</option>
								</select>
								
								<select name="shi"  value="<?php echo $arr[0]['shi'];
					?>" id="">
									<option value="">请选择城市</option>
									<option value="太原市">太原市</option>
									<option value="晋中市">晋中市</option>
									<option value="吕梁市">吕梁市</option>
								</select>
								
								<select name="qv"  value="<?php echo $arr[0]['qv']; ?>" id="">
									<option value="">请选择区域</option>
									<option value="南内环">南内环</option>
									<option value="小店">小店</option>
									<option value="柳巷">柳巷</option>
								</select>
							</div>
							<div class="ma1">具体位置：<input type="text" name="xiangxi"  value="<?php echo $arr[0]['xiangxi']; ?>"placeholder="详细住址~"/>
							</div><br />
							<div class="ma1">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮编&nbsp;&nbsp;<input type="text" name="postcode" value="<?php echo $arr[0]['postcode']; ?>"/>
							</div>
							<div class="ma3">
								<h5>*用户注册时所选择的验证方式</h5>
								<?php
								if($arr[0]['name']="phone"){
									echo "<div class='ma1'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='rest' value='phone' checked='checked'>手机:<input type='text' name='phone' value='".$arr[0]['phone']." '/>
								</div>
								<div class='ma1'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='rest' value='mail'>邮箱:<input type='text' name='mail'value='".$arr[0]['mail']." ' />
								</div>";
								}else{
										echo "<div class='ma1'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='rest' value='phone'>手机:<input type='text' name='phone' value='".$arr[0]['phone']." '/>
								</div>
								<div class='ma1'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='rest' value='mail' checked='checked'>邮箱:<input type='text' name='mail'value='".$arr[0]['mail']." ' />
								</div>";
								}
									?>
							<div class="ma6">
								<input type="submit" value="▶ 提交"/>
								<input type="reset" value="▶ 重置"/>
							</div>
						</form>
	</center>
 </div>
</section>
</body>
</html>
