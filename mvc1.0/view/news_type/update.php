
<!------------------添加新闻分类--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		<form action="?c=news_type&a=editaction" method="post">
			<?php
			//新闻列表页
			//新闻详情列表页遍历出$k$v
				
				
				echo "<select name='id'>";
				foreach($result as $k=>$v){
					//下拉列表 因pid+id是子集的pid  所以新添加的子集可以这样输入
					echo "<option value='".$v['id']."'>".$v['name']."</option>";
				}
				
				echo "</select>";
				//新输入的子集名字
				echo "<input type='text' name='name'></input>";
				echo "<input type='submit'/>";
			?>
		
		</form>	
	</center>
 </div>
</section>
</body>
</html>
