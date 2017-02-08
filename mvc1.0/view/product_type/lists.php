<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<section>
      <h2><strong style="color:grey;">中国省市下拉列表页</strong></h2>
    
		
		<?php
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
					echo "<td><a href='?c=product_type&a=del&id=".$v['id']."&pid=".$v['pid']."'>删除</a><a href='?c=product_type&a=edit&id=".$v['id']."&pid=".$v['pid']."'>修改</a></td>";
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
