<?php

//执行商品信息的增、删、改的操作

//一、导入配置文件和函数库文件
	require("dbconfig.php");
	require("functions.php");

//二、连接MySQL，选择数据库
	$link = mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
	   mysql_select_db(DBNAME,$link);
//三
   
    session_start();
     $code = $_POST['code_num']; 
   if($code==$_SESSION['SESSION_VALIDATE_CODE']){
	    
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$addtime = time();
		//2.拼装SQL语句，并执行添加
		$sql = "insert into users values(null,'{$username}','{$password}','{$email}',{$addtime})";
		mysql_query($sql,$link);
		if(mysql_insert_id($link)>0){
	    //echo "<script>alert('用户发布成功！');location.href='../index.html'</script>";
		header("Location:../index.html");
		exit();
		}else{
			echo "用户添加失败！".mysql_error();
		}
		
	}else{
		//echo "<script>alert('用户发布失败！')</script>";
		header("Location:../reg.php?action=2");
		
	}
 mysql_close($link);
