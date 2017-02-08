
<!------------------添加详情分类--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		<form action="?c=product_info&a=addaction" method="post" enctype="multipart/form-data">
			<?php
			//商品详情列表页
			//商品详情列表页遍历出$k$v
				echo "<select name='id' id=''>";
				foreach($arr as $k=>$v){
						//下拉列表 因pid+id是子集的pid  所以新添加的子集可以这样输入
						
							echo "<option  value='".$v['id']."'>".$v['name']."</option>br";
				}
				echo "</select><br /><br />";
						//图片
						echo "选择图片：<input type='file' name='file' id='' /><br /><br />";
						//型号
						echo "型号：<input type='text' name='type'/><br /><br />";
						//简介
						echo "简介：<textarea name='details' id='' cols='30' rows='10'></textarea><br /><br />";
						//详情
						echo "详情：<textarea name='intro' id='' cols='30' rows='10'></textarea>";
			?>
			<br />
			<input type="submit"/>
		</form>
				
	</center>
 </div>
</section>
</body>
</html>
