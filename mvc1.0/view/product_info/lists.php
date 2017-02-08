

<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<section>
      <h2><strong style="color:grey;">商品详情页</strong></h2>
      <div class="page_title">
       <h2 class="fl">商品详情</h2>
       <a class="fr top_rt_btn">右侧按钮</a>
      </div>
	  <!------------------查看商品详情-------------------->
		<table class='table'>
		<tr>
			
			<td>id</td>
			<td style="width:10">imagename</td>
			<td>type</td>
			<td style="width:500px">intro</td>
			<td>details</td>
			<td>createtime</td>
			<td style="width:100px"> ——操作—— </td>
		</tr>
		<?php
		//新闻列表页
		//新闻详情列表页遍历出$k$v
					
					foreach($result as $k=>$v){
						
						echo "<tr>";
						echo "<td>".$v['id']."</td>";
						echo "<td>".$lujin.$v['imagename']."</td>";
						echo "<td>".$v['type']."</td>";
						echo "<td>".$v['intro']."</td>";
						echo "<td>".$v['details']."</td>";
						echo "<td>".$v['createtime']."</td>";
						echo "<td><a href='?c=product_info&a=del&id=".$v['id']."&pid=".$v['pid']."'>删除</a><a href='?c=product_info&a=edit&id=".$v['id']."&pid=".$v['pid']."'>修改</a></td>";
						echo "</tr>";
					
					
					// var_dump($v['pid']);
				}
				
			echo "</table>";
				echo "<aside class='paging'>";
					echo "<a><a href='?c=product_info&a=lists&page=1'>第一页</a></a>";
					  for($i=1;$i<=$ye;$i++){
						  echo "<a><a href='?c=product_info&a=lists&page=".$i."'>".$i."</a></a>";
						  
					  }
					   echo "<a><a href='?c=product_info&a=lists&page=$ye'>最后一页</a></a>";
				echo "</aside>";
		?>
   
     </section>
 </div>
</section>
</body>
</html>
