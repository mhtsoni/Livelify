<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-iframe.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Iframe</a>

				<h1>Iframe</h1>
				<p>This table includes <?php echo counting("iframe", "id");?> iframe.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Code</th>
			<th>Course id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$iframe = getAll("iframe");
				if($iframe) foreach ($iframe as $iframes):
					?>
					<tr>
		<td><?php echo $iframes['id']?></td>
		<td><?php echo $iframes['code']?></td>
		<td><?php echo $iframes['course_id']?></td>


						<td><a href="edit-iframe.php?act=edit&id=<?php echo $iframes['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $iframes['id']?>&cat=iframe" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				