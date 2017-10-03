<?php
	header("Content-type:text/html;charset=utf-8");

	$conn = @mysqli_connect('localhost','root','root','blog') or die('连接失败');
	mysqli_query($conn,'set names utf8');

	function alert($str,$url) {
		echo '<script>alert("'.$str.'");location.href="'.$url.'"</script>';
	};

?>