<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<section>
      <h2><strong style="color:grey;">新闻详情页</strong></h2>
      <div class="page_title">
       <h2 class="fl">新闻详情</h2>	
	   <form action="?c=news_info&a=soso" method="post">
			<input type="text" name="soso" style="margin-left:1100px; cursor: auto;" class="top_rt_btn"/>
			<input type="submit" class="top_rt_btn"/>
	   </form>
      </div>
	  <!------------------新闻分类列表页--------------------->
		<table class='table'>
		<tr>
			
			<td>id</td>
			<td>pid</td>
			<td>title</td>
			<td>content</td>
			<td>author</td>
			<td>createtime</td>
			<td>操作</td>
			<td>返回新闻标题</td>
		</tr>
		<?php
		//新闻列表页
		//新闻详情列表页遍历出$k$v
			
					foreach($result as $k=>$v){
						echo "<tr>";
						echo "<td>".$v['id']."</td>";
						echo "<td>".$v['pid']."</td>";
						echo "<td>".$v['title']."</td>";
						echo "<td>".$v['content']."</td>";
						echo "<td>".$v['author']."</td>";
						echo "<td>".$v['createtime']."</td>";
						echo "<td><a href='?c=news_info&a=del&id=".$v['id']."&pid=".$v['pid']."'>删除</a><a href='?c=news_info&a=edit&id=".$v['id']."&pid=".$v['pid']."'>修改</a></td>";
						echo "<td><a href='?c=news_info&a=lists'>返回新闻标题</a></td>";
						echo "</tr>";
						
						
						// var_dump($v['pid']);
					}
				echo "<span style='color:red'>$weichaxundao</span>";
			echo "</table>";
				echo "<aside class='paging'>";
					echo "<a><a href='?c=news_info&a=lists&page=1'>第一页</a></a>";
					  for($i=1;$i<=$ye;$i++){
						  echo "<a><a href='?c=news_info&a=lists&page=".$i."'>".$i."</a></a>";
						  
					  }
					   echo "<a><a href='?c=news_info&a=lists&page=$ye'>最后一页</a></a>";
				echo "</aside>";
		?>
   
     </section>
 </div>
</section>
</body>
</html>
