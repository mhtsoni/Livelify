<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-courses.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Courses</a>

				<h1>Courses</h1>
				<p>This table includes <?php echo counting("courses", "id");?> courses.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Course id</th>
			<th>Course name</th>
			<th>Short description</th>
			<th>Long description</th>
			<th>Instructor name</th>
			<th>Date</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$courses = getAll("courses");
				if($courses) foreach ($courses as $coursess):
					?>
					<tr>
		<td><?php echo $coursess['id']?></td>
		<td><?php echo $coursess['course_id']?></td>
		<td><?php echo $coursess['course_name']?></td>
		<td><?php echo $coursess['short_description']?></td>
		<td><?php echo $coursess['long_description']?></td>
		<td><?php echo $coursess['instructor_name']?></td>
		<td><?php echo $coursess['date']?></td>


						<td><a href="edit-courses.php?act=edit&id=<?php echo $coursess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $coursess['id']?>&cat=courses" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				