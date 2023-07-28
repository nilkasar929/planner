<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Planner</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A free responsive photography html website template by Frittt Templates">
  <meta name="author" content="FritttTemplates">
  
  <!-- FAVICON --> 
  
  <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="img/png" href="favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="img/png" href="favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="img/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="img/png" href="favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="favicons/manifest.json">
  <link rel="shortcut icon" href="favicons/favicon.ico">
  <meta name="msapplication-config" content="favicons/browserconfig.xml">
  
  <!-- CSS -->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" href="css/jPushMenu.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/main.css">

 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
<style>
	.img-100p{
	border-radius: 20px;
    box-shadow: 1px 1px 15px 2px #edc1c1;
}
.fa{
	color: black;
}
</style>

</head> <!-- head -->
<body>
	                                                      
	<!-- ============== start wrapper  ============== -->
	<div id="wrapper">
		<!-- main-nav -->
		<div class="main-nav">
			<div class="logo-left">
				<a data-scroll href="index.php">
					<img src="img/logo2.png" alt="logo">
				</a>
			</div>
			<div class="menu-button toggle-menu menu-right push-body">
				<button><i class="fa fa-bars"></i></button>
			</div>
		</div> <!-- //end main-nav -->

		<!--=========================
			Start area for Menu 
		============================== -->
		<nav id="main-navigation" class="nav-menu nav-menu-vertical nav-menu-right">
			<ul class="list-inline">
				<li class="current"><a href="index.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="service.php">Our Services</a></li>
				<li><a href="management.php">Management</a></li>
				<li><a href="gallery1.php">Gallery</a></li>
				<li><a href="team.php">The Team</a></li>
				
				
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		
		<!-- End of menu area -->


		<!-- ============== start home section  ============== -->
		<section id="home">
			<div id="home-slider" class="carousel slide in" data-ride="carousel">
			  <!-- Indicators -->
			

		      <div class="carousel-inner">
		        <div class="item active" style="background-image: url(img/slider/011.jpg)">
		        	<div class="col-sm-offset-1 caption caption-wide">
		        		<h1 class="main-title wow fadeInUp" data-wow-delay=".25s "><br> <br/>Gallery<br/></h1>

		        	
		        	</div>
		        </div><!-- //item -->
		       
		        </div><!-- //item -->
		      </div>
		    </div>
		</section>
		

 
		<!-- ============= Start portfolio section ============== -->
		<section id="portfolio" class="mtb100">
			<div class="container">
				<h3 class="section-title wow fadeInDown">Our Portfolio</h3>
				<p class="section-info col-sm-8 col-sm-offset-2 wow fadeInDown" data-wow-delay=".25s">
					This is some of the sample images of the events that we manage.
				</p>
				<div class="clearfix"></div>

				<div class="portfolio-content">
					<ul class="portfolio-filter text-center list-inline mtb40 text-uppercase">       
						<li><a class="active" href="#" data-filter="*"> All</a></li> 
						<li><a href="#" data-filter=".wedding">Wedding</a></li>
						<li><a href="#" data-filter=".festival">Festival</a></li>
						<li><a href="#" data-filter=".engagement">Engagement</a></li>
						<li><a href="#" data-filter=".birthday">Birthday</a></li>
					</ul>
					<div class="portfolio-items">
						<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item festival wedding">
						 	<figure class="content wow fadeIn" data-wow-delay=".15s">
						 		<img src="img/portfolio/p66.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/p6.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">mumbai</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
						 <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item festival birthday">
						 	<figure class="content wow fadeIn birthday" data-wow-delay=".25s">
						 		<img src="img/portfolio/02.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full birthday">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/main-02.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">Delhi</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
						 <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item engagement">
						 	<figure class="content wow fadeIn" data-wow-delay=".35s">
						 		<img src="img/portfolio/03.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/p22.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">John Donga</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
						 <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item birthday wedding hit-and-run">
						 	<figure class="content wow fadeIn" data-wow-delay=".45s">
						 		<img src="img/portfolio/p22.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/p02.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">london</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
						 <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item engagement birthday hit-and-run">
						 	<figure class="content wow fadeIn" data-wow-delay=".55s">
						 		<img src="img/portfolio/p01.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/p01.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">New york</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
						 <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item festival wedding hit-and-run">
						 	<figure class="content wow fadeIn" data-wow-delay=".65s">
						 		<img src="img/portfolio/p33.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/p3.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">Merath</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
						 <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item festival wedding">
						 	<figure class="content wow fadeIn" data-wow-delay=".75s">
						 		<img src="img/portfolio/p55.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/p5.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">Udaipur</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
						 <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item engagement hit-and-run">
						 	<figure class="content wow fadeIn" data-wow-delay=".85s">
						 		<img src="img/portfolio/p44.jpg" class="img-100p" alt="portfolio">
						 		<figcaption class="overflow-content-full">
						 			<p class="icon horizontal-vertical-center">
						 				<a data-lightbox="portfolio" href="img/portfolio/p4.jpg"><i class="fa fa-search-plus"></i></a>
						 			</p>
						 			<div class="caption text-center">
						 				<p class="title">surat</p>
						 				<p class="info">. </p>
						 			</div>
						 		</figcaption>
						 	</figure>
						 </div>
					</div>
				</div>
			</div>
		</section>
		

	

		<!-- ============== Start contact section ============== -->
		<section id="contact">
			 <div class="map-content">
				<div id="gmap">
				</div>
			</div>
			<div class="color-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-offset-2 form-content ptb100">
							<h3 class="section-title wow fadeInDown">Impressed? Let's touch base</h3>
							<p class="section-info wow fadeInDown" data-wow-delay=".25s">
								Should you have any question or concern, you can reach us by filling out the contact form below or you can find us on other social networks.
							</p>
							<div class="clearfix"></div>
							<form action="#" class="form wow fadeIn" data-wow-delay=".25s">
								<input type="text" class="form-control" placeholder="Your Full Name">
								<input type="text" class="form-control" placeholder="Email Address">
								<input type="text" class="form-control" placeholder="Contact Number">
								<textarea name="" class="form-control" cols="30" rows="5" placeholder="Your Message"></textarea>
								<a class="btn-block btn btn-submit text-uppercase">Send Message Now</a>
							</form>
						</div>
					</div> 
				</div> 
			</div>
		</section>
		<!-- ========= //End contact section ========= -->


		<!-- ============== Start footer ============== -->
	<section id="footer">

			<div class="container bottom-part">
				<div class="row">
					<div class="col-sm-4 left-part">
						<p class="footer-logo "><img src="img/logo2.png" alt="logo"></p><br/>
						<p>Planner is the most promising event managing company right now with the team which have fine experience </p>
					</div>
					<div class="col-sm-4 col-sm-offset-4">
						<ul class="social-icon-footer list-inline mtb50">
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
							<li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
						<form action="#" class="form subscribe-form">
							<p class="text-uppercase mtb20">get subscribed to the planner tips and news</p>
							<input type="email" class="form-control" placeholder="Enter your email:">
						</form>
					</div>
				</div> <!-- //row -->
			</div> <!-- //container -->

			<!-- copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-4">
							<p class="info">
								&copy; <a href="#temp" target="_blank"></a>Copyright @Planner
							</p>
						</div>
					</div> <!-- //row -->
				</div> <!-- //container -->
			</div> <!-- //end copyright -->
		</section>
		<!-- ========= //End footer ========= -->

	</div> <!-- //end wrapper -->

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- loader -->
  <script src="js/loader.min.js"></script>
  <script src="js/preloader.js"></script>
  <!-- animation effects -->
  <script src="js/wow.min.js"></script>
  <!-- count-down -->
  <script src="js/jquery.inview.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <!-- content slider -->
  <script src="js/jquery.bxslider.min.js"></script>
  <!-- google maps -->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="js/gmaps.js"></script>
  <script src="js/init-map.js"></script>
  <!-- pushmenu -->
  <script src="js/jPushMenu.js"></script>
  <!-- smooth navigation -->
  <script src="js/mousescroll.js"></script>
  <script src="js/jquery.nav.js"></script>
  <!-- filter portfolio & lightbox -->
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/lightbox.min.js"></script>
  <!-- smooth scrool -->
  <script src="js/smoothscroll.js"></script>
  <!-- custom js -->
  <script src="js/app.js"></script>
  
</body>

</html>