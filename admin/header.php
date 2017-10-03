<?php
include('./conn.php');

session_start();

if(!isset($_SESSION['userid'])){
	alert('登录超时','login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>后台管理页面</title>
	<title>后台管理页面</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="./index.css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="header">
			<div class="header-left pull-left hidden-xs">网站后台管理系统</div>
			<div class="header-right pull-right">
				<a href="index.php">系统首页</a>
				<a href="login_out.php">安全退出</a>
			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-sm-3 content-left">
					<h3>欢迎来到管理后台</h3>
					<h4>登录名：<?php echo $_SESSION['username']?></h4>
					<h4>身  份：<?php echo $_SESSION['flag']?></h4>

					<dl class="list">
						<dt class="d">类型<span class="glyphicon glyphicon-chevron-down"></span></dt> 
							<dd class="d1"><a href="list.php">查看所有类型</a></dd>
							<dd class="d1"><a href="list_addlist.php">新增类型</a></dd>
						<dt class="e">书本<span class="glyphicon glyphicon-chevron-down"></span></dt> 
							<dd class="e1"><a href="article_new.php">发表新书</a></dd>
							<dd class="e1"><a href="article.php">所有书</a></dd>
					</dl>
				</div>
				<div class="col-sm-9 content-right">