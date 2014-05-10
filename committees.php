<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Committees | UCBMUN XVIII</title>
   	<?php include("head.php"); ?>
</head>
<body>
	<?php include("menu.php"); ?>
	<div class="mainDiv">
		<center>
			<h1 style="color:#ffffff"> Committees </h1>
		</center>
	</div>


	<div class="container">
		<center>
		<hr />
		<ul class="thumbnails">
			<h3 class="committee-subtitle"> Specialized Bodies and General Assembly</h3>
			<li class="span3"> 
				<div class="thumbnail committee-thumbnail">
					<a href="committee0.php">
						<img id="image0"src="img/committeePictures/echr.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title">European Court of Human Rights </h3>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail committee-thumbnail">
					<a href="committee1.php">
						<img id="image1"src="img/committeePictures/unga.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title">UN General Assembly - 11th Emergency Session </h3>					
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail committee-thumbnail">
					<a href="committee2.php">
						<img id="image2"src="img/committeePictures/nss.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Nuclear Security Summit </h3>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail committee-thumbnail">
					<a href="committee3.php">
						<img id="image3"src="img/committeePictures/cfs.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title">Committee on World Food Security </h3>
				</div>
			</li>
		</ul>
		<hr style="margin-top:130px"/>		
		
		<ul class="thumbnails">
		<h3 class="committee-subtitle">Crisis Committees</h3>			
			<li class="span4">
				<div class="thumbnail committee-thumbnail">
					<a href="committee4.php">
						<img id="image4"src="img/committeePictures/unsc.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title">UN Security Council</h3>
				</div>
			</li>
			<li class="span4">
				<div class="thumbnail committee-thumbnail">
					<a href="committee5.php">
						<img id="image5"src="img/committeePictures/chile.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Pinochet's Chile </h3>
				</div>
			</li>
			<li class="span4">
				<div class="thumbnail committee-thumbnail">
					<a href="committee6.php">
						<img id="image6"src="img/committeePictures/chevron.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Chevron Executive Board </h3>
				</div>
			</li>
			<li class="span4" style="margin-left:225px">
				<div class="thumbnail committee-thumbnail">
					<a href="committee7.php">
						<img id="image7"src="img/committeePictures/srilanka.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Sri Lanka: 2006</h3>
				</div>
			</li>
			<li class="span4">
				<div class="thumbnail committee-thumbnail">
					<a href="committee8.php">
						<img id="image8"src="img/committeePictures/adhoc.jpeg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Ad-Hoc</h3>
				</div>
			</li>
		</ul>
		<hr style="margin-top:70px"/>
		<ul class="thumbnails">
		<h3 class="committee-subtitle">Joint-Crisis Committees</h3>						
			<li class="span3">
				<div class="thumbnail committee-thumbnail">
					<a href="committee9.php">
						<img id="image9"src="img/committeePictures/cia.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Central Intelligence Agency</h3>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail committee-thumbnail">
					<a href="committee10.php">
						<img id="image10"src="img/committeePictures/mss1.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Ministry of State Security </h3>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail committee-thumbnail">
					<a href="committee11.php">
						<img id="image11"src="img/committeePictures/mossad2.png" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> Mossad</h3>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail committee-thumbnail">
					<a href="committee12.php">
						<img id="image12"src="img/committeePictures/vevak.jpg" class="committee-image img-circle"/>
					</a>
					<h3 class="committee-title"> VEVAK </h3>     
				</div>
			</li>
		</ul>
		</center>
	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>	
    <script src="js/committee.js"></script>
</body>
</html>

