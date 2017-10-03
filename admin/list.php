<?php
	include('./header.php');
?>
					<div class="content-hea">
						<table class="table table-striped table-bordered .table-hover">
							<tr>
								<th>ID</th>
								<th>类名</th>
								<th>排序</th>
								<th>操作 <a href="list_addlist.php" class="btn btn-warning">新增</a></th>
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
									<td>
										<a href="list_update.php?id=<?php echo $row['id']?>">修改</a>
										<a href="list_delete_active.php?id=<?php echo $row['id']?>" onclick="return confirm('确定删除？')">删除</a>
									</td>
								</tr>
							<?php
								}
							?>		
							</tbody>
						</table>
					</div>
				
<?php
	include('./footer.php');
?>				