<?php
	include('./header.php');
?>

	<form action="article_new_action.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
		    <label for="exampleInputEmail1">标题title</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="title" name="title">
		</div>
		<div class="form-group">
		    <label for="exampleInputPassword1">文章类型cate_id</label>
		      <select class="form-control" id="exampleInputPassword1" name="cate_id">
		        <option value="0">选择文章类型</option>
		       
		      <?php
		      		$sql = "select * from category order by order_no asc,id desc";
		      		$rs = mysqli_query($conn,$sql);
		      		while($row = mysqli_fetch_assoc($rs)){
		      			echo ' <option value="'.$row['id'].'">'.$row['id'].'--'.$row['cate_name'].'</option>';
		      		}
		      ?>
		     </select>
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">作者author</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="author" name="author">
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">内容content</label>
		    <textarea name="content" id="" cols="100%" rows="5" name="content">
		    </textarea>
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">时间intime</label>
		    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="intime" name="intime">
		</div>
		<div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" id="exampleInputFile" name="img">
		    <p class="help-block">点击这里上传图片</p>
		</div>
		<button type="submit" class="btn btn-default">发表</button>
	</form>
	
<?php
	include('./footer.php');
?>