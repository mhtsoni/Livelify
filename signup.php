<?php
include 'header.php';
if($_POST){
    $a=$_POST["username"];
    $b=$_POST["email"];
    $c=md5(md5($_POST["password"]));
    $d=$_POST["phone"];
    include 'config.php';
    $sql_u = "SELECT * FROM users WHERE username='$a'";
  	$sql_e = "SELECT * FROM users WHERE email='$b'";
  	$sql_p = "SELECT * FROM users WHERE phone='$d'";
  	$res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);
  	$res_p = mysqli_query($con, $sql_p);
  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken";	
      echo "<p>$name_error</p>";
  	}
    if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 
      echo "<p>$email_error</p>";
  	}
    if(mysqli_num_rows($res_p) > 0){
  	  $phone_error = "Sorry... Phone already taken";
      echo "<p>$phone_error</p>"; 
  	}
    if(!(mysqli_num_rows($res_e) > 0 || mysqli_num_rows($res_p) > 0 || mysqli_num_rows($res_e) > 0)){
           $query = "INSERT INTO users(username,email,password,phone,user_type,premium_member) VALUES ('$a','$b','$c','$d','student','false')";
           $results = mysqli_query($con, $query);
           echo '<h1>Successfully registered!</h1>
            <script>window.setTimeout(function(){window.location.href = "login.php";
        }, 2000);
           </script>';
           exit();
  	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        *{
  padding:0;
  margin:0;
  box-sizing:border-box;
}
.wrapper{
/*   border:solid black; */
  display: -webkit-flex;
  display: flex;
  height: 100%;
}

.myForm{
  border:1px solid black;
  background-color:white;
  margin:50px auto;
  display:flex;
  flex-direction:column;
  flex-wrap:wrap;
  justify-content:space-between;
  align-items:center;
  width:25%;
  min-width:400px;
  border-radius:5px;
/*   height:450px;     */
}



.formElement{
/*   border:solid black; */
/*   flex-basis:100%; */
  width:90%;
}



.formInstructionsDiv{
  width:100%; 
/*   flex-grow:1; */
  padding:15px 0;
  background-color:#0C8195;
  border-radius:5px;
  color: white;
  border-bottom: solid #f8e76e; 
 
}

.formInstructionsDiv h2{
  margin-left:5%;
  font-size:3em;
  font-family:"ebrima";
  font-weight:lighter;
}

.formInstructionsDiv p{
  color: white;
  margin-left:5%;
  font-size:1em;
  font-family: "ebrima";
}
.fillContentDiv{
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  flex-grow:1;
  margin-top:40px;
  margin-bottom: 82px;
  height:280px;
  
  
}

.formContentElement{
  min-width:100%;
}

.names{
  display:flex;
  flex-wrap:wrap;
  justify-content:space-between;

}

.names .inputRequest{
  width:47.5%;
  min-width:150px;
}

.names .inputRequest:last-child{
/*   margin-right:5%; */
}

.otherInputs{

}

.otherInputs .inputRequest{

}


.inputRequest{
/*   margin-bottom:20px; */
  padding:15px;
  font-size:1.2em;
  background-color: #f2f2f2;
  border-style:none;
  border-radius:5px;
}

.inputRequest:focus{
  border-style:solid;
  border-width:3px;
  border-color: #0d6380;
}


.submitButton{
  width:40%;
  height:100%;
  background-color: #0099cc;
  border-style:none;
  color:white;
  font-size:1.2em;
  font-weight:800;
  cursor:pointer;
  border-radius:5px;
}

.submitButton:hover{
  background-color:#1cacdd;
}
.submitButtonDiv{
  grow:1;
  height:45px;
/*   padding-bottom:40px; */
  margin-bottom:20px;
  
}
    </style>
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<div class="wrapper">
  <form class="myForm" method="post">
    <div class="formInstructionsDiv formElement">
      <h2 class="formTitle" >Sign Up/<a href='login.php'>LogIn</a></h2>
      <p class="instructionsText">Please fill in this form to create an account</p>
     </div>
    <div class="fillContentDiv formElement">
    
      <label>
        <input name="username" class="inputRequest formContentElement" type="text" placeholder="Username">
      </label>
    
      <label>
        <input name="email" class="inputRequest formContentElement" type="text" placeholder="Email">
      </label>
      <label>
        <input name="phone" class="inputRequest formContentElement" type="text" placeholder="Phone No">
      </label>
      <label>
        <input name="password" class="inputRequest formContentElement" type="password" placeholder="Password">
      </label>
  
      </div>
    <div class="submitButtonDiv formElement">
    <button type="submit" class="submitButton">Sign Up</button>
    </div>
  </form>
</div>

    <?php
    include 'footer.php';
    ?>
</body>
</html>