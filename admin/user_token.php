<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-user_token.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New User_token</a>

				<h1>User_token</h1>
				<p>This table includes <?php echo counting("user_token", "id");?> user_token.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Username</th>
			<th>Token</th>
			<th>Timemodified</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$user_token = getAll("user_token");
				if($user_token) foreach ($user_token as $user_tokens):
					?>
					<tr>
		<td><?php echo $user_tokens['id']?></td>
		<td><?php echo $user_tokens['username']?></td>
		<td><?php echo $user_tokens['token']?></td>
		<td><?php echo $user_tokens['timemodified']?></td>


						<td><a href="edit-user_token.php?act=edit&id=<?php echo $user_tokens['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $user_tokens['id']?>&cat=user_token" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				