<!------------------添加新闻分类--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		<form action="?c=news_info&a=addaction" method="post">
			<?php
			//新闻分类详情页
			//新闻分类详情页$k$v
				echo "<select name='id' id=''>";
				foreach($arr as $k=>$v){
						//下拉列表 因pid+id是子集的pid  所以新添加的子集可以这样输入
						
							echo "<option  value='".$v['id']."'>".$v['name']."</option>br";
				}
				echo "</select><br />";
						//新输入的子集名字
						echo "标题：<input type='text' name='title' id=''><br />";
						
			?>
			作者：<input type="text" name="author" id="" /><br />
			内容：<textarea name="content" id="" cols="30" rows="10"></textarea><br />
			<input type="submit"/>
		</form>
				
	</center>
 </div>
</section>
</body>
</html>
