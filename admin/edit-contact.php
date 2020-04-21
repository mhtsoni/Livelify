<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$contact = getById("contact", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Contact</legend>
						<input name="cat" type="hidden" value="contact">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$contact['name']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$contact['email']?>" /><br>
							
							<label>Phone</label>
							<textarea class="ckeditor form-control" name="phone"><?=$contact['phone']?></textarea><br>
							
							<label>Message</label>
							<textarea class="ckeditor form-control" name="message"><?=$contact['message']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				