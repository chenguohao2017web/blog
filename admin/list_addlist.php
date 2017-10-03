<?php
	include('./header.php')
?>


	<form action="list_addlist_active.php" method="post" class="addlist">
		<table class="table table-striped table-bordered .table-hover">
			<tr>
				<th>类名</th>
				<th>排序</th>
			</tr>
			<tbody>	
				<tr>
					<td><input type="text" name="cate_name"></td>
					<td><input type="text" name="order_no"></td>
				</tr>	
			</tbody>
		</table>
		<input type="submit" value="确定添加" class="btn btn-deafult">
	</form>
	
	<table class="table table-striped table-bordered .table-hover" style="margin-top: 50px;">
	<h2>当前列表排序</h2>
		<tr>
			<th>ID</th>
			<th>类名</th>
			<th>排序</th>
		</tr>
		<tbody>
		<?php
			$sql = "select * from category order by order_no asc,id desc";
			$rs = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($rs)){
		?>		
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['cate_name']?></td>
				<td><?php echo $row['order_no']?></td>
			</tr>
		<?php
			}
		?>		
		</tbody>
	</table>

<?php
	include('./footer.php')
?>