
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
			<td>name</td>
			<td>content</td>
			<td>createtime</td>
			<td>操作</td>
			<td>返回留言列表</td>
		</tr>
		<?php
		//新闻列表页
		//新闻详情列表页遍历出$k$v
					
					foreach($result as $k=>$v){
					echo "<tr>";
					echo "<td>".$v['id']."</td>";
					echo "<td>".$v['name']."</td>";
					echo "<td>".$v['content']."</td>";
					echo "<td>".$v['createtime']."</td>";
					echo "<td><a href='?c=liuyanban&a=del&id=".$v['id']."'>删除</a><a href='?c=liuyanban&a=edit&id=".$v['id']."'>修改</a></td>";
					echo "<td><a href='?c=liuyanban&a=lists'>返回留言</a></td>";
					echo "</tr>";
					
					
					// var_dump($v['pid']);
				}
				
			echo "</table>";
			 echo "<aside class='paging'>";
					echo "<a><a href='?c=liuyanban&a=lists&page=1'>第一页</a></a>";
					  for($i=1;$i<=$ye;$i++){
						  echo "<a><a href='?c=liuyanban&a=lists&page=".$i."'>".$i."</a></a>";
						  
					  }
					   echo "<a><a href='?c=liuyanban&a=lists&page=$ye'>最后一页</a></a>";
				echo "</aside>";
		
		?>
   
     </section>
 </div>
</section>
</body>
</html>
