<html>
	<head>
	    <meta charset = "utf-8"></meta>
		<title>商品信息管理</title>
	</head>
	<body>
		<center>
			<?php  include('menu.php');?>
			<h3>发布商品信息<h3>
			<form action="action.php?action=add" enctype="multipart/form-data" method="post">
			<table border="0" width="300">
				<tr>
					<td align="right">名称：</td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td align="right">类型：</td>
					<td>
						<select name="type">
						<?php 
							include("dbconfig.php");
							foreach($typelist as $k=>$v){
								echo "<option value='{$k}'>{$v}</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">进价：</td>
					<td><input type="text" name="oprice"/></td>
				</tr>
				<tr>
					<td align="right">售价：</td>
					<td><input type="text" name="nprice"/></td>
				</tr>
				<tr>
					<td align="right">库存：</td>
					<td><input type="text" name="total"/></td>
				</tr>
				<tr>
					<td align="right">图片：</td>
					<td><input type="file" name="pic"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">描述：</td>
					<td><textarea rows="5" cols="20" name="note"></textarea></td>
				</tr>
				<tr>
					<td align="right">作者：</td>
					<td><input type="text" name="author"/></td>
				</tr>
				<tr>
					<td align="right">出版社：</td>
					<td><input type="text" name="pub"/></td>
				</tr>
				<tr>
					<td align="right">出版时间：</td>
					<td><input type="text" name="pubtime"/></td>
				</tr>
				<tr>
					<td align="right">开本：</td>
					<td><input type="text" name="kb"/></td>
				</tr>
				<tr>
					<td align="right">页数：</td>
					<td><input type="text" name="ys"/></td>
				</tr>
				<tr>
					<td align="right">印刷时间：</td>
					<td><input type="text" name="printtime"/></td>
				</tr>
				<tr>
					<td align="right">字数：</td>
					<td><input type="text" name="words"/></td>
				</tr>
				<tr>
					<td align="right">装帧：</td>
					<td><input type="text" name="zz"/></td>
				</tr>
				<tr>
					<td align="right">语言：</td>
					<td><input type="text" name="language"/></td>
				</tr>
				<tr>
					<td align="right">版次：</td>
					<td><input type="text" name="pubtimes"/></td>
				</tr>
				<tr>
					<td align="right">印次：</td>
					<td><input type="text" name="printtimes"/></td>
				</tr>
				<tr>
					<td align="right">商品码号：</td>
					<td><input type="text" name="ISBN"/></td>
				</tr>
				<tr>
					
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