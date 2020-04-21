<?php
    include 'header.php';
    if(!isset($_SESSION['username'])){
            echo '<h1 style="text-align:center">Please Login First To Continue.....</h1>
                <script>window.setTimeout(function(){window.location.href = "login.php";
            }, 3000);
               </script>';
               exit();
        }
    else{
        include 'config.php';
        $x=$_SESSION['username'];
        $sql="SELECT*FROM users WHERE username='$x'";
        $row=mysqli_query($con,$sql);
        $details=mysqli_fetch_array($row);
    }
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">

      <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4CAF50;
}

#container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 10px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact input,select{
    width: 100%;
    height:30px;
}
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
      </style>
</head>
<body>
	<h1 style="text-align:center;margin-top:20px; color:white;">Verify Your Details</h1>
	<pre>
	</pre>
    <div id="container"> 
	<form id="contact" method="post" action="pgRedirect.php">
					<input readonly hidden id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
				
					<input readonly hidden id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
				
					<input readonly hidden id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
					
                    <input readonly hidden id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
            
                    <fieldset>
                    SELECT YOUR PLAN:<br>
                    <select title="TXN_AMOUNT" name="TXN_AMOUNT">
                    <option value='3542.91'>1 MONTH CLASSES FOR 49.99$</option>
                    <option value='17688.67'>6 MONTHS CLASSES FOR 249.99$</option>
                    <option value='28302.29'>1 YEAR CLASSES FOR 399.99$</option>
                    </select>
                    </fieldset>
                    <fieldset>
                    Email:<br>
                    <input readonly name="EMAIL" id="email" value="<?php echo $details['email']; ?>" />
                    </fieldset>
                    <fieldset>
                    Phone:<br>
                    <input readonly name="MSISDN" value="<?php echo $details['phone']; ?>" />
                    </fieldset>
                    <button id="contact-submit" type="submit" value="CheckOut" onclick="">Submit</button>
	</form>
    </div>
      <?php
      include 'footer.php';
      ?>
</body>
</html>