<?php
session_start();
include "config.php";

include "check_token.php";

// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    </head>
    <body> 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
        <form style='position:absolute; bottom:10px;right:10px;z-index:10' method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
        <?php
        $x=$_SESSION['username'];
$query="SELECT*FROM users WHERE username='$x'";
$row=mysqli_query($con,$query);
$user_type=mysqli_fetch_array($row);
if($user_type["user_type"]=="teacher"){
    echo '
        <iframe style="position:absolute;top:0px;left:0px;width:100vw; height:100vh;  margin:0px;" src="https://awwapp.com/"></iframe>
        <div style="background-color:transparent;z-index:20;display:inline-block">
        <div style="background-color:green; text-align:center" id="draggable">
        <p style="vertical-align:center;color:white;">Drag</P
        </div>
        <iframe src="https://minnit.chat/MSCLASSES?embed&nickname=" style="border:none;height:500px;" allowTransparency="true"></iframe>
        </div>
        ';
}
else if($user_type["user_type"]=="student"){
    echo "<script>location.href='courses.php';</script>";
}
    ?>
       
    </body>
</html>