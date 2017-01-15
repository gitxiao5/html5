<html>
	<head>
	    <meta charset = "utf-8"></meta>
		<title>Xiao 5 用户管理</title>
		<script src = "scripts/jquery.js"></script>
		<script src = "scripts/confirm.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "css/style5.css"></link>
	</head>
	<body>
		<center>
			<?php  include("menu.php"); //导入导航栏  ?>
			<h3>Xiao 5 用户发布<h3>
			<form action="action.php?action=add" method="post">
			<table border="0" width="450">
				<tr>
					<td align="right">用户名：</td>
					<td><input type="text" name="username" class = "required" id = "username"/></td>
				</tr>
				<tr>
					<td align="right">密码：</td>
					<td><input type="text" name="password" class = "required" id = "password"/></td>
				</tr>
				<tr>
					<td align="right">邮箱：</td>
					<td><input type="email" name="email" class = "required" id = "email"/></td>
				</tr>
				        <td colspan="2" align="center">
						<input type="submit" value="添加"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
		</form>
	</center>
 </body>
</html>