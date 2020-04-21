<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$courses = getById("courses", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Courses</legend>
						<input name="cat" type="hidden" value="courses">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Course id</label>
							<input class="form-control" type="text" name="course_id" value="<?=$courses['course_id']?>" /><br>
							
							<label>Course name</label>
							<input class="form-control" type="text" name="course_name" value="<?=$courses['course_name']?>" /><br>
							
							<label>Short description</label>
							<textarea class="ckeditor form-control" name="short_description"><?=$courses['short_description']?></textarea><br>
							
							<label>Long description</label>
							<textarea class="ckeditor form-control" name="long_description"><?=$courses['long_description']?></textarea><br>
							
							<label>Instructor name</label>
							<input class="form-control" type="text" name="instructor_name" value="<?=$courses['instructor_name']?>" /><br>
							
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$courses['date']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				