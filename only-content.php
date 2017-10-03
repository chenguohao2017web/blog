<?php
	include('./header.php');
	$id = $_GET['id'];
	$sql = "select * from article where id=$id";
	$rs = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($rs)){

?>
		<div class="row" id="contentrow">
			<div class="col-sm-4">
					<img src="./admin/upload/<?php echo $row['img']?>" alt="" class="list-img">
				</div>
				<div class="col-sm-8">
					<span class="badge" id="dianzan"><a href="view_action.php?id=<?php echo $id?>">点赞</a></span>
					<span class="badge">浏览数:<strong><?php echo $row['views']?></strong></span>
					<h4><?php echo $row['title']?></h4>
					<p><?php echo $row['content']?></p>
				</div>
		</div>
		<!-- <script>
			$("#dianzan").click(function(){
				var views = 
			})
		</script> -->
<?php
	}
      


	$sql = "select * from visitor where article_id=$id";

	$rs = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($rs)){


		echo "<div class='asker'>";
		echo	"<h4>".$row['name'].":</h4>";
		echo	"<p>".$row['content']."</p>";
		echo  "</div>";


	}

?>	

		<div class="container ask">
			<h5 style="background: #ddd">留下你的脚印吧！</h5>
			<form action="ask_action.php?id=<?php echo $id?>" method="post">
				<textarea name="content" id="" cols="30" rows="10" class="asktext"></textarea>
				<input name="name" type="text" placeholder="请写下你的大名" class="name"><button type="submit" class="btn btn-primary">提交评论</button>
			</form>
		</div>


<?php	
	include('./footer.php');
?>