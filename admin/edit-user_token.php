<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$user_token = getById("user_token", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New User_token</legend>
						<input name="cat" type="hidden" value="user_token">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Username</label>
							<input class="form-control" type="text" name="username" value="<?=$user_token['username']?>" /><br>
							
							<label>Token</label>
							<input class="form-control" type="text" name="token" value="<?=$user_token['token']?>" /><br>
							
							<label>Timemodified</label>
							<input class="form-control" type="text" name="timemodified" value="<?=$user_token['timemodified']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				