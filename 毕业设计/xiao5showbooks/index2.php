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
		  <li><a href = "">文学部落</a>
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
    <div class = "jnhere"><p><span>首	页</span>&gt;&gt;文学部落</p></div>
    <div id = "jnswap">
	   <div id = "jnswap-ad"><img id="placeholder" src = "images/wx/wx-ad1.jpg" alt = "wenxue"></img></a></div>
	   <div class = "jnswap-bd">
	      <a href = "images/wx/wx-ad2.jpg" onmouseover="showPic(this);return false;"><img src = "images/wx/wx-ad2s.jpg"></img></a>
	      <a href = "images/wx/wx-ad3.jpg" onmouseover="showPic(this);return false;"><img src = "images/wx/wx-ad3s.jpg"></img></a>
	      <a href = "images/wx/wx-ad4.jpg" onmouseover="showPic(this);return false;"><img src = "images/wx/wx-ad4s.jpg"></img></a>
	   </div>
	</div>
	<div class = "jnhere"><p><span>首	页</span>&gt;&gt;文学部落&gt;&gt;★青春文学</p></div>
    <div id = "wx-qc">
	   <div class = "wx-qc-left">
	      <div class = "left">
		    <div class = "img">
			   <a href = "detail3.php?id=12" target = "_blank"><img class = "changeimg" src = "images/wx/qc1.jpg"></img></a>
			</div>
			<div class = "name">
			   <a href = "#" target = "_blank">再美也没不过想象</a>
			</div>
			<div class = "info">
			   1、《再美也美不过想象》是微博上用冷幽默讲暖故事的高手、韩寒主编【一个】APP高赞人气作家耀一首部情感小说结集。平凡的故事，虐心的结局，篇篇直戳泪点。
<br>
2、“人的想象力在爱情来临的时候，是*强大的。当你爱上一个人的时候，在你的脑中早就和他/她过完了一辈子。”
<br>
3、分享超过12,000,000次，笑中带泪或泪中带笑的故事，让你于百转千回后找到真实的自己。
<br>
4、《从你的全世界路过》作者张嘉佳倾情推荐！“耀一经常让我惊奇，比如说三十大几的男人还单纯得可怕，比如说一天可以只睡四个钟头。我问他在做什么，他说他永远都在想故事。我说要是想不出呢，他说那他就去捡！耀一也是蛮拼的。那么，希望他的这些故事也会让你们惊奇。”
<br>
“我写那些悲伤的故事，不是想赚你们的眼泪，只希望你们可以感受到自己身上的幸福，哪怕只是一丝也好。虽然这样靠对比感受幸福的方式有些残忍，但现实就是如此。我把阴暗面摆在你们面前，但并不代表整个世界都是阴暗的。对于故事里的人，我是决绝的，但对于你们，我尽可能保持温和。”——耀一
<br>
★《再美也美不过想象》心动语录：
<br>
1、爱情总是无声无息地悄然而至，人们毫无防备，也无须准备。谈恋爱不是找工作，没人愿意等你调整到*佳状态才和你在一起。爱像烟火，怎么热烈缤纷怎么来好了，至于绚烂过后的满地残屑，两个人手牵手一起收拾好了，多美好。
<br>
2、养宠物和谈恋爱一样，都是需要勇气的。在这两件事上，永远都是开始时快乐有多少，结束时痛苦就会翻倍。
<br>
3、有些事是不可以开玩笑的，比如喜欢一个人这件事。
<br>
4、你们若相爱，彼此就该是鲜活的，就算死了也是鲜活的。你们彼此活在对方的任何时间与空间里，无论睡着还是醒着。你们若不相爱了，彼此就该是死去的，就算活着也是死去的。你们彼此被埋进对方的回忆中，只需要偶尔拿出来缅怀一下就好，别再有爱的期待。一辈子能有多长？再长也长不过等待。
<br>
5、到不了的都叫作远方，回不去的名字叫家乡。
<br>
6、因为一个人，爱上一座城。但谁也不知道，*终守住的是有爱的人，还是只是一座死城。
<br>
7、人的想象力在爱情来临的时候是*强大的。当你爱上一个人的时候，在你的脑海中，你早就和他/她过完了一辈子。
<br>
8、陪伴是*长情的告白，而守护是*沉默的陪伴。
<br>
9、人总是在渴望爱情或者失去爱情的时候，才会去思考。
<br>
10、烦恼和快乐大多是假借他人之手，却又自产自销。
<br>
11、人生是什么？人生就是感情堆积成的一段旅程。起点就是终点，没有所谓开始，也没有所谓结束。它是圆的。就好像这个比萨，培根是爱情，红肠丁是亲情，红椒是友情，青椒是其他的感情。你不能因为没有了爱情就觉得人生不是人生了，就觉得人生不够圆满了。
<br>
12、年轻*大的敌人不是折腾，而是错过。
<br>
13、每个人心里都有个无人区，说是无人区却藏着很多人，只是你不想让这些人见光而已。这些人一辈子都走不出你的心，而你也无法用好和坏来定义他们。
<br>
14、爱情只是人生的一部分，可以温暖人心的不只是爱情，每种感情都有它的温度，哪怕是看起来很平凡的。
<br>
			</div>
			<div class = "price">
			    <span class = "price-n">￥24.2</span>
				<span class = "price-o">￥35.00</span>
				<a href = "#"><div class = active-s>立即购买</div></a>
			</div>
		  </div>
	   </div>
	   <div class = "wx-qc-right">
	      <div id = "right">
		     <ul>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=13"><img class = "changeimg" src = "images/wx/qc2.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">为了你，我愿意热爱整个世界。</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥21.3</span>
					   <span class = "price-o">￥36.50</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=14"><img class = "changeimg" src = "images/wx/qc3.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">悲伤逆流成河</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥20.3</span>
					   <span class = "price-o">￥33.50</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=15"><img class = "changeimg" src = "images/wx/qc4.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">陪你说一世晚安</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥9.9</span>
					   <span class = "price-o">￥35.50</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=16"><img class = "changeimg" src = "images/wx/qc5.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">穿越人海拥抱你</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥22.8</span>
					   <span class = "price-o">￥32.5</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=17"><img class = "changeimg" src = "images/wx/qc6.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">十年一品温如言</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥24.2</span>
					   <span class = "price-o">￥35.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=18"><img class = "changeimg" src = "images/wx/qc7.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">光阴似水 待你如初</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥38.5</span>
					   <span class = "price-o">￥57.00</span>
					</div>
			     </div>
			   </li>
			 </ul>
		  </div>
	   </div>
	</div>
	<div class = "jnhere"><p><span>首	页</span>&gt;&gt;文学部落&gt;&gt;◆网红小说</p></div>
    <div id = "wx-sw">
	   <div class = "wx-sw-left">
	      <div class = "left">
		    <div class = "img">
			   <a href = "detail3.php?id=19" target = "_blank"><img class = "changeimg" src = "images/wx/sw1.jpg"></img></a>
			</div>
			<div class = "name">
			   <a href = "detail3.php?id=19" target = "_blank">鸟人 荣获美国“美国国家图书奖”,纽约时报》图书畅销榜**作品 ,入围“普利策奖”*终名单,美国现代经典文学作品</a>
			</div>
			<div class = "info">
