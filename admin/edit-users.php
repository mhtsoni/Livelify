<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$users = getById("users", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Users</legend>
						<input name="cat" type="hidden" value="users">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Username</label>
							<input class="form-control" type="text" name="username" value="<?=$users['username']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$users['email']?>" /><br>
							
							<label>Phone</label>
							<input class="form-control" type="text" name="phone" value="<?=$users['phone']?>" /><br>
							
							<label>Password</label>
							<input class="form-control" type="text" name="password" value="<?=$users['password']?>" /><br>
							
							<label>User type</label>
							<input class="form-control" type="text" name="user_type" value="<?=$users['user_type']?>" /><br>
							
							<label>Premium member</label>
							<input class="form-control" type="text" name="premium_member" value="<?=$users['premium_member']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				