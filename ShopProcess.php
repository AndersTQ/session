<?php

	//接收用户购买请求，并把书保存到session中.
	
	//保存到session中
	if(isset($_GET['PHPSESSID'])){
		session_id($_GET['PHPSESSID']);
	}
	
	session_start();
	

	$bookid=$_GET['bookid'];
	$bookname=$_GET['bookname'];

	$_SESSION[$bookid]=$bookname;

	echo "<br/>购买商品成功!";
	echo "<br/><a href='MyHall.php?".SID."'>返回购物大厅继续购买</a>";

?>