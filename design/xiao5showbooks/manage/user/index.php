<html>
	<head>
	    <meta charset = "utf-8"></meta>
		<title>Xiao 5 用户管理</title>
	</head>
	<body>
		<center>
			<?php  include("menu.php"); //导入导航栏  ?>
			<h3>用户信息管理<h3>
			<table border="1" width="990">
				<tr>
					<th>用户编号</th>
					<th>用户名称</th>
					<th>用户密码</th>
					<th>邮箱</th>
					<th>添加时间</th>
					<th>操作</th>
				</tr>
				<?php
				//从数据库中读取信息并输出到浏览器表格中
				//1.导入配置文件 
					require("dbconfig.php");
				//2. 连接数据库，并选择数据库
					$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
					mysql_select_db(DBNAME,$link);
				
				//3. 执行商品信息查询
					$sql = "select * from users";
					$result = mysql_query($sql,$link);
					
				//4. 解析商品信息（解析结果集）
					while($row = mysql_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['userid']}</td>";
						echo "<td>{$row['username']}</td>";
						echo "<td>{$row['password']}</td>";
						echo "<td>{$row['email']}</td>";
						echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
						echo "<td> 
								<a href='action.php?action=del&userid={$row['userid']}'>删除</a> 
								<a href='edit.php?userid={$row['userid']}'>修改</a>							
								</td>";
								echo "</tr>";
					}
				
				//5. 释放结果集，关闭数据库
		
				mysql_close($link);
				?>
			</table>
		
		</center>
	</body>
</html>