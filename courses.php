
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./courses.css">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <h2 style='text-align:center; color:green'>SELECT COURSE !</h2>
        <?php
        include 'config.php';
        $query="SELECT*FROM courses";
        $row=mysqli_query($con,$query);
        echo '<div class="container">
                <div class="cards">';
        while($courses=mysqli_fetch_array($row)){
            $x="course_id";
            echo '<form class="card" action="videos.php" method="get">
                      <span class="card-header" style="background-color:green;">
                        <span class="card-title">
                            <h3>'.$courses["course_name"].'</h3>
                        </span>
                      </span>
                      <span class="card-summary">
                        '.$courses["short_description"].'
                      </span>
                      <span class="card-meta">
                        '.$courses["date"].'
                      </span>
                        <button class="card-title" type="submit" name="course_id" value='.$courses[$x].'>ENROLL NOW</button>
                  </form>';
        }
        echo '
            </div>
        </div>';
        ?>
        
    <?php
    include 'footer.php';
    ?>
    </body>
</html>