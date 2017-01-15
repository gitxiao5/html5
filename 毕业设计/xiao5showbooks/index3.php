<?php


?>

<html>
  <head>
    <meta charset = "utf-8"></meta>
	<title>Xiao 5 showbooks</title>
    
	<link rel = "stylesheet" type = "text/css" href = "css/style3.css"></link>
	<link rel = "stylesheet" type = "text/css" href = "css/skin/skin_0.css" id = "cssfile"></link>
	<script src = "scripts/jquery.js"></script>
	<script src="scripts/jquery.cookie.js" type="text/javascript"></script>
	<script src = "scripts/header2.js"></script>
	<script src = "scripts/showPic.js"></script>
	<script src="scripts/changeSkin.js" type="text/javascript"></script>
	 <script src = "scripts/zoomImgRollover.js"></script>
	<script type="text/javascript">  
$(document).ready(function() {  
    $(".changeimg").zoomImgRollover();//这里是调用函数  
}); 
</script>
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
				<li><a href="#">社科部落</a>
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
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em ><a href="#nogo">尚未开业</a></em>
									<em class="noborder"><a href="#nogo">尚未开业</a></em>
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
    <div class = "jnhere"><p><span>首	页</span>&gt;&gt;社科部落</p></div>
    <div id = "jnswap">
	   <div id = "jnswap-ad"><img id="placeholder" src = "images/sk/sk-ad1.jpg" alt = "sheke"></img></a></div>
	   <div class = "jnswap-bd">
	      <a href = "images/sk/sk-ad2.jpg" onmouseover="showPic(this);return false;"><img src = "images/sk/sk-ad2s.jpg"></img></a>
	      <a href = "images/sk/sk-ad3.jpg" onmouseover="showPic(this);return false;"><img src = "images/sk/sk-ad3s.jpg"></img></a>
	      <a href = "images/sk/sk-ad4.jpg" onmouseover="showPic(this);return false;"><img src = "images/sk/sk-ad4s.jpg"></img></a>
	   </div>
	</div>
	<div class = "jnhere"><p><span>首	页</span>&gt;&gt;社科部落&gt;&gt;★历史文化</p></div>
    <div id = "wx-qc">
	   <div class = "wx-qc-left">
	      <div class = "left">
		    <div class = "img">
			   <a href = "detail3.php?id=26" target = "_blank"><img class = "changeimg" src = "images/sk/ls1.jpg"></img></a>
			</div>
			<div class = "name">
			   <a href = "detail3.php?id=26" target = "_blank">叫魂:1768年中国妖术大恐慌</a>
			</div>
			<div class = "info">
			  本书讲述的是一个关于“盛世妖术”的故事。在中国的千年帝制时代，乾隆皇帝可谓是少见绝后的一人。他建立并巩固起来的大清帝国达到了权力与威望的*端。
			</div>
			<div class = "price">
			    <span class = "price-n">￥26.60</span>
				<span class = "price-o">￥38.00</span>
				<a href = "detail3.php?id=26"><div class = active-s>立即购买</div></a>
			</div>
		  </div>
	   </div>
	   <div class = "wx-qc-right">
	      <div id = "right">
		     <ul>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=27"><img class = "changeimg" src = "images/sk/ls2.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=27" target = "_blank">知行合一王阳明:1472-1529</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥24.80</span>
					   <span class = "price-o">￥36.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=28"><img class = "changeimg" src = "images/sk/ls3.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=28" target = "_blank">耶路撒冷三千年</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥50.70</span>
					   <span class = "price-o">￥78.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=29"><img class = "changeimg" src = "images/sk/ls4.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=29" target = "_blank">中国通史</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥25.90</span>
					   <span class = "price-o">￥39.80</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=30"><img class = "changeimg" src = "images/sk/ls5.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=30" target = "_blank">天朝的崩溃:鸦片战争再研究(修订版)</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥44.20</span>
					   <span class = "price-o">￥59.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=31"><img class = "changeimg" src = "images/sk/ls6.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=31" target = "_blank">中国考古通论</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥52.00</span>
					   <span class = "price-o">￥80.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=32"><img class = "changeimg" src = "images/sk/ls7.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=32" target = "_blank">世界文明史(理性时代)</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥228.80</span>
					   <span class = "price-o">￥352.00</span>
					</div>
			     </div>
			   </li>
			 </ul>
		  </div>
	   </div>
	</div>
	<div class = "jnhere"><p><span>首	页</span>&gt;&gt;文学部落&gt;&gt;◆宗教哲学</p></div>
    <div id = "wx-sw">
	   <div class = "wx-sw-left">
	      <div class = "left">
		    <div class = "img">
			   <a href = "detail3.php?id=33" target = "_blank"><img class = "changeimg" src = "images/sk/zj1.jpg"></img></a>
			</div>
			<div class = "name">
			   <a href = "detail3.php?id=33" target = "_blank">心理学与生活(第16版)</a>
			</div>
			<div class = "info">
《心理学与生活》是美国斯坦福大学多年来使用的教材，也是在美国许多大学里推广使用的经典教材，被ETS推荐为GRE心理学专项考试的主要参考用书，也是被许多国家大学的“普通心理学”（General Psychology）课程选用的优秀教材。不仅如此，这本教科书写作流畅，通俗易懂，更深入生活，把心理学理论与知识联系人们的日常生活与工作，使它同样也成为一般大众了解心理学与自己的极好读物！</div>
			
			<div class = "price">
			    <span class = "price-n">￥61.60</span>
				<span class = "price-o">￥88.00</span>
				<a href = "detail3.php?id=33"><div class = active-s>立即购买</div></a>
			</div>
		  </div>
		</div>
	   <div class = "wx-sw-right">
	      <div id = "right">
		     <ul>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=34"><img class = "changeimg" src = "images/sk/zj2.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=34" target = "_blank">中国哲学简史</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥27.40</span>
					   <span class = "price-o">￥38.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=35"><img class = "changeimg" src = "images/sk/zj3.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=35" target = "_blank">一切都是最好的安排</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥27.90</span>
					   <span class = "price-o">￥39.80</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=36"><img class = "changeimg" src = "images/sk/zj4.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=36" target = "_blank">自控力</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥27.90</span>
					   <span class = "price-o">￥37.80</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=37"><img class = "changeimg" src = "images/sk/zj5.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=37" target = "_blank">被讨厌的勇气:"自我启发之父"阿德勒的哲学课</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥28.70</span>
					   <span class = "price-o">￥39.80</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=38"><img class = "changeimg" src = "images/sk/zj6.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=38" target = "_blank">社会心理学(第8版)</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥47.90</span>
					   <span class = "price-o">￥68.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=39"><img class = "changeimg" src = "images/sk/zj7.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "detail3.php?id=39" target = "_blank">西藏生死书(藏传佛教生死观，当代*伟大生死学巨著)</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥28.70</span>
					   <span class = "price-o">￥39.80</span>
					</div>
			     </div>
			   </li>
			 </ul>
		  </div>
	   </div>
	</div>
  </div>
  
  <div id = "footer">
  <div id="footer">Copyright &copy; 2016 - 2017 Xiao 5 showbooks. </div>
  </div>
  </body>
</html>
