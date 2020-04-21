<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$iframe = getById("iframe", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Iframe</legend>
						<input name="cat" type="hidden" value="iframe">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Code</label>
							<textarea class="ckeditor form-control" name="code"><?=$iframe['code']?></textarea><br>
							
							<label>Course id</label>
							<input class="form-control" type="text" name="course_id" value="<?=$iframe['course_id']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				