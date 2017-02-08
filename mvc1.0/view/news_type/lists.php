<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<section>
      <h2><strong style="color:grey;">用户列表页</strong></h2>
      <div class="page_title">
       <h2 class="fl">用户详情</h2>
       <a class="fr top_rt_btn">右侧按钮</a>
      </div>
	  <!------------------查看新闻--------------------->
    
		
		<?php
		//新闻列表页
		//新闻详情列表页遍历出$k$v
			echo "<table class='table'>";
				foreach($result as $k=>$v){
					echo "<tr>";
					echo "<td>";
					$kong = " ";
					for($i=2;$i<=substr_count($v['pid'],',');$i++){
						$a="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↳";
						$kong.=$a;
					}
					$kong_1 = str_replace(array("↳&nbsp;"),"",$kong);
					echo $kong_1.$v['name'];
					echo "</td>";
					echo "<td><a href='?c=news_type&a=del&id=".$v['id']."&pid=".$v['pid']."'>删除</a><a href='?c=news_type&a=edit&id=".$v['id']."&pid=".$v['pid']."'>修改</a></td>";
					echo "</tr>";
					
					
					// var_dump($v['pid']);
				}
				
			echo "</table>";
		?>
   
     </section>
 </div>
</section>
</body>
</html>
