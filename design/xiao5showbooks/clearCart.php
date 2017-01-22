<?php
//删除购物session中的信息

	session_start(); //启动会话
	
	//判断是删除一个商品还是请空购物车
	if($_GET['id']){
		//从session中删除指定的商品信息
		unset($_SESSION["shoplist"][$_GET['id']]);
	}else{
		//清空session中商品
		unset($_SESSION["shoplist"]);
	}
	//跳转到浏览购物车界面
	header("Location:myCart.php");
	
	
