<?php
	session_start(); //�����Ự
//�޸Ĺ��ﳵ�е���Ϣ

	//��ȡҪ�޸ĵ���Ϣ
	
	$id =$_GET['id'];
	$num = $_GET['num'];
	
	//�޸���Ʒ��Ϣ������
	$_SESSION["shoplist"][$id]["num"]+=$num;
	
	//��ֹ��Ʒ������С
	if($_SESSION["shoplist"][$id]["num"]<1){
		$_SESSION["shoplist"][$id]["num"]=1;
	}
	
	//��ת���ҵĹ��ﳵ����
	header("Location:myCart.php");
