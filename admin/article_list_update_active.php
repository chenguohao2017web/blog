<?php
	include('./conn.php');
	ini_set('date.timezone','PRC');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$cate_id = $_POST['cate_id'];
	$author = $_POST['author'];
	$content = $_POST['content'];
	$img = $_FILES["file"];
	// var_dump($img);
	// array(5) { 
	// 	["name"]=> string(8) "zdzw.jpg" 
	// 	["type"]=> string(10) "image/jpeg" 
	// 	["tmp_name"]=> string(53) C:\Users\Administrator\AppData\Local\Temp\php8143.tmp" 
	// 	["error"]=> int(0) 
	// 	["size"]=> int(32732) 
	// }
	
// 原始数据
	$sql = "select * from article where id=$id";
	$rs = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($rs);


// 新图数据
	if($img['name']){
		$img_name = $img['name'];
		$arr = explode('.',$img_name);
		// print_r($arr);exit;Array ( [0] => 15054686891311 [1] => png )
		$ext = $arr[count($arr)-1]; //jpg
		$type = $img['type'];
		$size = $img['size'];
		$error = $img['error'];
		$allexts = array("gif","jpeg","jpg","png");
		if(($type=="image/gif")||
			($type=="image/jpeg")||
			($type=="image/jpg")||
			($type=="image/pjpeg")||
			($type=="image/x-png")||
			($type=="image/png")&&
			($size<20000)&&
			in_array($ext,$allexts)){
				if($error>0){
					echo "error".$error;
				}else{
					$filename = time().rand(1000,9999).".".$ext;
					$upload = "upload/".$filename;
					move_uploaded_file($img['tmp_name'],$upload);
				}
		}
	}else{
		$filename = $row['img'];
	}

	$intime = date("Y-m-d H:i:s");



	$sql = "update article set title='$title',cate_id='$cate_id',author='$author',content='$content',img='$filename',intime='$intime' where id=$id";

	$r = mysqli_query($conn,$sql);
	
	if($r) {
		alert('更新成功','article.php');
	}else{
		alert('更新失败','article.php');
	}

?>