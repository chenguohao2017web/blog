<?php
	include('./conn.php');
	ini_set('date.timezone','PRC');

	$title = $_POST['title'];
	$cate_id = $_POST['cate_id'];
	$author = $_POST['author'];
	$content = $_POST['content'];
	$intime = $_POST['intime']; //字符串
	$img = $_FILES['img'];
/*
	var_dump($img);结果
	array(5) { 
		["name"]=> string(10) "alipay.png" 
		["type"]=> string(9) "image/png" 
		["tmp_name"]=> string(53) "C:\Users\Administrator\AppData\Local\Temp\phpA8A4.tmp"
		["error"]=> int(0) 
		["size"]=> int(11083) }
*/
	if($img['name']) {
		// 开始上传文件
			// 获取扩展名
			// $ext = $img['name'];

			// 从扩展名的点开始截取到最后返回字符串
			$ext = strrchr($img['name'], '.');

			//生成文件名  文件创建时间+随机三位数
			$filename = time().rand(1000,9999).$ext;


			// echo $filename;

			//判断是否允许上传
			$exts=['.jpg','.png','.gif','.txt','.doc'];
			// in_array("从文件中","多个数组")
			if(!in_array($ext,$exts)){
				echo '文件类型错误';exit;
			}

			// 从临时目录将文件保存过来
			// var_dump(fopen($img['tmp_name'], 'r'));exit;
			// $url = 'd:/phpStudy/WWW/upfiles/'.$filename;
			
			$upload = "upload/";
			$uploadurl = $upload.$filename;
			
			move_uploaded_file($img['tmp_name'],$uploadurl);


	}else{
		$filename = '';
	}

	$sql = "insert into article(title,cate_id,author,img,content) values('$title',$cate_id,'$author','$filename','$content')";

	$r = mysqli_query($conn,$sql);

	if($r) {
		alert('发表成功','article.php');
	}else{
		alert('发表失败','article.php');
		mysqli_error();
	}


?>