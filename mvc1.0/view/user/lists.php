

<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
	<section>
      <h2><strong style="color:grey;">用户列表页</strong></h2>
      <div class="page_title">
       <h2 class="fl">用户详情</h2>
       <a href="?c=user&a=delall" class="fr top_rt_btn">清空所有</a>
      </div>
	  <!------------------查看用户--------------------->
  
		<?php
		//用户列表页
		//用户详情列表页遍历出$k$v
		if(!empty($result)){
				
					echo "<strong style='color:red;'>".$tishi."</strong>";
						
			  echo"  <table class='table'>
						<tr>
							<th>帐号</th>
							<th>密码</th>
							<th>姓名</th>
							<th>昵称</th>
							<th>性别</th>
							<th>家庭住址</th>
							<th>邮政编码</th>
							<th>手机或邮箱</th>
							<th>操作</th>
						</tr>";
						
			foreach($result as $k=>$v){
						echo "<tr>";
						echo "<td style='width:265px;'><div class='cut_title ellipsis'>".$v['name']."</div></td>";
						echo "<td>".$v["pass"]."</td>";
						echo "<td>".$v["xing"].$v["ming"]."</td>";
						echo "<td>".$v["nicheng"]."</td>";
						echo "<td>".$v["sex"]."</td>";
						echo "<td>".$v["sheng"].$v["shi"].$v["qv"].$v["xiangxi"]."</td>";
						echo "<td>".$v["postcode"]."</td>";
						echo "<td>".$v["rest"].":".$v["phone"].$v["mail"]."</td>";
						echo "<td><a href='?c=user&a=del&id=".$v['id']."'>delete</a><a href='?c=user&a=edit&id=".$v['id']."'>update</a></td>";
						echo "</tr>";
				}
			}else{
				echo "列表为空 请填写数据
					<a href='?c=user&a=add'>填写用户信息</a>";
			}			
					 echo "</table>";
					 echo "<aside class='paging'>";
					echo "<a><a href='?c=user&a=lists&page=1'>第一页</a></a>";
					  for($i=1;$i<=$ye;$i++){
						  echo "<a><a href='?c=user&a=lists&page=".$i."'>".$i."</a></a>";
						  
					  }
					   echo "<a><a href='?c=user&a=lists&page=$ye'>最后一页</a></a>";
				echo "</aside>";
		
			
		?>
   
 </div>
</section>
</body>
</html>
