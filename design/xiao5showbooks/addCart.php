<?php 
	session_start();//启动会话
	             
				//1.导入配置文件 
					require("dbconfig.php");
				//2. 连接数据库，并选择数据库
					$link = @mysql_connect(HOST,USER,PASS)or die("数据库连接失败");
					mysql_select_db(DBNAME,$link);
				
				//3. 执行商品信息查询（获取要购买的信息）
					$sql = "select * from books where id={$_GET['id']}";
					$result = mysql_query($sql,$link);
					
				//4. 判断是否没有找到要购买的信息,若有就读取出要购买的信息
					if(empty($result) || mysql_num_rows($result)==0){
						die("没有找到要购买的信息！");
					}else{
						$shop = mysql_fetch_assoc($result);
						
					}
					$shop["num"]=1;//添加一个数量的字段
					header("Location:myCart.php");
				//5.放入购物车中（若已存在的商品实现数量累加）
					if(isset($_SESSION["shoplist"][$shop['id']])){
						//若存在数量加加
						$_SESSION["shoplist"][$shop['id']]["num"]++;
					}else{
						//若不存在，作为新购买的商品添加到购物车中
						$_SESSION["shoplist"][$shop['id']]=$shop;
					}
?>
			