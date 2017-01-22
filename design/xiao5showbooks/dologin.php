<html>
  <head>
    <meta charset = "utf-8"></meta>
	<title>Xiao 5 图书网登陆</title>
	<script src = "scripts/jquery.js"></script>
	<script src = "scripts/changepasswordvis.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "css/style6.css"></link>
     <script type = "text/javascript">
	     $(function(){
			 $("#send").click(function(){
				 if($_GET['action']==2){
					 alert("dfgdf");
				 }
			 })
		 })
	 </script>
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
     <div id = dl><h2>Xiao 5 用户登陆</h2></div>	
    <form method= "post" action = "./manage/login.php">
	   <div class = "int">
	    <label for= "username"> 用户名:</label>
		<input type = "text" id = "username" class = "required" name = "username"></input>
	  </div>
	   <div class = "int">
	    <label for= "password">密&nbsp;&nbsp;&nbsp;码:</label>
		<input type = "password" id = "password" class = "required" name = "password"></input>
		
	  </div>
	  <div class = "out">
		    <input type = "submit" value = "登陆" id = "send"></input>
			<input type = "reset" id = "res"></input>
	  </div>
	  </table>
	</form>
	      <p id = "tips"><?php if($_GET['action']==2) echo "<script>alert('你输入的用户名或密码有误！');</script>"?></p>
	</div>
	<div id = "footer">
	
	</div>
  </body>
</html>