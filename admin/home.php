<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="contact.php">Contact</a></td>
					<td><?=counting("contact", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="courses.php">Courses</a></td>
					<td><?=counting("courses", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="iframe.php">Iframe</a></td>
					<td><?=counting("iframe", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="user_token.php">User_token</a></td>
					<td><?=counting("user_token", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			