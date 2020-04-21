<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>
    <head>

        <link rel="stylesheet" href="./courses.css">
        <style>
            body{
            margin: 0px;
            }
            #video iframe{
                width:70vw;
                height: 90vh;
                margin: 25px 25px 0px -10px;
            }
            #livechat{
                width:20vw;
                border:1px solid black;
            }
            .col1{
                display: inline-block;
                width:70%;
            }
            .col2{
                display: inline-block;
                width:20%;
            }
            @media only screen and (max-width: 1300px) {
            #video iframe{
                width:100%;
                height:350px;
                }
            .col2{
                display:none;
            }
            }
        </style>
    </head>
    <body>

        <?php
            include 'header.php';
        ?>
        <?php
        if($_POST){
            if(isset($_SESSION['username'])){
                $x=$_SESSION['username'];
                $query="SELECT*FROM users WHERE username='$x'";
                $row=mysqli_query($con,$query);
                $premium=mysqli_fetch_array($row);
                if($premium['premium_member']=="false"){
                    echo "<h4 style='color:blue;text-align:center'>You Need A Premium Account To Enroll In The Courses</h4>
                    <script>window.setTimeout(function(){window.location.href = 'PayUMoney_form.php';}, 3000);</script>
                    ";
                }
            else{
                echo "
<div style='border:1px solid black;text-align:center; width:100%;'>
    <div class='col1'>
        <div id='video'>".html_entity_decode($_POST['video'])."</div>
    </div>
    <div class='col2'>
        <iframe  src='https://minnit.chat/MSCLASSES?embed&nickname=' style='border:none;height:500px;' allowTransparency='true'></iframe>
    </div>
</div>
                
                
                
                
                ";
            }
        }
        else{
            echo "<h4 style='color:blue;text-align:center'>Please LogIn First</h4>
                    <script>window.setTimeout(function(){window.location.href = 'login.php';}, 3000);</script>
                    ";
        }
        }
        ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
         $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
    <?php
    include 'footer.php';
    ?>
    </body>
</html>