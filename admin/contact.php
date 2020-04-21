<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-contact.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Contact</a>

				<h1>Contact</h1>
				<p>This table includes <?php echo counting("contact", "id");?> contact.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Message</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$contact = getAll("contact");
				if($contact) foreach ($contact as $contacts):
					?>
					<tr>
		<td><?php echo $contacts['id']?></td>
		<td><?php echo $contacts['name']?></td>
		<td><?php echo $contacts['email']?></td>
		<td><?php echo $contacts['phone']?></td>
		<td><?php echo $contacts['message']?></td>


						<td><a href="edit-contact.php?act=edit&id=<?php echo $contacts['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $contacts['id']?>&cat=contact" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				