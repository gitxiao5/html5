<html>
	<head>
		<title>Xiao 5 用户管理</title>
	</head>
	<body>
		<center>
			<?php  
				include("menu.php"); //导入导航栏  
				//1.导入配置文件 
					require("dbconfig.php");
				//2. 连接数据库，并选择数据库
					$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
					mysql_select_db(DBNAME,$link);
				
				//3. 获取要修改的用户信息
					$sql = "select * from users where userid={$_GET['userid']}";
					$result = mysql_query($sql,$link);
				
				//4. 判断是否获取到要编辑的用户信息
					if($result && mysql_num_rows($result)>0){
						$shop = mysql_fetch_assoc($result);//解析出要修改的用户信息 
					}else{
						die("没有找到要修改的用户信息");
					}
			
			
			
			?>
			<h3>编辑用户信息<h3>
			<form action="action.php?action=update" method="post">
				<input type="hidden" name="userid" value="<?php echo $shop['userid']; ?>"/>
			<table border="0" width="450">
				<tr>
					<td align="right">用户名：</td>
					<td><input type="text" name="username" value="<?php echo $shop['username']; ?>"/></td>
				</tr>
		        <tr>
					<td align="right">密码：</td>
					<td><input type="text" name="password" value="<?php echo $shop['password']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">邮箱：</td>
					<td><input type="email" name="email" value="<?php echo $shop['email']; ?>"/></td>
				</tr>
				     <td colspan="2" align="center">
						<input type="submit" value="修改"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>