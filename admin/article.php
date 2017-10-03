<?php
	include('./header.php');

?>
		<table class="article-list table table-bordered">
			<thead>
				<tr>
					<th style="width:5% ">ID</th>
					<th style="width: 10%">标题</th>
					<th style="width: 10%">种类</th>
					<th style="width: 10%">作者</th>
					<th style="width: 40%">内容</th>
					<th style="width: 20%">时间</th>
					<th style="width: 5%">操作</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
					$sql = "select article.*,category.cate_name from article,category where article.cate_id=category.id order by article.id desc";
					// 搜索 文章的所有内容以及类名的名字，来之两个表 当他们的id相同以及倒序排列

					$rs = mysqli_query($conn,$sql);

					while($row = mysqli_fetch_assoc($rs)) {
						echo "<tr>";
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['title'].'</td>';
							echo '<td>'.$row['cate_name'].'</td>';
							echo '<td>'.$row['author'].'</td>';
							echo '<td>'.mb_substr($row['content'],0,30,"utf-8").'</td>';
							echo '<td>'.$row['intime'].'</td>';
							echo '<td>';;
								echo '<a href="article_list_update.php?id='.$row['id'].'">修改</a>';
								echo '<a href="artivcle_list_delete_action.php?id='.$row['id'].'" onclick="return confirm(\'确定删除？\')">删除</a>';
							echo '</td>';
						echo "</tr>";
					}
				?>
			</tbody>
		</table>

<?php
	include('./footer.php');
?>