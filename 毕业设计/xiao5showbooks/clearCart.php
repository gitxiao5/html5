<?php
//ɾ������session�е���Ϣ

	session_start(); //�����Ự
	
	//�ж���ɾ��һ����Ʒ������չ��ﳵ
	if($_GET['id']){
		//��session��ɾ��ָ������Ʒ��Ϣ
		unset($_SESSION["shoplist"][$_GET['id']]);
	}else{
		//���session����Ʒ
		unset($_SESSION["shoplist"]);
	}
	//��ת��������ﳵ����
	header("Location:myCart.php");
	
	
