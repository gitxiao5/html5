<?php 
	session_start();//启动会话

?>
    <html>
	<head>
    <meta charset = "utf-8"></meta>
    <link rel = "stylesheet" type = "text/css" href = "css/style2.css"></link>
	<link rel = "stylesheet" type = "text/css" href = "css/menu.css"></link>
	<script src = "scripts/jquery.js"></script>
	<script src="scripts/jquery.cookie.js" type="text/javascript"></script>
	<script src = "scripts/header2.js"></script>
	<script src="scripts/changeSkin.js" type="text/javascript"></script>
  </head>
    
    <div id = "header">
    <div class = "contWidth">
	  <a href = "#nogo" class = "logo">
	    <img src = "images/5.gif" alt = "Wu jie Shopping"></img>
	  </a>
	  <span id = "TEL">客服热线：400-800-8888</span>
	  <img id = "menu1" src = "images/biaodan/1.jpg"></img>
	 </div>
	 </div>
	 <div id = "body">
	 <table border="1" width="990" id = "biao1">
	  <tr>
	    <th class = "th">商品名</th>
		<th class = "th">照片</th>
		<th class = "th">类型</th>
		<th class = "th">小五价</th>
		<th class = "th">数量</th>
		<th class = "th">价格</th>
		<th>操作</th>
	  </tr>
	  <?php
					$sum = 0;//定义总金额的变量
				 if(isset($_SESSION["shoplist"]))
					foreach($_SESSION["shoplist"] as $v){
						echo "<tr>";
						/*echo "<td>{$v['id']}</td>";*/
						echo "<td>{$v['name']}</td>";
						echo "<td><img src='./uploads/s_{$v['pic']}'/></td>";
						echo "<td>{$v['type']}</td>";
						echo "<td>{$v['nprice']}</td>";
						echo "<td align='center'>
								<button onclick='window.location.href=\"updateCart.php?id={$v['id']}&num=-1\"'>-</button>
								{$v['num']}
								<button onclick='window.location.href=\"updateCart.php?id={$v['id']}&num=1\"'>+</button>
								</td>";
						echo "<td>".($v["nprice"]*$v['num'])."</td>";
						echo "<td><a href='clearCart.php?id={$v['id']}'>删除</a></td>";
						echo "</tr>";
						$sum+=$v["nprice"]*$v['num']; //累计金额
					}
				?>
				<tr>
					<th>总计金额：</th>
					<th colspan="5" align="right"><?php echo $sum; ?></th>
					<td>&nbsp;</td>
				</tr>
	 </table>
	
	 <div id = "img"><img src = "images/biaodan/6.jpg"></img></div>
	 
	 <a href = "index.html"><img id = "img1" src = "images/biaodan/8.jpg"></img></a>
	 <a href = "userinfo.php"><img id = "img2" src = "images/biaodan/7.jpg"></img></a>
	 </div>
	 
	</html>