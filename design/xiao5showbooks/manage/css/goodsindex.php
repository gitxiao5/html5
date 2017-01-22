<html>
	<head>
	    <meta charset = "utf-8"></meta>
		<title>商品信息管理</title>
	</head>
	<body>
		<center>
			<?php  include("menu.php"); //导入导航栏  ?>
			<h3>浏览商品信息<h3>
			<table border="1" width="700">
				<tr>
					<th>商品编号</th>
					<th>商品名称</th>
					<th>商品图片</th>
					<th>进价</th>
					<th>售价</th>
					<th>库存量</th>
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
					$sql = "select * from books";
					$result = mysql_query($sql,$link);
					
				//4. 解析商品信息（解析结果集）
					while($row = mysql_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td><img src='./uploads/s_{$row['pic']}'/></td>";
						echo "<td>{$row['oprice']}</td>";
						echo "<td>{$row['nprice']}</td>";
						echo "<td>{$row['total']}</td>";
						echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
						echo "<td> 
								<a href='action.php?action=del&id={$row['id']}&picname={$row['pic']}'>删除</a> 
								<a href='edit.php?id={$row['id']}'>修改</a>
								<a href='addCart.php?id={$row['id']}'>放入购物车</a>
								</td>";
								
						echo "</tr>";
					}
				
				//5. 释放结果集，关闭数据库
		
				
				?>
			</table>
		
		</center>
	</body>
</html>