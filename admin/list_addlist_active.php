<?php
	include('./conn.php');

	$cate_name = $_POST['cate_name'];
	$order_no = $_POST['order_no'];

	$sql = "insert into category(cate_name,order_no) values('$cate_name','$order_no')";
	$r = mysqli_query($conn,$sql);

	if($r) {
		alert('添加成功','./list.php');
	}else {
		alert('添加失败','./list_addlist.php');
	}
?>