<?php
	include('./conn.php');

	$id = $_GET['id'];

	$sql = "delete from category where id = $id";

	$r = mysqli_query($conn,$sql);

	$sql = "delete from article where cate_id=$id";

	$r2 = mysqli_query($conn,$sql);

	if($r&&$r2) {
		alert('删除成功','list.php');
	}else {
		alert('删除失败','list.php');
	}
?>