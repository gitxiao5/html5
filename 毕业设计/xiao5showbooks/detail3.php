<?php
    $link = @mysql_connect("localhost","root","wujie") or die("链接失败！");
	
    mysql_select_db("xiao5showbooks",$link) or die("数据库链接失败");
    $sql = "select * from books where id ={$_GET['id']}";
	$shop = mysql_query($sql,$link);
	$row = mysql_fetch_assoc($shop);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Xiao 5 showbooks</title>
	<script src = "scripts/jquery.js" type="text/javascript"></script>
	<script src = "scripts/jquery.cookie.js"></script>
	<script src = "scripts/changeSkin.js"></script>
	 <script src = "scripts/header2.js" type="text/javascript"></script>
	<script src = "scripts/jquery.jqzoom.js" type="text/javascript"></script>
	<script src = "scripts/use_jqzoom.js" type="text/javascript"></script>
	<script src = "scripts/jquery.thickbox.js" type="text/javascript"></script>
	<script src="scripts/switchImg.js" type="text/javascript"></script>
	<script src="scripts/switchColor.js" type="text/javascript"></script>
<!-- Tab标签 -->
<script src="scripts/tab.js" type="text/javascript"></script>
<!-- 产品尺寸和价格计算 -->
<script src="scripts/sizeAndprice.js" type="text/javascript"></script>
<!-- 星级评分 -->
<script src="scripts/star.js" type="text/javascript"></script>
<!-- 内容提交 -->
<script src="scripts/jquery.simplemodal.js" type="text/javascript"></script>
    <link rel="stylesheet" href="styles/reset.css" type="text/css" />
	<link rel = "stylesheet" type = "text/css" href = "css/style4.css"></link>
    <link rel="stylesheet" href="css/thickbox.css" type="text/css" />
	<link rel="stylesheet" href='css/box.css' type='text/css' />
    <link rel = "stylesheet" type = "text/css" href = "css/skin/skin_0.css" id = "cssfile"></link>
  </head>
  <body>
    <div id = "header">
    <div class = "contWidth">
	  <a href = "#nogo" class = "logo">
	    <img src = "images/5.gif" alt = "Wu jie Shopping"></img>
	  </a>
	  <div class = "search">
	    <input type = "text" id = "inputSearch" class = "" value = "请输入商品名称"></input>
		<input type = "button" value = "搜索" id = "orderSearch"></input>
	  </div>
	  <div id = "login">
		 <a href = "dologin.php">【登陆】</a>|
	     <a href = "reg.php">【注册】</a>|
	     <a href = "#">我的购物车</a>
		</div>
	  <ul id = "skin">
	    <li id = "skin_0" title = "蓝色" class = "selected">蓝色</li>
		<li id = "skin_1" title = "紫色">紫色</li>
		<li id = "skin_2" title = "红色">红色</li>
		<li id = "skin_3" title = "天蓝色">天蓝色</li>
		<li id = "skin_4" title = "橙色">橙色</li>
		<li id = "skin_5" title = "淡绿色">淡绿色</li>
	  </ul>
	  <div class = "mainNav" id = "nav">
	    <ul class = "nav">
		  <li><a href = "index.html">首 页</a></li>
		  <li><a href = "index2.php">文学部落</a>
		    <div class = "jnNav" style = "opacity:0.9;">
			  <div class = "subitem">
			    <dl class = "fore">
				  <dt>
				    <a href = "#nogo">文学明星：</a>
				  </dt>
				  <dd>
				    <em><a href = "#nogo">再美也美不过想象</a></em>
					<em><a href = "#nogo">陪你说一世晚安</a></em>
					<em><a href = "#nogo">穿越人海拥抱你</a></em>
					<em><a href = "#nogo">光阴似箭待你如初</a></em>
					<em><a href = "#nogo">鸟人</a></em>
					<em><a href = "#nogo">就在伦敦</a></em>
					<em><a href = "#nogo">其实你很好你自己却不知道</a></em>
					<em><a href = "#nogo">狼图腾</a></em>
					<em class = "noborder"><a href = "#nogo">再美也美不过想象</a></em>
				  </dd>
				  
				</dl>
			</div>
		</div>
				</li>
				<li><a href="index3.php">社科部落</a>
					<div class="jnNav" style = "opacity:0.9;">
						<div class="subitem">
							<dl class="fore">
								<dt>
									<a href="#nogo">社科达人：</a>
								</dt>
								<dd>
									<em ><a href="#nogo">叫魂</a></em>
									<em ><a href="#nogo">知行合一王阳明</a></em>
									<em ><a href="#nogo">耶路撒冷三千年</a></em>
									<em ><a href="#nogo">中国通史</a></em>
									<em ><a href="#nogo">世界文明史</a></em>
									<em ><a href="#nogo">西藏生死书</a></em>
									<em ><a href="#nogo">社会心理学</a></em>
									<em ><a href="#nogo">被讨厌的勇气</a></em>
									<em ><a href="#nogo">自控力</a></em>
									<em ><a href="#nogo">一切都是最好的安排</a></em>
									<em class="noborder"><a href="#nogo">叫魂</a></em>
								</dd>
							</dl>
						</div>
					</div>
				</li>
				<li><a href="#">经管部落</a>
					<div class="jnNav" style = "opacity:0.9;">
						<div class="subitem">
							<dl class="fore">
								<dt>
									<a href="#nogo">经管鲜肉：</a>
								</dt>
								<dd>
									<em ><a href="#nogo">耐克</a></em>
									<em ><a href="#nogo">阿迪达斯</a></em>
									<em ><a href="#nogo">达芙妮</a></em>
									<em ><a href="#nogo">李宁</a></em>
									<em ><a href="#nogo">安踏</a></em>
									<em ><a href="#nogo">奥康</a></em>
									<em ><a href="#nogo">骆驼</a></em>
									<em ><a href="#nogo">特步</a></em>
									<em ><a href="#nogo">耐克</a></em>
									<em ><a href="#nogo">阿迪达斯</a></em>
									<em ><a href="#nogo">达芙妮</a></em>
									<em ><a href="#nogo">李宁</a></em>
									<em class="noborder"><a href="#nogo">特步</a></em>
								</dd>
							</dl>
						</div>
					</div>
				 </li>
				 <li><a href="#">生活部落</a></li>
				 <li><a href="#">文教部落</a></li>
			</ul>
	  </div>
	</div>
  </div>
	<div id = "content">
	  <div class = "janeshop">
	    <div id = "jnCatalog">
		  <h2 title = "商品分类">商品分类</h2>
		  <div class = "jnCatainfo">
		    <h3>文学部落</h3>
			<ul>
			  <li><a href = "#nogo">再美也美不过想象</a></li>
			  <li><a href = "#nogo">陪你说一世晚安</a></li>
			  <li><a href = "#nogo">穿越人海拥抱你</a></li>
			  <li><a href = "#nogo">光阴似箭待你如初</a></li>
			  <li><a href = "detail3.php?id=19" class = "promoted" >鸟人</a></li>
			  <li><a href = "#nogo">就在伦敦</a></li>
			  <li><a href = "detail3.php?id=22" class = "promoted">其实你很好你自己却不知道</a></li>
			  <li><a href = "#nogo">狼图腾</a></li>
			</ul>
			<br class = "clear"/>
			<h3>社科部落</h3>
			<ul>
			   <li><a href = "detail3.php?id=26" class = "promoted">叫魂</a></li>
			   <li><a href = "#nogo">知行合一王阳明</a></li>
			   <li><a href = "#nogo">耶路撒冷三千年</a></li>
			   <li><a href = "#nogo">中国通史</a></li>
			   <li><a href = "#nogo">世界文明史</a></li>
			   <li><a href = "#nogo">西藏生死书</a></li>
			   <li><a href = "#nogo">社会心理学</a></li>
			   <li><a href = "detail3.php?id=37" class = "promoted">被讨厌的勇气</a></li>
			</ul>
			<br class = "clear"/>
			<h3>经管部落</h3>
			  <ul>
			     <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
			     <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
			     <li><a href = "#nogo">尚未开张</a></li>
			     <li><a href = "#nogo">尚未开张</a></li>
			     <li><a href = "#nogo">尚未开张</a></li>
			     <li><a href = "#nogo">尚未开张</a></li>
			  </ul>
			  <br class = "clear"/>
			  <h3>生活部落</h3>
			  <ul>
			     <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
			  </ul>
			  <br class = "clear"/>
			  <h3>文教部落</h3>
			  <ul>
			     <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
				 <li><a href = "#nogo">尚未开张</a></li>
			  </ul>
			  <br class = "clear"/>
		  </div>
		</div>
		<div id="jnProitem">
		    <div class="jqzoomWrap">
			   <a href="images/mypro_img/<?php echo "{$row['id']}"?>big.jpg" class = "jqzoom" rel='gal1' title="" >
			       <img src = "images/mypro_img/<?php echo "{$row['id']}"?>.jpg" title = "" alt = "免烫高支棉条纹衬衣" id = "bigImg" />
			   </a>
			</div>
			<span>
			  <a title = "介绍文字" id = "thickImg" href = "images/mypro_img/<?php echo "{$row['id']}"?>big.jpg" class = "thickbox">
			    <img src = "images/look.gif" alt = "点击看大图" />
			  </a>
			</span>
		</div>
      <div id="jnDetails">
			<div class="jnProDetail">
				<h4 name = "name" id = "name"><?php echo "{$row['name']}"?></h4>
				<ul class="jnProDetailList">
					<li name = "note"> <?php echo "{$row['note']}"?>
   					</li>
					<li>
						<span>价&#12288;&#12288;格：</span>
   						<strong class="del" name = "oprice"><?php echo "{$row['oprice']}"?></strong>元
   					</li>
					<li class="tbDetailPrice">
						<span name = "nprice">促&#12288;&#12288;销：</span>
   						<strong><?php echo "{$row['nprice']}"?></strong>元
   					</li>
					<li class="color_change">
						<span name = "total">库&#12288;&#12288;存：</span>
   						<strong><?php echo "{$row['total']}"?></strong>
						
   					</li>
					<li class="pro_size">
						<span name = "author">作&#12288;&#12288;者：</span>
   						<strong><?php echo "{$row['author']}"?></strong>
   					</li>
					<li >
						<span>数&#12288;&#12288;量：</span>
						<div class="pro_num">
							<select id="num_sort">
								<option value="1" name = "num" select = "selected">1</option>
								<option value="2" name = "num">2</option>
								<option value="3" name = "num">3</option>
								<option value="4" name = "num">4</option>
								<option value="5" name = "num">5</option>
							</select>
						</div>
   					</li>
				</ul>
				<div class="pro_rating">
					给商品评分：
					<ul class="rating nostar">
						<li class="one"><a title="1分" href="#" name = "evaluate">1</a></li>
						<li class="two"><a title="2分" href="#" name = "evaluate">2</a></li>
						<li class="three"><a title="3分" href="#" name = "evaluate">3</a></li>
						<li class="four"><a title="4分" href="#" name = "evaluate">4</a></li>
						<li class="five"><a title="5分" href="#" name = "evaluate">5</a></li>
					</ul>
				</div>
				<div id="cart">
					<a href = "addCart.php?id=<?php echo "{$row['id']}"; ?>"><img src="images/btn_cart.png" alt="放入购物车" /></a>
				</div>
			</div>
		</div>
		<div id="tabs">
				<div class="tab_menu">
					<ul>
						<li class="selected">商品介绍</li>
						<li>商品评论</li>
						<li>商品咨询</li>
					</ul>
				</div>
				<div class="tab_box">
					<div class = "tab_content">
                       <ul>
					      <li>作者：<?php echo "{$row['author']}"?></li>
						  <li>出版社：<?php echo "{$row['pub']}"?></li>
						  <li>出版时间：<?php echo "{$row['pubtime']}"?></li>
						  <li>开本：<?php echo "{$row['kb']}"?></li>
						  <li>页数：<?php echo "{$row['ys']}"?></li>
						  <li>印刷时间：<?php echo "{$row['printtime']}"?></li>
						  <li>字数：<?php echo "{$row['words']}"?></li>
						  <li>装帧：<?php echo "{$row['zz']}"?></li>
						  <li>语种：<?php echo "{$row['language']}"?></li>
						  <li>版次：<?php echo "{$row['pubtimes']}"?></li>
						  <li>印次：<?php echo "{$row['printtimes']}"?></li>
						  <li>ISBN：<?php echo "{$row['ISBN']}"?></li>
					   </ul>					
					</div>
					<div class="hide">
					尚未开启
	                </div>
					<div class="hide">
					尚未开启
					</div>
				</div>
			</div>
		<!-- 商品列表 end -->
	</div>
</div>
<!--主体结束-->
<div id="footer">Copyright &copy; 2016 - 2017 Xiao 5 showbooks. </div>

  </body>
</html>