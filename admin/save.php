<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "contact" || $cat_get == "contact"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$phone = mysqli_real_escape_string($link,$_POST["phone"]);
$message = mysqli_real_escape_string($link,$_POST["message"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `contact` (  `name` , `email` , `phone` , `message` ) VALUES ( '".$name."' , '".$email."' , '".$phone."' , '".$message."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `contact` SET  `name` =  '".$name."' , `email` =  '".$email."' , `phone` =  '".$phone."' , `message` =  '".$message."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `contact` WHERE id = '".$id_get."' ");
					}
					header("location:"."contact.php");
				}
				
				if($cat == "courses" || $cat_get == "courses"){
					$course_id = mysqli_real_escape_string($link,$_POST["course_id"]);
$course_name = mysqli_real_escape_string($link,$_POST["course_name"]);
$short_description = mysqli_real_escape_string($link,$_POST["short_description"]);
$long_description = mysqli_real_escape_string($link,$_POST["long_description"]);
$instructor_name = mysqli_real_escape_string($link,$_POST["instructor_name"]);
$date = mysqli_real_escape_string($link,$_POST["date"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `courses` (  `course_id` , `course_name` , `short_description` , `long_description` , `instructor_name` , `date` ) VALUES ( '".$course_id."' , '".$course_name."' , '".$short_description."' , '".$long_description."' , '".$instructor_name."' , '".$date."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `courses` SET  `course_id` =  '".$course_id."' , `course_name` =  '".$course_name."' , `short_description` =  '".$short_description."' , `long_description` =  '".$long_description."' , `instructor_name` =  '".$instructor_name."' , `date` =  '".$date."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `courses` WHERE id = '".$id_get."' ");
					}
					header("location:"."courses.php");
				}
				
				if($cat == "iframe" || $cat_get == "iframe"){
					$code = mysqli_real_escape_string($link,$_POST["code"]);
$course_id = mysqli_real_escape_string($link,$_POST["course_id"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `iframe` (  `code` , `course_id` ) VALUES ( '".$code."' , '".$course_id."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `iframe` SET  `code` =  '".$code."' , `course_id` =  '".$course_id."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `iframe` WHERE id = '".$id_get."' ");
					}
					header("location:"."iframe.php");
				}
				
				if($cat == "user_token" || $cat_get == "user_token"){
					$username = mysqli_real_escape_string($link,$_POST["username"]);
$token = mysqli_real_escape_string($link,$_POST["token"]);
$timemodified = mysqli_real_escape_string($link,$_POST["timemodified"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `user_token` (  `username` , `token` , `timemodified` ) VALUES ( '".$username."' , '".$token."' , '".$timemodified."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `user_token` SET  `username` =  '".$username."' , `token` =  '".$token."' , `timemodified` =  '".$timemodified."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `user_token` WHERE id = '".$id_get."' ");
					}
					header("location:"."user_token.php");
				}
				
				if($cat == "users" || $cat_get == "users"){
					$username = mysqli_real_escape_string($link,$_POST["username"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$phone = mysqli_real_escape_string($link,$_POST["phone"]);
$password = mysqli_real_escape_string($link,$_POST["password"]);
$user_type = mysqli_real_escape_string($link,$_POST["user_type"]);
$premium_member = mysqli_real_escape_string($link,$_POST["premium_member"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `users` (  `username` , `email` , `phone` , `password` , `user_type` , `premium_member` ) VALUES ( '".$username."' , '".$email."' , '".$phone."' , '".md5($password)."', '".$user_type."' , '".$premium_member."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `users` SET  `username` =  '".$username."' , `email` =  '".$email."' , `phone` =  '".$phone."' , `user_type` =  '".$user_type."' , `premium_member` =  '".$premium_member."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>