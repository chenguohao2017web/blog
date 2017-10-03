<?php
	include('./header.php');
	$id = $_GET['id'];
	$sql = "select * from article where id=$id";
	$rs = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_assoc($rs);
?>
	<form action="article_list_update_active.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id?>">

		<div class="form-group">
			<label for="exampleInputEmail1">ID</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $row['id']?>">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">标题</label>
			<input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="title" value="<?php echo $row['title']?>">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword2">类型</label>
			<select class="selectpicker" id="exampleInputPassword2"  name="cate_id">
			<?php
				$sql = "select * from category";
				$rs = mysqli_query($conn,$sql);
				while($row2 = mysqli_fetch_assoc($rs)){
					if($row['cate_id']==$row2['id']){
						echo "<option selected='selected'>".$row2['id']."=>".$row2['cate_name']."</option>";
					}else {
						echo "<option>".$row2['id']."=>".$row2['cate_name']."</option>";
					}
					
				}
			?>
		    </select
		</div>
		<div class="form-group">
			<label for="exampleInputPassword3">作者</label>
			 <input type="text" name="author" class="form-control" id="exampleInputPassword3" placeholder="author" value="<?php echo $row['author']?>">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword4">内容</label>
			<textarea name="content" id="exampleInputPassword4" cols="30" rows="10">
				<?php echo $row['content']?>
			</textarea>
		</div>
		<div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <img src="upload/<?php echo $row['img']?>" alt="" style="width: 200px;display: block;">
		    <input type="file" id="exampleInputFile" name="file">
		    <p class="help-block">点击这里上传图片</p>
		</div>
		<button type="submit" class="btn btn-default">马上修改</button>
	</form>
<?php
	include('./footer.php');
?>
