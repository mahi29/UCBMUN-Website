<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Explore SF | UCBMUN XVIII</title>
   	<?php include("head.php"); ?>
</head>
<body>
	<?php include("menu.php"); ?>
	<div class="mainDiv">
		<center>
			<h1 style="color:#ffffff"> Explore San Francisco </h1>
		</center>
	</div>
		<div class="container">
		<ul class="thumbnails">
			<!-- Alcatraz Island-->
			<li class="span3"> 
				<div class="thumbnail exploreThumbnail">
					<img src="img/alcatraz.jpg" class="image"/>
					<a href="#alcatrazModal" data-toggle="modal"><img src="" class="overlayImage" id="alcatrazImage"/>
					<h3 class="imageTitle" id="alcatrazTitle"> Alcatraz Island </h3></a>

					<!-- Modal -->
					<div id="alcatrazModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.alcatrazcruises.com/"target="_blank"><h3 id="myModalLabel"><u>Alcatraz Island</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 9AM - 4:30PM <br />
					    	<b> Price: </b> $30 <br />
					    	<b> Phone: </b> (415)-561-4900
					    </p>
					    <p>
					    	Once home to some of America’s most notorious criminals, 
					    	the federal penitentiary that operated here from 1934 to 1963 brought a dark mystique to the Rock. 
					    	The presence of infamous inmates like Al “Scarface” Capone, and the “Birdman” Robert Stroud helped 
					    	to establish the island’s notoriety. To this day, Alcatraz is best known as one of the 
					    	world’s most legendary prisons.
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Angel Island -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/angel_island.jpg" class="image"/>
					<a href="#angelIslandModal" data-toggle="modal"><img src="" class="overlayImage" id="angelIslandImage"/>
					<h3 class="imageTitle" id="angelIslandTitle"> Angel Island </h3></a>

					<!-- Modal -->
					<div id="angelIslandModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://angelisland.org/"target="_blank"><h3 id="myModalLabel"><u>Angel Island</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Price: </b> $7 <br />
					    	<b> Phone: </b> (415)-438-8361
					    </p>
					    <p>
							Angel Island is a California Historical Landmark, previously
							used for militarily forts and an immigration station. Between 1910 and 1940,
							this immigration station process approximately 1 million Asian immigrants
							entering the United States. Sitting as the largest island in the San Francisco
							area, Angel Island provides a beautiful view of San Francisco and its
							neighboring cities. 
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Golden Gate Park -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/golden_gate_park.jpg" class="image"/>
					<a href="#goldenGateParkModal" data-toggle="modal"><img src="" class="overlayImage" id="goldenGateParkImage"/>
					<h3 class="imageTitle" id="goldenGateParkTitle"> Golden Gate Park</h3></a>

					<!-- Modal -->
					<div id="goldenGateParkModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.golden-gate-park.com/" target="_blank"><h3 id="myModalLabel"><u>Golden Gate Park</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> M-Sat: 9:30-5; Sunday: 11-5 <br />
					    	<b> Price: </b> Free <br />
					    	<b> Phone: </b> (415)-831-2700
					    </p>
					    <p>
							The Golden Gate Park is a great place to see many
							attractions all in one location! This large vicinity holds many activities such
							as Segway tours, a carousel, the de Young museum, Japanese tea garden and many
							more! The park is also known to hold many free concerts and is a great place to
							enjoy some fun in the sun! 
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Exploratorium -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/exploratorium.jpg" class="image"/>
					<a href="#exploratoriumModal" data-toggle="modal"><img src="" class="overlayImage" id="exploratoriumImage"/>
					<h3 class="imageTitle" id="exploratoriumTitle"> The Exploratorium </h3></a>

					<!-- Modal -->
					<div id="exploratoriumModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.exploratorium.edu/" target="_blank"><h3 id="myModalLabel"><u>Exploratorium: The Museum of Science, Art and Human Perception</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 10AM - 5PM <br />
					    	<b> Price: </b> $25 <br />
					    	<b> Phone: </b> (415)-528-4444 <br />
					    	<b> Location: </b> Pier 15(Embarcadero at Green St) <br />
					    	<b> Distance: </b> Approx 1 mile (15 min walking from the hotel)
					    </p>
					    <p>
							Become a science explorer at San Francisco’s most unique
							learning laboratory! The Exploratorium takes education to a whole new level
							with its hands on interactive exhibits and attraction. Founded by the famous
							physicist Frank Oppenheimer, this museum provides entertainment for all ages!
							Its latest attraction, on Thursday nights, is dedicated to guests 21 and over. 
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- de Young Museum -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/deyoungmuseum.jpg" class="image"/>
					<a href="#deyoungmuseumModal" data-toggle="modal"><img src="" class="overlayImage" id="deyoungmuseumImage"/>
					<h3 class="imageTitle" id="deyoungmuseumTitle"> de Young Museum </h3></a>

					<!-- Modal -->
					<div id="deyoungmuseumModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://deyoung.famsf.org/" target="_blank"><h3 id="myModalLabel"><u>de Young Museum</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 9:30AM - 5:15PM <br />
					    	<b> Price: </b> $7(students), $11(adults)<br />
					    	<b> Phone: </b> 415-750-3600 <br />			    	
					    	<b> Location: </b> 50 Hagiwara Tea Garden Drive (within Golden Gate Park)<br />
					    	<b> Distance: </b> 6 miles (approx. 45 min by public transit from the hotel)
					    </p>
					    <p>
							When visiting the Golden Gate Park, stop by the de Young Museum! 
							The de Young is a fine arts museum well known for his exquisite 
							exhibitions and collections. Its new building, remodeled in 2005, 
							is a site to see on its own!
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Fisherman's Wharf -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/fishermanswharf.jpg" class="image"/>
					<a href="#fishermanswharfModal" data-toggle="modal"><img src="" class="overlayImage" id="fishermanswharfImage"/>
					<h3 class="imageTitle" id="fishermanswharfTitle"> Fisherman's Wharf (Pier 39) </h3></a>

					<div id="fishermanswharfModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.fishermanswharf.org/" target="_blank"><h3 id="myModalLabel"><u>Fisherman's Wharf (Pier 39)</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 10AM - 9PM <br />
					    	<b> Price: </b> Free <br />
					    	<b> Number: </b> (415)-981-7437 <br />
					    	<b> Location: </b> Pier 39 Concourse, San Francisco, CA <br />
					    	<b> Distance: </b> 1.6 miles (approx 20 by walking from the hotel)
					    </p>
					    <p>
							Fisherman’s Wharf is conveniently located right beside Pier 39. 
							This historic part of San Francisco holds great entertainment, 
							shopping, and delicious dining! Come enjoy a nice big bread bowl 
							of clam chowder. Fisherman’s Wharf is also a great place to catch 
							a ride on a cable car! 
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Golden Gate Bridge -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/goldengate.jpg" class="image"/>
					<a href="#goldengateModal" data-toggle="modal"><img src="" class="overlayImage" id="goldengateImage"/>
					<h3 class="imageTitle" id="goldengateTitle"> Golden Gate Bridge </h3></a>

					<!-- Modal -->
					<div id="goldengateModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.goldengatebridge.org/" target="_blank"><h3 id="myModalLabel"><u>Golden Gate Bridge</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 5AM - 6:30PM <br />
					    	<b> Price: </b> $5(students), $7(adults)<br />
					    	<b> Number: </b> (415)-921-5858<br />
					    </p>
					    <p>
							The Golden Gate Bridge connects San Francisco to California’s
							northern counties! With its gigantic 746 foot tall towers and more than 10
							million annual visitors, the bridge has acted as San Francisco’s most iconic landmark.
							Visitors can run or rent bikes along the bridge or visit the all new Bridge
							Plaza for visitor experiences located at the south east end. 
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Cal Academy -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/calacademy.jpg" class="image"/>
					<a href="#calacademyModal" data-toggle="modal"><img src="" class="overlayImage" id="calacademyImage"/>
					<h4 class="imageTitle" id="calacademyTitle"> California Academy of Sciences </h4></a>

					<!-- Modal -->
					<div id="calacademyModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.calacademy.org/" target="_blank"><h3 id="myModalLabel"><u>California Academy of Sciences</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 9:30AM - 5PM; Sundays: 11AM-5PM<br />
					    	<b> Price: </b> $29.95<br />
					    	<b> Number: </b> (415)-379-8000 <br />
					    	<b> Location: </b> 55 Music Concourse Dr, San Francisco, CA 94118 <br />
					    	<b> Distance: </b> 6 miles (approx 45 min by public transit from the hotel)
					    </p>
					    <p>
							The California Academy of sciences is one of the largest museums 
							exhibiting the natural history of the world. Its staff and faculty 
							are motivated by two questions: How did life on Earth develop and 
							how will we sustain life on Earth? This entertaining and interactive 
							music will keep you informed of the latest research through their 
							exciting venues, exhibits and animals.					    
						</p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Lombard Street-->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/lombardstreet.jpg" class="image"/>
					<a href="#lombardstreetModal" data-toggle="modal"><img src="" class="overlayImage" id="lombardstreetImage"/>
					<h3 class="imageTitle" id="lombardstreetTitle"> Lombard Street </h3></a>

					<!-- Modal -->
					<div id="lombardstreetModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://gocalifornia.about.com/od/casfmenu/a/lombard.htm" target="_blank"><h3 id="myModalLabel"><u>Lombard Street</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> All hours <br />
					    	<b> Price: </b> Free <br />
					    	<b> Location: </b> Lombard St <br />
					    	<b> Distance: </b> 2.7 mi (approx 25 min by public transit from the hotel)
					    </p>
					    <p>
							Lombard Street is famous for being San Francisco’s “crookedest”street 
							with eight tight hairpin turns. This street is located on a steep hill, 
							embellished with the most beautiful and exotic flowers. Its beauty is 
							known worldwide and has made appearances in many films and television series!
						</p>
					  </div>
					</div>
				</div>
			</li>
			<!--Powell St-->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/cablecars.jpg" class="image"/>
					<a href="#cablecarsModal" data-toggle="modal"><img src="" class="overlayImage" id="cablecarsImage"/>
					<h3 class="imageTitle" id="cablecarsTitle"> Powell St. Cable Cars </h3></a>

					<!-- Modal -->
					<div id="cablecarsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.sfcablecar.com/" target="_blank"><h3 id="myModalLabel"><u>Powell St. Cable Cars</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 10AM - 5PM <br />
					    	<b> Price </b> $5 <br />

					    </p>
					    <p>
							The San Francisco cable car system is the world’s last
							manually operated cable car system! This San Francisco icon once has twenty
							three lines which were established in 1873, with only three currently
							remaining. These lines are on Powell-Hyde, Powell-Mason, and California Street.
							The cable cars are a fun way to visit San Francisco’s most touristic
							attractions such as the Golden Gate Bridge and Fisherman’s Wharf. 
				    	</p>
					  </div>
					</div>
				</div>
			</li>
			<!--Ghiradelli Square -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/ghiradelli.jpg" class="image"/>
					<a href="#ghiradelliModal" data-toggle="modal"><img src="" class="overlayImage" id="ghiradelliImage"/>
					<h3 class="imageTitle" id="ghiradelliTitle"> Ghiradelli Square</h3></a>

					<!-- Modal -->
					<div id="ghiradelliModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.ghirardellisq.com/" target="_blank"><h3 id="myModalLabel"><u>Ghiradelli Square</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 9AM - 11PM <br />
					    	<b> Number: </b> (415) 775-5500<br />
					    	<b> Location: </b> 900 North Point Street <br />
					    	<b> Distance: </b> 1.3 miles (approx 25 min walk from the hotel);
					    </p>
					    <p>
							Calling all chocolate lovers! Ghirardelli Squre is a historic San Francisco visitor attraction offering shopping,
							waterfront dining, family events, Ghirardelli chocolate
							and walking tours. This landmark once featured over 40 specialty shops
							and restaurants with some of the originals still operating. Come enjoy a large
							milkshake or a sundae drenched in Ghirardelli chocolate!
 					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Coit Tower -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/coittower.jpg" class="image"/>
					<a href="#coittowerModal" data-toggle="modal"><img src="" class="overlayImage" id="coittowerImage"/>
					<h3 class="imageTitle" id="coittowerTitle"> Coit Tower </h3></a>

					<!-- Modal -->
					<div id="coittowerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://deyoung.famsf.org/" target="_blank"><h3 id="myModalLabel"><u>Coit Tower</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 10AM - 5:30PM <br />
					    	<b> Price: </b> $7 <br />
					    	<b> Number: </b> (415) 362-0808 <br />
					    	<b> Location: </b> 1 Telegraph Hill Blvd <br />
					    	<b> Distance: </b> 0.9 miles (approx 15 min walk from the hotel)
					    </p>
					    <p>
							Coit Tower is located in the Telegraph Hill neighborhood of
							San Francisco, California. Lillian Coit, a San Francisco socialite, requested that
							one-third of her estate to the city be directed to civic beautification. Built
							in 1931, Coit Tower is home to many exquisite paintings and murals and a
							beautiful view of the city at the top.
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<!-- Twin Peaks -->
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/twinpeaks.jpg" class="image"/>
					<a href="#twinpeaksModal" data-toggle="modal"><img src="" class="overlayImage" id="twinpeaksImage"/>
					<h3 class="imageTitle" id="twinpeaksTitle"> Twin Peaks</h3></a>

					<div id="twinpeaksModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.tripadvisor.com/Attraction_Review-g60713-d105363-Reviews-Twin_Peaks-San_Francisco_California.html" target="_blank"><h3 id="myModalLabel"><u>Twin Peaks</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 9AM - 4:30PM <br />
					    	<b> Price: </b> Free <br />
					    	<b> Phone: </b> (415)-864-9470
					    </p>
					    <p>
							The Twin Peaks are one of the two highest points in the
							city! These two hills sit with an elevation of about 922 feet near the center
							of San Francisco. They offer beautiful unobstructed views of most of the city
							and the San Francisco Bay! 
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/presidio.jpg" class="image"/>
					<a href="#presidioModal" data-toggle="modal"><img src="" class="overlayImage" id="presidioImage"/>
					<h3 class="imageTitle" id="presidioTitle"> The Presidio </h3></a>

					<div id="presidioModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://www.nps.gov/prsf/index.htm" target="_blank"><h3 id="myModalLabel"><u>The Presidio</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 9AM - 5PM <br />
					    	<b> Price: </b> Free <br />
					    	<b> Phone: </b> (415)-561-4323
					    </p>
					    <p>
							The Presidio is a national park service that once served as
							a military base. With five different visitor center this San Francisco landmark
							offers a blast to the past to the Mexican-American war in 1846. The park has
							approximately 800 buildings in the park’s vicinity with one of its most visited
							being the Walt Disney Family Museum, a museum to honor the memory of the great
							Walt Disney.
				    	</p>
					  </div>
					</div>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/aquarium.jpg" class="image"/>
					<a href="#aquariumModal" data-toggle="modal"><img src="" class="overlayImage" id="aquariumImage"/>
					<h3 class="imageTitle" id="aquariumTitle"> Aquarium of the Bay </h3></a>

					<div id="aquariumModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="http://aquariumofthebay.org/" target="_blank"><h3 id="myModalLabel"><u>Aquarium of the Bay</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> 10AM - 6PM <br />
					    	<b> Price: </b> $21.95 <br />
					    	<b> Phone: </b> (415)-623-5300
					    </p>
					    <p>
							Located on Pier 39, the Aquarium of the Bay is a public aquarium
							that focuses on the local marine animals. The exhibit is divided into three
							parts, Discover the Bay, Under the Bay, and Touch the Bay all of which are
							interactive and education. Get to know San Francisco’s most unique inhabitants such
							as over 50 shark species, skates, bat rays and many other aquatic animals!
					    </p>
					  </div>
					</div>
				</div>
			</li>
			<li class="span3">
				<div class="thumbnail exploreThumbnail">
					<img src="img/ferry.jpg" class="image"/>
					<a href="#ferryModal" data-toggle="modal"><img src="" class="overlayImage" id="ferryImage"/>
					<h3 class="imageTitle" id="ferryTitle"> The Embarcadero</h3></a>

					<div id="ferryModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <a href="www.ferrybuildingmarketplace.com/‎" target="_blank"><h3 id="myModalLabel"><u>The Embarcadero Ferry Building</u></h3></a>
					  </div>
					  <div class="modal-body">
					    <p>
					    	<b> Open: </b> M-F:10AM-6PM; Sat:9AM-6PM; Sun: 11AM-5PM <br />
					    	<b> Price: </b> Free <br />
					    	<b> Phone: </b> (415)-983-8030
					    </p>
					    <p>
							The San Francisco Ferry Building is a terminal for ferries 
							that travel across the San Francisco Bay but also holds one 
							of the most unique marketplaces. With goods and services from 
							all around the world, the Ferry Building accurately depicts San 
							Francisco’s culture. Enjoy a nice cup of coffee or ice cream 
							cone in their beautiful courtyard as you walk through their outside market.					    
						</p>
					  </div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	</div>

	<!-- JAVASCRIPT -->
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>

</body>
</html>