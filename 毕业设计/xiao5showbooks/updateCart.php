<?php
	session_start(); //启动会话
//修改购物车中的信息

	//获取要修改的信息
	
	$id =$_GET['id'];
	$num = $_GET['num'];
	
	//修改商品信息的数量
	$_SESSION["shoplist"][$id]["num"]+=$num;
	
	//防止商品数量过小
	if($_SESSION["shoplist"][$id]["num"]<1){
		$_SESSION["shoplist"][$id]["num"]=1;
	}
	
	//跳转回我的购物车界面
	header("Location:myCart.php");