1. 代表美国文学高水平的“美国国家图书奖”获奖作品！“普利策文学奖”入围*终名单，优势地位的美国现代经典文学作品！
<div>2. 改编的同名电影《鸟人》已成为超级经典影片，不仅获得戛纳影展“评审团大奖”，还获得美国“国家评论协会”**0，华沙国际电影节“*佳影片奖”！</div>
<div>3. 《纽约时报》全年畅销**图书，已被翻译成27种语言，畅销全球！</div>
<div>4. 本书作者威廉•沃顿获《纽约时报》评选的20世纪美国大器晚成作家第1名！</div>
			</div>
			<div class = "price">
			    <span class = "price-n">￥31.8</span>
				<span class = "price-o">￥49.00</span>
				<a href = "detail3.php?id=19"><div class = active-s>立即购买</div></a>
			</div>
		  </div>
	   </div>
	   <div class = "wx-sw-right">
	      <div id = "right">
		     <ul>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=20"><img class = "changeimg" src = "images/wx/sw2.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">就喜欢你看不惯我又干不掉我的样子(2)</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥30.8</span>
					   <span class = "price-o">￥46.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=21"><img class = "changeimg" src = "images/wx/sw3.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">就在伦敦 英国乔治小王子启蒙读物作者、“美国独立出版人图画书”金奖获得者，人气插画师扫把 精彩画面诠释伦敦童话！</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥50.7</span>
					   <span class = "price-o">￥78.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=22"><img class = "changeimg" src = "images/wx/sw4.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">其实你很好,你自己却不知道</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥21.6</span>
					   <span class = "price-o">￥36.00</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=23"><img class = "changeimg" src = "images/wx/sw5.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">南烟斋笔录如梦令</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥17.9</span>
					   <span class = "price-o">￥29.80</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=24"><img class = "changeimg" src = "images/wx/sw6.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">头条都是他</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥23.9</span>
					   <span class = "price-o">￥39.80</span>
					</div>
			     </div>
			   </li>
			   <li>
			     <div class = "right">
				    <div class = "right-img">
					   <a href = "detail3.php?id=25"><img class = "changeimg" src = "images/wx/sw7.jpg"></img></a>
					</div>
					<div class = "right-name"><a href = "#" target = "_blank">【赠旅行手账笔记本+旅行电话薄 】与喜欢的人旅行才是正经事</a>
					</div>
					<div class = "right-price">
					   <span class = "price-n">￥19.7</span>
					   <span class = "price-o">￥32.80</span>
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
