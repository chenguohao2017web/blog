<?php
	include('./admin/conn.php');

	$id = $_GET['id'];
	$name = $_POST['name'];
	$content = $_POST['content'];

	$sql = "insert into visitor(article_id,name,content) values($id,'$name','$content')";
	$r = mysqli_query($conn,$sql);

	if($r){
		alert('提交成功',"only-content.php?id=$id");
	}
?>