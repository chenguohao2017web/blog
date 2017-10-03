<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="./style.css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2 class="title">后台管理系统</h2>
	<div class="container">
		<form action="login_check.php" method="post">
		  <div class="form-group">
		    <label for="user">username</label>
		    <input type="text" class="form-control" id="user" placeholder="username" name="username">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  </div>
		  <button type="submit" class="btn btn-default">登录</button>
		</form>
	</div>
</body>
</html>