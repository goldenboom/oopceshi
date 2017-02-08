

<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<section>
      <h2><strong style="color:grey;">用户列表页</strong></h2>
      <div class="page_title">
       <h2 class="fl">用户详情</h2>
       <a href="?c=user&a=delall" class="fr top_rt_btn">清空所有</a>
      </div>
	  <!------------------查看nav--------------------->
				<table class='table'>
					
				<?php
						
			foreach($result as $k=>$v){
				
					echo "<tr>";
					echo "<td><a href='".$v['url']."'>".$v['name']."</a></td>";
					echo "<td><a href='?c=friend&a=del&id=".$v['id']."'>删除</a><a href='?c=friend&a=edit&id=".$v['id']."'>修改</a></td>";
					echo "</tr>";
						
					
			}
			?>	
				</table>
				<?php
				 echo "<aside class='paging'>";
					echo "<a><a href='?c=friend&a=lists&page=1'>第一页</a></a>";
					  for($i=1;$i<=$ye;$i++){
						  echo "<a><a href='?c=friend&a=lists&page=".$i."'>".$i."</a></a>";
						  
					  }
					   echo "<a><a href='?c=friend&a=lists&page=$ye'>最后一页</a></a>";
				echo "</aside>";
		
					?>
 </div>
</section>
</body>
</html>
