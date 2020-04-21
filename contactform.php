<?php
    include 'header.php';
    if($_POST){
        $a=$_POST["name"];
        $b=$_POST["email"];
        $c=$_POST["phone"];
        $d=$_POST["message"];
        include 'config.php';
        $sql="INSERT INTO contact (name,email,phone,message) VALUES ($a, $b, $c,$d);";
        mysqli_query($con,$sql);
    }
?>
<head>
    <style>
        body {
          padding: 20px 0;
          font-family: Lato, sans-serif;
        }
    </style>
</head>
<body>

  <div class="container">

    <div class="row">

      <div class="col-lg-8 col-lg-offset-2">

        <h1><a href="index.php">Contact Us Now</a></h1>

        <p class="lead"><a href="index.php">M.S Classes is the best known brand in the world of teaching and making carrers.</a>
        <form id="contact-form" method="post" action="contactform.php" role="form">

        <div class="messages"></div>

        <div class="controls">

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_name">Firstname *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_phone">Phone</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Message *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="text-muted"><strong>*</strong> These fields are required. Contact us now and get started with <a href="index.php" target="_blank">M.S CLASSES</a>.</p>
            </div>
          </div>
        </div>

        </form>

      </div>

    </div>

  </div>
  
    <?php
    include 'footer.php';
    ?>
    <script>
        $(function() {
  // init the validator
  // validator files are included in the download package
  // otherwise download from http://1000hz.github.io/bootstrap-validator

  $("#contact-form").validator();

  // when the form is submitted
  $("#contact-form").on("submit", function(e) {
    // if the validator does not prevent form submit
    if (!e.isDefaultPrevented()) {
      var url = "contact.php";

      // FOR CODEPEN DEMO I WILL PROVIDE THE DEMO OUTPUT HERE, download the PHP files from
      // https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form

      var messageAlert = "alert-success";
      var messageText =
        "Your message was sent, thank you. I will get back to you soon.";

      // let's compose Bootstrap alert box HTML
      var alertBox =
        '<div class="alert ' +
        messageAlert +
        ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
        messageText +
        "</div>";

      // If we have messageAlert and messageText
      if (messageAlert && messageText) {
        // inject the alert to .messages div in our form
        $("#contact-form").find(".messages").html(alertBox);
        // empty the form
        $("#contact-form")[0].reset();
      }

      return false;
    }
  });
});
    </script>
</body>