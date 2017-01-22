<html>
  <head>
    <meta charset = "utf-8"></meta>
	<title>Xiao 5 图书网注册</title>
	<script src = "scripts/jquery.js"></script>
	<script src = "scripts/confirm.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "css/style7.css"></link>
  </head>
  <body>
  
      
    <div id = "header">
     <div class = "contWidth">
	  <a href = "#nogo" class = "logo">
	    <img src = "images/5.gif" alt = "Wu jie Shopping" style = "margin-top:25px;"></img>
	  </a>
	  
	 </div>
	</div>
	
    <div id = "content">
     <div id = dl><h2>Xiao 5 用户注册</h2></div>	
    <form method= "post" action ="./manage/adduser.php">
	   <div class = "int">
	    <label for= "username">用户名:</label>
		<input type = "text" id = "username" class = "required" name = "username"></input>
	  </div>
	   <div class = "int">
	    <label for= "username">密&nbsp;&nbsp;&nbsp;&nbsp;码:</label>
		<input type = "password" id = "password" class = "required" name = "password"></input>
	  </div>
	   <div class = "int">
	    <label for = "email">邮&nbsp;&nbsp;&nbsp;&nbsp;箱:</label>
		<input type = "text" id = "email" class = "required" name = "email"></input>
	  </div>
	  <div class = "int">
	  验&nbsp;&nbsp;&nbsp;证：<input type="text" size="6" id="code_num" name="code_num"/>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img id = "img" src="code.php" onclick="this.src='code.php?id='+Math.random()"/> <br/><br/>
				</div>
	    <input type = "submit" value = "提交" id = "send" class = "chk_num"></input><input type = "reset" id = "res"></input>
	   
	  </table>
	</form>
	<p id = "tips"><?php if($_GET['action']==2) echo "<script>alert('您刚刚输入的的验证码是错误的！')</script>"?></p>
	 </div>
	<div id = "footer">
	  
	</div>
  </body>
</html>