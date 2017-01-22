<meta charset = "utf-8"></meta>
<?php
//执行用户信息的增、删、改的操作

//一、导入配置文件和函数库文件
	require("dbconfig.php");
	require("functions.php");

//二、连接MySQL，选择数据库
	$link = mysql_connect(HOST,USER,PASS) or die("数据库失败！");
	mysql_select_db(DBNAME,$link);


//三、获取action参数的值，并做对应的操作
	switch($_GET["action"]){
		case "add": //添加
			//1. 获取添加信息
			$username 	= $_POST["username"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$addtime = time();
			//2. 拼装sql语句，并执行添加
			$sql = "insert into users values(null,'{$username}','{$password}','{$email}',{$addtime})";
			//echo $sql;
			mysql_query($sql,$link);
			
			//3. 判断并输出结果
			if(mysql_insert_id($link)>0){
			    echo "新用户发布成功！";
			}else{
				echo "新用户发布失败！".mysql_error();
			}
			// header("Location:http://localhost/gouwuche/code/user/index.php");
			echo "<a href='index.php'>查看用户信息<a>";
			break;
		
		case "del": //删除
			//获取要删除的id号并拼装删除sql，执行
			$sql = "delete from users where userid={$_GET['userid']}";
			mysql_query($sql,$link);
			//header("Location:index.php");
			echo "用户删除成功！";
			echo "<a href='index.php'>查看用户信息<a>";
			break;
			
			
		case "update": //修改
			//1. 获取要修改的信息
			$username = $_POST["username"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$userid = $_POST["userid"];
			
			//2. 执行修改
			$sql = "update users set username='{$username}',password='{$password}',email='{$email}' where userid='{$userid}'";
			//echo $sql;
			mysql_query($sql,$link);
			
			//3. 判断是否修改成功
			if(mysql_affected_rows($link)>0){
				echo "用户修改成功！";
				echo "<a href='index.php'>查看用户信息<a>";
			}else{
				echo "修改失败".mysql_error();
			}
			//header("Location:index.php");
			break;
	}
	

//四、关闭数据库
mysql_close($link);
