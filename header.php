<?php
	include('./admin/conn.php');

	$sql = "select * from category order by order_no asc";
	$rs = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>后台管理页面</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="need/index.css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="top">
		<div class="header clearfix">
			<div class="header-left pull-left">
				<span>电影文档</span>
			</div>
			<div class="header-right pull-right">
				<a href="admin/login.php">登入后台管理</a>
			</div>
		</div>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="./">首页<span class="sr-only">(current)</span></a></li>
		        <?php 
		        	while($row = mysqli_fetch_assoc($rs)){
		        		echo '<li><a href="cate_list.php?id='.$row['id'].'">'.$row['cate_name'].'</a></li>';
		        	}
		        ?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <form class="navbar-form navbar-left" method="get" action="search.php">
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="搜索文章" name="search">
	            </div>
	            <button type="submit" class="btn btn-default">搜索</button>
	         </form>
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
		<div class="content">
			<div class="container">