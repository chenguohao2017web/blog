<?php
include('./conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username)<5) {
	echo '用户名少于5个字';exit;
}

$sql = "select * from admin where username='$username' and password='$password'";

$rs = mysqli_query($conn,$sql);

// print_r(mysqli_fetch_assoc($rs)) ;
// 可以打印出一条数组


if(($row = mysqli_fetch_assoc($rs)) > 0) {
	// var_dump($row);

	session_start();//开启session
	$_SESSION['userid']=$row['id'];  //判断是否登录成功
	$_SESSION['username']=$row['username'];
	$_SESSION['flag']=$row['flag'];
// 	echo "$row[id]";
    alert('登陆成功','index.php');
}else {
	alert('用户名或者密码错误','login.php');
}