<html>
	<head>
	    <meta charset = "utf-8"></meta>
		<title>Xiao 5 管理员登陆</title>
		<script src = "scripts/jquery.js"></script>
		<script src = "scripts/confirm.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "css/style5.css"></link>
	</head>
	<body>
		<center>
			<?php  include("managemenu.php"); //导入导航栏  ?>
			<!--<h3>Xiao 5 管理员登陆<h3>-->
			<form action="manageyz.php" method="post">
			<table border="0" width="600">
				<tr>
					<td align="right">用户名：</td>
					<td><input type="text" name="username" class = "required" id = "username"/></td>
				</tr>
				<tr>
					<td align="right">密码：</td>
					<td><input type="password" name="password" class = "required" id = "password"/></td>
				</tr>
				<tr>
					
				     <td colspan="2" align="center">
						<input type="submit"  id = "send" value="登陆"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" id = "res" value="重置"/>
					</td>
				</tr>
			</table>
			<p><?php if($_GET['action']==2) echo "您输入的密码或用户名有误！";?></p>
		</form>
	</center>
 </body>
</html>