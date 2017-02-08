


<!------------------添加商品详情分类--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		<form action="?c=liuyanban&a=editaction" method="post">
			<?php
			//商品详情修改列表页  
				foreach($liuyan as $k=>$v){
					echo "名字：<input type='text' name='name' value='".$v['name']."'><br />";
					echo "内容：<textarea name='content' id='' cols='30' value='".$v['content']."'rows='10'>".$v['content']."</textarea><br />";
					echo "<input type='hidden' name='createtime' value='".$createtime."'/>";
					
					
				}
					echo "<input type='hidden' name='id' value='".$id."'/>";
					echo "<input type='submit'/>";	
			?>
			
		</form>
				
	</center>
 </div>
</section>
</body>
</html>
