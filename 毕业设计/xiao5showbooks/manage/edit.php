<html>
	<head>
		<title>商品信息管理</title>
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
				
				//3. 获取要修改的商品信息
					$sql = "select * from books where id={$_GET['id']}";
					$result = mysql_query($sql,$link);
				
				//4. 判断是否获取到要编辑的商品信息
					if($result && mysql_num_rows($result)>0){
						$shop = mysql_fetch_assoc($result);//解析出要修改的商品信息 
					}else{
						die("没有找到要修改的商品信息");
					}
			
			
			
			?>
			<h3>编辑商品信息<h3>
			<form action="action.php?action=update" enctype="multipart/form-data" method="post">
				<input type="hidden" name="id" value="<?php echo $shop['id']; ?>"/>
				<input type="hidden" name="oldpic" value="<?php echo $shop['pic']; ?>"/>
			<table border="0" width="300">
				<tr>
					<td align="right">名称：</td>
					<td><input type="text" name="name" value="<?php echo $shop['name']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">类型：</td>
					<td>
						<select name="type">
						<?php 
							include("dbconfig.php");
							foreach($typelist as $k=>$v){
								$sd = ($shop['typeid']==$k)?"selected":"";//是否是当前的类型
								echo "<option value='{$k}' {$sd}>{$v}</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">进价：</td>
					<td><input type="text" name="oprice" value="<?php echo $shop['oprice']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">售价：</td>
					<td><input type="text" name="nprice" value="<?php echo $shop['nprice']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">库存：</td>
					<td><input type="text" name="total"  value="<?php echo $shop['total']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">图片：</td>
					<td><input type="file" name="pic"/></td>
				</tr>
				
				<tr>
					<td align="right" valign="top">描述：</td>
					<td><textarea rows="5" cols="20" name="note"><?php echo $shop['note']; ?></textarea></td>
				</tr>
				<tr>
					<td align="right">作者：</td>
					<td><input type="text" name="author"  value="<?php echo $shop['author']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">出版社：</td>
					<td><input type="text" name="pub"   value="<?php echo $shop['pub']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">出版时间：</td>
					<td><input type="text" name="pubtime" value="<?php echo $shop['pubtime']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">开本：</td>
					<td><input type="text" name="kb" value="<?php echo $shop['kb']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">页数：</td>
					<td><input type="text" name="ys" value="<?php echo $shop['ys']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">印刷时间：</td>
					<td><input type="text" name="printtime" value="<?php echo $shop['printtime']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">字数：</td>
					<td><input type="text" name="words" value="<?php echo $shop['words']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">装帧：</td>
					<td><input type="text" name="zz" value="<?php echo $shop['zz']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">语言：</td>
					<td><input type="text" name="language" value="<?php echo $shop['language']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">版次：</td>
					<td><input type="text" name="pubtimes" value="<?php echo $shop['pubtimes']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">印次：</td>
					<td><input type="text" name="printtimes" value="<?php echo $shop['printtimes']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">商品码号：</td>
					<td><input type="text" name="ISBN" value="<?php echo $shop['ISBN']; ?>"/></td>
				</tr>
				<tr>
					
					<td colspan="2" align="center">
						<input type="submit" value="修改"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" value="重置"/>
					</td>
				</tr>
				<tr>
					<td align="right" valign="top">&nbsp;</td>
					<td><img src="./uploads/<?php echo $shop['pic']; ?>"/></td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>