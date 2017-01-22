<?php

    require("dbconfig.php");
	require("functions.php");
	
	
	$link = mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
	        mysql_select_db(DBNAME,$link);
			
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
	   $sql = "select * from users where username = '{$username}' and password = '{$password}'";
             mysql_query($sql,$link);
		if(mysql_affected_rows($link)>0){
			/*$_SESSION['authorized'] = true;
			 $_SESSION['success'] = '登录成功';*/
            header('Location:../index.html');
            exit();
		}else{
			header('Location:../dologin.php?action=2');
		}
?>
