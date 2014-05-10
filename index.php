<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UCBMUN XVIII</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mahith Amancherla">
    <!-- CSS styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon0.png" type="image/x-icon">
    <link rel="icon" href="img/favicon0.png" type="image/x-icon">
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-42656598-2']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  </head>
  <body>

    <!-- NAVBAR -->
    <?php include("menu.php"); ?> 

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/GoldenGate.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>UCBMUN XVIII</h1>
              <p class="lead">
                Welcome to UC Berkeley's intercollegiate MUN conference.<br> 
		Join us in San Francisco, CA from March 6-9, 2014.<br>
                Registration is now closed.
              </p>
              <!--<a class="btn btn-large btn-primary" href="registration1.php">Register Now!</a>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/SFNight.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="secretariatCarousel">The Secretariat</h1>
              <p class="secretariatCarousel lead">Combined in our Secretariat we have over 60 years of Model UN experience across all circuits and nearly every continent.</p>
              <a class="btn btn-large btn-primary" href="secretariat.php">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/carousel3.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Learning Experience</h1>
              <p class="lead">
                UCBMUN XVIII allows undergraduate students an opportunity to apply what they research.
                Combining academic study and a social atmosphere allows delegates better understanding of material.
              </p>
              <a class="btn btn-large btn-primary" href="ddp.php">Check it out</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <div class="container marketing">
      <div class="row">
        <div class="span4">
            <a href="letter.php">
              <img class="img-circle" data-src="holder.js/170x170" alt="140x140" style="width: 170px; height: 170px;" src="img/secretariatPhotos/adam.jpg">
            </a>
            <h2>Letter from the <br />Secretary-General</h2>
        </div><!-- /.span4 -->
        <div class="span3">
          <h2><center>Updates</center></h2>        
            <ul>
              <a href="rules.php" class="nolink">
                <li>Rules and Procedures are now up on the site. Familiarize yourself before coming to UCBMUN XVIII!</li>
              </a> 
              <li>Registration is now closed!</li> 
            </ul>         
        </div><!-- /.span4 -->
        <div class="span4">
          <a href="rules.php">
            <img class="img-circle" data-src="holder.js/170x170" alt="170x170" style="width: 170px; height: 170px;" src="img/registration.jpg">
          </a>
          <h2 class="nolink">Rules and Procedures</h2>  

        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <!--<img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png">-->
        <a href="committees.php">
          <h2 class="featurette-heading">Unique Committees. <span class="muted">13 different ways to solve global problems.</span></h2>
          <p class="lead nolink">
            The committees at UC Berkeley Model United Nations 
            Conference XVIII address a breadth of issues, aiming 
            to challenge delegates and allow for productive debate. 
            The conference is divided into three sets of committees: 
            Specialized Bodies and General Assembly, Crisis Committees, and, for the first time ever, quadruple Joint-Crisis Committees.
          </p>
        </a>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <a href="exploresf.php">
          <h2 class="featurette-heading">San Francisco. <span class="muted">And the Bay Area.</span></h2>
          <p class="lead nolink">
            The birthplace of the UN, where championship caliber sports teams play
            and a diverse set nationalities and cultures call home. Situated in the heart 
            of the city, UCBMUN XVIII is perfectly placed for delegates to discover 
            all parts of the city. With a variety of social events, delegates will 
            explore the city taking in the sights and sounds of one of the world’s 
            most famous cities. Tours around the Bay Area will let delegates see 
            the city that beatniks, immigrants, and tech start ups have all called home.
        </p>
      </a>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <a href="secretariat.php">
          <h2 class="featurette-heading">Experienced Staff. <span class="muted">Working to help you.</span></h2>
          <p class="lead nolink">
            The secretariat of UCBMUN XVIII comes from across the globe, from far-east 
            Asia to Orange County. The conference staff brings with it experience in both the high school 
            circuit and the collegiate circuit. Training provided the 
            entire school year ensures that all staff can provide an 
            incredible experience to our delegates. Members are constantly available to help delegates 
            enjoy, learn, and excel at UCBMUN XVIII.
          </p>
        </a>
      </div>

      <hr class="featurette-divider">

      <!-- END FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>  
  </body>
</html>
