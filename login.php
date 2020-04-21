<?php
    include 'header.php';
?>
<?php
include "config.php";
if(isset($_SESSION['username'])){
    header('Location: home.php');
}
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = md5(md5(mysqli_real_escape_string($con,$_POST['txt_pwd'])));


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        if($count > 0){
            $token = getToken(10);
            $_SESSION['username'] = $uname;
            $_SESSION['token'] = $token;

            // Update user token 
            $result_token = mysqli_query($con, "select count(*) as allcount from user_token");
            $row_token = mysqli_fetch_assoc($result_token);
            if($row_token['allcount'] > 0){
                mysqli_query($con,"update user_token set token='".$token."' where username='".$uname."'");
            }else{
                mysqli_query($con,"insert into user_token(username,token) values('".$uname."','".$token."')");
            }
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}

// Generate token
function getToken($length){
     $token = "";
     $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
     $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
     $codeAlphabet.= "0123456789";
     $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[rand(0, $max-1)];
    }

    return $token;
}

?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css">
        <style>
        .bg-custom {
        background: white;
        }

        .bg-custom-1 {
          background: linear-gradient(to right,  #007bff, #039BE6, #028BCF);
        }

        .btn-primary {
          background-color: green!important;
        }

        </style>
    </head>
    <body>
        
        
  <body class="bg-custom text-light">
    
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="card bg-custom-1 mb-5">
            <h3 class="card-header">Log In</h3>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                  <form method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txt_uname" placeholder="Username" >
                      <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" id="txt_uname" name="txt_pwd">
                    </div>
                    <button type="submit" class="btn btn-primary" value="Submit" name="but_submit">Submit</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        
        
        
        
        
        
        
        
        
        
        
    <?php
    include 'footer.php';
    ?>
    </body>
</html>

