<?php 
	session_start();//启动会话

?>
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
	  <img id = "menu1" src = "images/biaodan/2.jpg"></img>
	 </div>
	 </div>
	 <div id = "body2">
	   <form>
	     <div id = "tips">
		  请认真书写，然后提交订单！
		 </div>
		 <div id = "address">
		    <span class = "menu2-tips">收货信息</span>
			<div id = "address-1">
			   <ul>
			     <li><span>收货人:</span><input type = "text" name = "getter"></input></li>
				 <li><span>地区:</span>
				     <input type = "text" name = "homeland" value= "国家"></input>
				     <input type = "text" name = "province" value= "省份"></input>
					 <input type = "text" name = "city" value= "城市"></input>
					 <input type = "text" name = "area" value= "区县"></input>
				     <input type = "text" name = "stowns" value= "乡镇"></input>
				 </li>
				 <li>
				 <span>街道地址:</span><input type = "text" name = "gdetail"></input>
				 </li>
				 <li>
				 <span>邮编:</span><input type = "text" name = "yb"></input>
				 </li>
				 <li>
				 <span>联系方式:</span><input type = "text" name = "tel"></input>
				 </li>
				 <li>
				 <span>Email:</span><input type = "email" name = "email"></input>
				 </li>
			   </ul>			
			</div>
		 </div>
		 <div id = "send">
		  <span class = "menu2-tips">发货方式</span>
		    <div id = "send-1">
			  <div id = "send-2">发货方式:</div>
			  <label><input name="send" type="radio" value="" />快递(不支持货到付款)</label>
              <label><input name="send" type="radio" value="" />EMS(不支持货到付款)</label>
			</div>
		 </div>
		 <div id = "pay">
		   <span class = "menu2-tips">付款方式</span>
		   <div id = "pay-1">
		      <label><input name="send" type="checkbox" value="" />支付宝</label>
		   </div>
		 </div>
		 <div id = "bill">
		    <span class = "menu2-tips">商品清单</span>
			<div>
			  <div id = "bill-1">
			     <span>发货商:小五图书网</span>
				 <table width = "700px">
				   <tr>
				     <th>商品名称</th>
					 <th>商品图片</th>
					 <th>现价</th>
					 <th>数量</th>
					 <th>小计</th>
				   </tr>
				    <?php
					$sum = 0;//定义总金额的变量
				 if(isset($_SESSION["shoplist"]))
					foreach($_SESSION["shoplist"] as $v){
						echo "<tr>";
						/*echo "<td>{$v['id']}</td>";*/
						echo "<td>{$v['name']}</td>";
						echo "<td><img src='./uploads/s_{$v['pic']}'/></td>";
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
					<th colspan="3" align="right"><?php echo $sum; ?></th>
					<td>&nbsp;</td>
				</tr>
				 </table>
				 <div>
				 <span>您共需要支付：</span> 
				 </div>
				 <img id = "bill-img" src = "images/biaodan/7.jpg"></img>
			  </div>
			</div>
		 </div>
	   </form>
	 </div>