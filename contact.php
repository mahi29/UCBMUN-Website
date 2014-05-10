<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact | UCBMUN XVIII</title>
    <?php include("head.php"); ?>
  </head>

  <body>
    <?php include('menu.php'); ?>
    <div class="span3 well primaryWell">
        <h2> Contact Us </h2>
        <h5 class="muted"> To contact a specific secreteriat member, click on their name below </h5>
        <hr class="contactHR" />
        <h4> Secretary General: </h4>
        <div class="positionName"><a href="mailto:sg@ucbmun.org"> Adam B. Spaulding</a> </div>
        <hr class="contactHR" />
        <h4> Deputy Secretary General: </h4>
        <div class="positionName"><a href="mailto:dsg@ucbmun.org"> Anirudh Garg </a> </div>
        <hr class="contactHR" />
        <h4 style="font-size:17px"> Directors of Business Relations: </h4>
        <div class="positionName"> <a href="mailto:dbr@ucbmun.org">Redha Qabazard &amp Harsh Shah</a></div>
       
        <hr class="contactHR" />
        <h4> Chief of Staff - External: </h4>
        <div class="positionName" style="padding-bottom:5px"> <a href="mailto:cos-external@ucbmun.org">Akash Sharma </a></div>
    </div>

    <div class="span7 offset1 well primaryWell">
        <h2> Contact Form </h2>
        <h5 class="muted">In case you are not sure about who to contact, 
            please go ahead and fill out the form below and we will get back to you ASAP!
        </h5>
        <hr class="contactHR" />
        <?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">Thank you for your message. We will get back to ASAP!</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) {
            echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";
        } 
        ?>  
        <form method="POST" action="verifyLogin.php">
            <fieldset>
                <label> Name * </label>
                <input name="contact_name" type="text" placeholder=""> 
                <label> Email * </label>
                <input name="contact_email" type="email" placeholder="bob@builder.com">
                <label> College/University </label>
                <input name="contact_school" type="text" placeholder="">

                <label> Message  </label>
                <textarea name="contact_message" rows="5" class="field span7" style="resize:vertical" id="messageArea"></textarea><br />
                <label class="checkbox">
                  <input type="checkbox" name="updateCheckbox"> Send me updates on registration and other important events.
                </label><br />                  
                 <script type="text/javascript">
                     var RecaptchaOptions = {
                        theme : 'blackglass'
                     };
                 </script>
                <?php
                  require_once('recaptchalib.php');
                  $publickey = "6LcW--MSAAAAAP-bZrEbvsKfM33Rq2MGbBhgCmBy"; //Public Key
                  echo recaptcha_get_html($publickey);
                ?>
                <h6 style="color:red"> * Required </h6>
              
                    <input type="hidden" name="save" value="contact">  
                    <button type="submit" class="btn">Submit</button>
            </fieldset>
        </form>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
