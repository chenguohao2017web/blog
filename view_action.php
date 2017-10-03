<?php
	include("./admin/conn.php");


	$id = $_GET['id'];

	$sql = "select views from article where id=$id";

	$rs = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($rs);

	$row['views']+=1;

	$newviews = $row['views'];


	$sql = "update article set views=$newviews where id=$id";

	$r = mysqli_query($conn,$sql);

	if($r){
		alert("点赞成功","only-content.php?id=$id");
	}
?>