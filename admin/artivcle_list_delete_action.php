<?php
	include('./conn.php');

	$id = $_GET['id'];


	$sql = "delete from article where id=$id";

	$r = mysqli_query($conn,$sql);
	
	if($r) {
		alert('删除成功','article.php');
	}else{
		alert('删除失败','article.php');
	}

?>