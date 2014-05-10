<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registration | UCBMUN XVIII</title>
    <?php include("head.php"); ?>

  </head>

  <body>

      <!-- NAVBAR -->
    <?php include("menu.php"); ?> 
      <?php
        session_start();
        if(session_is_registered(username)){
          echo '  
          <div class="well span4 offset4" style="margin-top:150px">
            <center>
              <p> 
                 Hold up! You can not register twice! <br />
                 But if you really want something else to do <br />
                 you can watch <a href="http://www.youtube.com/watch?v=vD186euK58Y" target="_blank">this</a>
              </p>
            </center>
          </div> 
          <script src="http://code.jquery.com/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script> 
          ';
          die();
        }
      ?>
      <div class="well span8 offset2 primaryWell">
        <h3><center>Registration</center></h3>
        <p>
          Welcome! Please fill out the form and read the terms of conditions to complete your school's 
          registration for UCBMUN XVIII. In case of any questions or concerns regarding registration, please 
          contact <a href="mailto:cos-external@ucbmun.org">cos-external@ucbmun.org</a>.
        </p>
        <hr>
        <p>
          We have received an unexpectedly high number of registrations for our conference and have to open a waitlist to accommodate for schools
          still interested in coming. Currently, all crisis positions are filled but we have space in the general assembly committee. Schools who 
          still wish to attend have two options:
          <ol>
            <li>Waitlist for committee positions. It is possible to still get those positions as schools cancel their registration or fail to meet payment deadlines.</li>
            <li>Sign up for the General Assembly committee. The General Assembly continues to represent the most pure form of the United Nations original charter, and it is for that reason we are happy to continue to register schools who want to participate in that form of debate.</li>
          </ol>
          If you would like to be added to the waitlist for all committees, please register below.
          If you would like to register for General Assembly positions please feel free to email 
          <a href="mailto:cos-external@ucbmun.org">cos-external@ucbmun.org</a> and <a href="mailto:sg@ucbmun.org">sg@ucbmun.org</a> 
          with your contact information and the number of delegates you would like to register.
        </p>
      </div>
      <div class="well span6 offset3">
        <br /><br />    
        <form class="form-horizontal" method="post" action="registrationLoginCheck.php" id="registrationForm">
         <h3><center> Contact Information </center> </h3> 
          <?php
           if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">"."Thank you for registering for UCBMUN XVIII. We look forward to seeing you in March."."</div>";  

           if (isset($_GET['e'])) {
                echo "<div class=\"alert alert-error\" style=\"text-align:center\">".$_GET['e']."</div>";
            }   
          ?>           
          <div class="control-group">
            <label class="control-label" for="inputPrimaryContact">Head Delegate / Faculty Advisor</label>
            <div class="controls">
              <input type="text" id="inputPrimaryContact" name="primaryName" placeholder="John Doe">
            </div>
          </div>

          <div class="control-group" >
            <label class="control-label" for="inputPrimaryEmail">Email</label>
            <div class="controls">
              <input type="email" id="inputPrimaryEmail" name="primaryEmail" placeholder="john@doe.com">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="inputPrimaryNumber">Phone Number</label>
            <div class="controls">
              <input type="tel" id="inputPrimaryNumber" name="primaryPhone" placeholder="(XXX)-XXX-XXXX">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="inputSecondaryContact">Secondary Contact</label>
            <div class="controls">
              <input type="text" id="inputSecondaryContact" name="secondaryName" placeholder="Mickey Mouse">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="inputSecondaryEmail">Secondary Email</label>
            <div class="controls">
              <input type="email" id="inputSecondaryEmail" name="secondaryEmail" placeholder="mickey@mouse.com">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="inputSecondaryNumber">Secondary Phone Number</label>
            <div class="controls">
              <input type="tel" id="inputSecondaryNumber" name="secondaryPhone" placeholder="(XXX)-XXX-XXXX">
            </div>
          </div>


          <div class="control-group">
            <label class="control-label" for="inputAddress">Address</label>
            <div class="controls">
              <input type="text" id="inputAddress" name="address" placeholder="">
            </div>
          </div>
          <h3><center> Delegation Information </center></h3>
          <div class="control-group">
            <label class="control-label" for="inputUniversity">University</label>
            <div class="controls">
              <input type="text" id="inputUniversity" name="university" placeholder="">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="inputDelegation">Delegation Size</label>
            <div class="controls">          
               <input type="number" id="inputDelegation" name="size" placeholder="">
            </div>
          </div>
          <h3><center> Login Information </center></h3>
          <div class="control-group">
            <label class="control-label" for="inputUsername">Username</label>
            <div class="controls">
              <input type="text" id="inputUsername" name="username" placeholder="">
            </div>
          </div> 
          <div class="control-group">
            <label class="control-label" for="inputPassword">
              <p data-toggle="tooltip" title="Password must be at least 7 characters long">Password</p>
            </label>
            <div class="controls">
              <input type="password" id="inputPassword" onChange="checkPasswordLength();" name="password" placeholder="">
              <div style="display:inline-block" id="pwlong" class="iconCheck">
                <i class="icon-ok" id="pwlong"></i>
              </div>
              <div style="display:inline-block" id="pwshort" class="iconCheck">
                <i class="icon-remove"id="pwshort"></i>
              </div>  
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputConfirmPassword">Confirm Password</label>
            <div class="controls">
              <input type="password" id="inputConfirmPassword" onChange="checkPasswordMatch();" name="" placeholder="">
              <div style="display:inline-block" id="match" class="iconCheck">
                <i class="icon-ok" id="pwmatch"></i>
            </div>
            <div style="display:inline-block" id="nomatch" class="iconCheck">
                <i class="icon-remove"id="pwnomatch"></i>
            </div>            
            </div>
          </div>                    
          <h6 style="color:red; text-align:center"> All fields required </h6>
      </div>
      <div class="well span8 offset2">
        <h3><center>Terms of Registration</center></h3>
        <ol>
          <li>
            <b>Payments</b>
            <p>Payments should be made in the form of checks payable to:
            <address>
              <b>ASUC/UCBMUN</b><br />
		c/o LEAD Center <br />
              102 Hearst Gym MC 4500 <br />
              Berkeley, CA 94720-4500 <br />
            </address>
		[UCBMUN is sponsored by the Associated Students of the University of California, a 501c3 Non-Profit Organization supporting student initiated activities]
          </li>
	  <br />
          <li>
            <b>Proof of Payment </b>
            <p>
              In order to ease registration and prevent lost checks we ask that you send us Proof of Payment. 
              Proof of Payment can either be a copy or a photo of the completed check or the USPS/UPS/FedEx 
              tracking number, sent electronically to <a href="mailto:cos-external@ucbmun.org">cos-external@ucbmun.org</a>. 
              The Proof of Payment is due within 20 days of Early or Normal registration (and before BayMUN 
              if you wish to attend), and within 7 days of late registration. If you fail to send Proof of 
              Payment by that date and have not communicated with our Chief of Staff External, you will not 
              be allowed to participate in UCBMUN XVIII. In case of special circumstances, please contact 
              our Chief of Staff - External.
            </p>
          </li>

          <li>
            <b> Delegation Change Guidelines </b>
            <p>
              We understand that change happens and sometimes members back out of events for various reasons. 
              If you wish to change your delegation you must inform the Chief of Staff - External within 4 weeks 
              of your registration or February 14th whichever is earlier in order to receive a full refund. If 
              you reduce the size of your delegation UCBMUN will refund your delegation on the first day of the 
              conference. If you increase the size of your delegation you must bring a check for the additional 
              amount owed on the first day of the conference.

            </p>
          </li>
            <b> Enforcement Policy </b>
            <p>
              We will work with you to ensure that every member of your delegation is able to participate. We 
              will not allow any delegates to participate if they have not paid within the appropriate timeframe 
              and not contacted our Chief of Staff External. If you have any questions feel free to 
              <a href="http://www.ucbmun.org/contact-us/"> contact us</a>.
            </p>
          </li>          
        </ol>
        <br />    
        <br />

          <?php
            require_once('recaptchalib.php');
	    $publickey = '6Lf-2OYSAAAAAHynuBI0atSN53Tfphfr0KJn4Hnb'; //Public Key#2
            echo recaptcha_get_html($publickey);
          ?>
          <div class="control-group">
            <div class="controls">
              <button  class="btn btn-success" style="margin-top:20px;margin-left:300px" id="submitForm">Register</button>
            </div>
            <h6 style="margin-left:200px" class="muted"> By clicking 'Register', you agree to the Terms of Registration on this page </h6>
          </div>
          </form>

      </div>




    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function checkPasswordMatch() {
            var password = $("#inputPassword").val();
            var confirmPassword = $("#inputConfirmPassword").val();
            if (password != confirmPassword) {
                $("#match").addClass('iconCheck');
                $("#nomatch").removeClass('iconCheck');
            }              
            else{
                $("#match").removeClass('iconCheck');
                $("#nomatch").addClass('iconCheck');
            }
        }
        $(document).ready(function () {
           $("#inputConfirmPassword").keyup(checkPasswordMatch);
        });           
    </script>

    <script type="text/javascript">
        function checkPasswordLength() {
            var password = $("#inputPassword").val();
            var pwLen = password.length;
            if (pwLen < 7) {
                $("#pwlong").addClass('iconCheck');
                $("#pwshort").removeClass('iconCheck');
            }              
            else{
                $("#pwlong").removeClass('iconCheck');
                $("#pwshort").addClass('iconCheck');
            }
        }
        $(document).ready(function () {
           $("#inputPassword").keyup(checkPasswordLength);
        });           
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
           $("#submitForm").click(function() {
              var empties = $('input').filter(function () {
              return ($.trim($(this).val()) == '');
              });
              if (empties.length > 0) {
                alert("Please fill out all the fields! ");
                return false;
              }
              var password = $("#inputPassword").val();
              var confirmPassword = $("#inputConfirmPassword").val();
              if ($('#match').hasClass('iconCheck')) {
                alert("Your passwords do not match!");
                return false;
              }
              if (password != confirmPassword) {
                alert("Your passwords do not match!");
                return false;
              }
              if ($('#pwlong').hasClass('iconCheck')) {
                alert("Your password is not long enough. It has to be at least 7 characters long!");
                return false;
              } 
               $("#registrationForm").submit();
           });
        });
    </script>    
    <script>

    </script>
  </body>
</html>
