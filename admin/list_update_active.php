<?php
	include('./conn.php');

	$id = $_POST['id'];
	$cate_name = $_POST['cate_name'];
	$order_no = $_POST['order_no'];


	$sql = "update category set cate_name='$cate_name',order_no='$order_no' where id=$id";

	$r = mysqli_query($conn,$sql);

	if($r) {
		alert('修改成功','list.php');
	}else {
		alert('修改失败，人品问题','list.php');
	}
?>