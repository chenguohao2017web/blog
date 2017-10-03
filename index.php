<?php
	include('./header.php');

	
	$a = isset($_GET['id']) ? $_GET['id'] : 1;

	$pagesize = 3;//每页显示的条数
	$sql = "select * from article";
	$rs = mysqli_query($conn,$sql);

	$pagecount = mysqli_num_rows($rs);//数据总数

	$pages =ceil($pagecount / $pagesize); //有多少页

	$start = ($a - 1) * $pagesize;

	$sql = "select * from article order by id desc limit $start,$pagesize";
	$rs = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_assoc($rs)){

	?>
			<div class="row">
				<a href="only-content.php?id=<?php echo $row['id']?>"><div class="col-sm-4">
						<img src="./admin/upload/<?php echo $row['img']?>" alt="" class="list-img">
					</div>
					<div class="col-sm-8">
						<span class="badge">浏览数:<strong><?php echo $row['views']?></strong></span>
						<h4><?php echo $row['title']?></h4>
						<p><?php echo $row['content']?></p>
					</div></a>
			</div>
	<?php
		}
	?>

	<?php
	for($i=1;$i <= $pages; $i++){
		echo "<a class='biao' href='index.php?id=".$i."'>".$i."</a>";
	}



	include('./footer.php');
?>