
<!------------------添加商品详情分类--------------------->
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<center>
		<form action="?c=product_info&a=editaction" method="post" enctype="multipart/form-data">
			<?php
			// var_dump($shujv);
			//商品详情修改列表页  
				foreach($shujv as $k=>$v){
					//简介
					echo "简介： <textarea name='details' id='' cols='30' rows='10'>".$v['details']."</textarea><br/>";
					//型号
					echo "型号：<input type='text' name='type' value='".$v['type']."'/><br/>";
					//详情
					echo "详情： <textarea name='intro' id='' cols='30' rows='10'>".$v['intro']."</textarea><br/>";
					//图片
					echo "选择图片： <input type='file' name='file'/><br/><br />";
					echo "<span>".$v['imagename']."</span><br />";
					
					echo "<input type='hidden' name='createtime' value='".$createtime."'/><br />";
					echo "<input type='hidden' name='id' value='".$id."'/>";
					echo "<input type='submit'/>";
				}
						
			?>
			
		</form>
				
	</center>
 </div>
</section>
</body>
</html>
