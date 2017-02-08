
<!------------------修改用户--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		<form action="?c=friend&a=editaction" method="post">
			  <section>
				<h1><strong style="color:grey;">导航修改</strong></h1>
				<span style="color:grey;">name：</span><input type="text" name="name" value="<?php echo $arr[0]['name'];?>" class="textbox textbox_295" placeholder="name"/><br /><br />
				<span style="color:grey;">url：</span><input type="text" name="url" value="<?php echo $arr[0]['url'];?>" class="textbox textbox_295" placeholder="pass"/><br /><br />
				<input type="hidden" name="id" value="<?php echo $arr[0]['id'];?>"/>
				<input type="submit" value="确认" class="group_btn"/><br />
			</section>
		</form>
	</center>
 </div>
</section>
</body>
</html>
