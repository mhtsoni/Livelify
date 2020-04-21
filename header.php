    <?php
session_start();

    if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
    }
    if(!isset($_SESSION['username'])){
    $y='<a href="login.php" class="nav-link">LOGIN/SIGNUP</a>';
    }
    else{
    $y='<form method="post" action="">
            <button style="background-color:transparent; color:white; border:none; align-items: flex-end"  type="submit" value="Logout" name="but_logout">LogOut</button>
        </form>';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>TUTSLIVE</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>
    <?php include 'loader.php';?>
    
    
    
    
    
    
    
    
    
    
    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
              <i class="fa fa-line-chart"></i>
              TUTSLIVE
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="timetable.php" class="nav-link smoothScroll">TIME-TABLE</a>
                    </li>
                    <li class="nav-item">
                        <a href="courses.php" class="nav-link smoothScroll">COURSES</a>
                    </li>
                    <li class="nav-item">
                        <?php echo $y;?>
                    </li>
                    <li class="nav-item">
                        <a href="pricing.php" class="nav-link contact">PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link contact' target='new' href='home.php'>ENTER CLASS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>