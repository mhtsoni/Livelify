<?php
include 'header.php';
include 'config.php';
?>
<style>
    @import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css);
    @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

    /* Global Button Styles */
    a.animated-button:link, a.animated-button:visited {
        position: relative;
        margin: 30px auto 0;
        padding: 14px 15px;
        color: #fff;
        font-size:14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        letter-spacing: .08em;
        border-radius: 0;
        text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease;
    }
    a.animated-button:link:after, a.animated-button:visited:after {
        content: "";
        position: absolute;
        height: 0%;
        left: 50%;
        top: 50%;
        width: 150%;
        z-index: -1;
        -webkit-transition: all 0.75s ease 0s;
        -moz-transition: all 0.75s ease 0s;
        -o-transition: all 0.75s ease 0s;
        transition: all 0.75s ease 0s;
    }
    a.animated-button:link:hover, a.animated-button:visited:hover {
        color: #FFF;
        text-shadow: none;
    }
    a.animated-button:link:hover:after, a.animated-button:visited:hover:after {
        height: 450%;
    }
    a.animated-button:link, a.animated-button:visited {
        position: relative;
        margin: 30px auto 0;
        padding: 14px 15px;
        color: #fff;
        font-size:14px;
        border-radius: 0;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        letter-spacing: .08em;
        text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease;
    }

    a.animated-button.thar-three {
        color: #fff;
        cursor: pointer;
        display: block;
        position: relative;
        border: 2px solid #F7CA18;
        transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
    0s;
    }
    a.animated-button.thar-three:hover {
        color: #000 !important;
        background-color: transparent;
        text-shadow: nthree;
    }
    a.animated-button.thar-three:hover:before {
        left: 0%;
        right: auto;
        width: 100%;
    }
    a.animated-button.thar-three:before {
        position: absolute;
        top: 0px;
        right: 0px;
        height: 100%;
        width: 0px;
        z-index: -1;
        content: '';
        color: #000 !important;
        background: #F7CA18;
        transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
    0s;
    }

</style>
 <?php
    if($_GET){
            if(isset($_SESSION['username'])){
                $x=$_SESSION['username'];
                $query="SELECT*FROM users WHERE username='$x'";
                $row=mysqli_query($con,$query);
                $premium=mysqli_fetch_array($row);
                if($premium['premium_member']=="false"){
                    echo "<h4 style='color:blue;text-align:center'>You Need A Premium Account To Enroll In The Courses</h4>
                    <script>window.setTimeout(function(){window.location.href = 'pricing.php';}, 3000);</script>
                    ";
                }
            else{
                $y=$_GET['course_id'];
                $query="SELECT*FROM videos WHERE course_id='$y' ORDER BY id DESC";
                $row=mysqli_query($con,$query);
                echo "
    <form action='video.php' method='POST'>
    <div style='text-align:center; display:block; margin: 25px 0px;'>";
                while($iframe=mysqli_fetch_array($row)){
                echo "
        <a style='display:inline-block; padding:0px;' href='#' class='btn btn-sm animated-button thar-three'><button style='padding:10px; color:blue;background-color:transparent; border:none;' type='submit' name= 'video' value='".html_entity_decode($iframe['code'])."'>".$iframe['video_title']."
    </button></a>";
                }
                echo "
    </div>
    </form>";
            }
        }
        else{
            echo "<h4 style='color:blue;text-align:center'>Please LogIn First</h4>
                    <script>window.setTimeout(function(){window.location.href = 'login.php';}, 3000);</script>
                    ";
        }
        }
    include 'footer.php';
    ?>
    

