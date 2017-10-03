<?php
	include('./header.php');
	$id = $_GET['id']; //类型id
	// var_dump($id);exit;
	$sql = "select * from article where cate_id=$id";
	$rs = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($rs)){

?>
		<div class="row">
			<div class="col-sm-4">
				<img src="./admin/upload/<?php echo $row['img']?>" alt="" class="list-img">
			</div>
			<div class="col-sm-8">
				<span class="badge">浏览数:<strong><?php echo $row['views']?></strong></span>
				<h4><?php echo $row['title']?></h4>
				<p><?php echo $row['content']?></p>
			</div>
		</div>
<?php
	}
	
	include('./footer.php');
?>