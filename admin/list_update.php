<?php
	include('./header.php');

	$id = $_GET['id'];

	$sql = "select * from category where id=$id";

	$rs = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_assoc($rs)
?>
	
	

	<div class="content-hea">
		<form action="list_update_active.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<table class="table table-striped table-bordered .table-hover">
				<thead>
					<tr>
						<th>ih</th>
						<th>类名</th>
						<th>排序</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><input type="text" name="cate_name" value="<?php echo $row['cate_name'];?>"></td>
						<td><input type="text" name="order_no" value="<?php echo $row['order_no'];?>"></td>
						<td><input type="submit" value="确定修改"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>

<?php
	include('./footer.php');
?>
