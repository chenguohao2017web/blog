<?php
include('./conn.php');

	session_start();//开启session

	$_SESSION=[];//清空session

	session_destroy();//清楚数据

	alert('退出成功','login.php');
?>