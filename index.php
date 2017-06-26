
<!DOCTYPE html>
<html lang="en">
<head>
<title>let's hike </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Go Hiking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- gallery -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- //gallery -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/jarallax.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
	<!-- banner -->
	
<div class="banner" id="home">
		<div class="banner-dot">
			<div class="header-top">
				<div class="container banner-drop">
					<div class="agile-logo">
						<h1><a href="index.html">Let's Hike</a></h1>
					</div>
					<div class="header-right">
						<nav>
							<ul>
								<li class="active">
								<?php
								include_once('class/displaymenu.php');
								$dmenu= new menu();
								$dmenu->menuDisplay();
								?>
								</li>

							</ul>
						</nav>
						<div class="menu-icon"><span></span></div>
					</div>
					<div class="clearfix"> </div>
					<script>
						(function($){
							$(".menu-icon").on("click", function(){
								$(this).toggleClass("open");
								$(".container").toggleClass("nav-open");
								$("nav ul li").toggleClass("animate");
							});
							  
						})(jQuery);
					</script>
				</div>
			</div>
			<div class="w3layouts-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<?php
								include_once('class/displayblog.php');
					$tdis= new displayB();
									$tdis->slideDisplay();
								?>
							</ul>
						</div>
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- modal -->

					<?php

					$tdis->fullblogdisplay();
					?>
		
	<!-- //modal -->
	<!-- about -->
	<div class="about" id="about">
		<div class="col-md-6 w3-agileits-about-left" style="height:500px;">
			
		</div>
		<div class="col-md-6 agile-about-right" style="height:548px;">
			<h2>ABout Us</h2>
			<h5><?php include_once('class/displayarticle.php');
					$article=new display();
					$article->Aboutdisplay();
			?></span></p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //about -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="services-top">
				<div class="col-md-6 services-top-left">
					<h3>Services</h3>
					<h5>Some of our services</h5>
					<p><h4>our latest service package.</p></h4>
				</div>
				 <section  id="services-sec">
        <div class="container">
            <div class="row ">
                
                  </div>
          <div class="row go-marg">
                 <?php
                 $sdisplay= new displayB();
                 $sdisplay->servicedisplay();
                 ?>
              
                </div>
        </div>
    </section>
 			<div class="clearfix"> </div>
			</div>
			
			</div>
		</div>
		  <?php
    $mdisplay=new displayB();
    $mdisplay->mservicedisplay();
    ?>
		
	
	<!-- //services -->
	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Gallery</h3>
				<h5>Our Images</h5>
			</div>
		</div>
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
						<li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Hiking</a></li>
						<li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Trekking</a></li>
						<li role="presentation"><a href="#painting" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Rafting</a></li>
						<li role="presentation"><a href="#school" role="tab" id="school-tab" data-toggle="tab" aria-controls="school">Bungee</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
							<div class="w3_tab_img">
								

								<?php
								include_once('class/displaygallery.php');
								$Agallery=new gallery();
								$Agallery->getAllPictures();
								?>
								<div class="clearfix"> </div>
							</div>
						</div>



						<div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
							<div class="w3_tab_img">
								
							<?php
							$Hgallery=new gallery();
							$Hgallery->Hdisplay();
							?>

								<div class="clearfix"> </div>
							</div>
						</div>


						<div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
							<div class="w3_tab_img">
								

									
							<?php
							$gallery=new gallery();
							$gallery->Tdisplay();
							?>

								<div class="clearfix"> </div>
							</div>
						</div>


						<div role="tabpanel" class="tab-pane fade" id="painting" aria-labelledby="painting-tab">
							<div class="w3_tab_img">

			
							<?php
							$gallery=new gallery();
							$gallery->Rdisplay();
							?>


								<div class="clearfix"> </div>
							</div>
						</div>


						<div role="tabpanel" class="tab-pane fade" id="school" aria-labelledby="school-tab">
							<div class="w3_tab_img">


									<?php
							$gallery=new gallery();
							$gallery->Bdisplay();
							?>

								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
			</div>
			<script src="js/jquery.tools.min.js"></script>
			<script src="js/jquery.mobile.custom.min.js"></script>
			<script src="js/jquery.cm-overlay.js"></script>
			<script>
				$(document).ready(function(){
					$('.cm-overlay').cmOverlay();
				});
			</script>
	</div>
	<!-- //gallery -->
	<!-- blog -->
	<div class="blog" id="blog">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Blog</h3>
				<h5>Our Blog Posts</h5>
			</div>
			<div class="agile-blog-grids">
				
			<?php

			$tdis->titleDisplay();
			?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //blog -->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Team</h3>
				<h5>Meet Our Team</h5>
			</div>
			<div class="agileinfo-team-grids">
			
				<?php
				$tdisplay= new displayB();
				$tdisplay->teamdisplay();
				?>


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- contact -->
<?php
	include_once('class/db_config.php');
  include_once('class/customerinfo.php');
    $customerinfo=new customerinfo();
     $cdate=date('Y-m-d H:i:s');



  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    extract($_POST);
    include_once('class/customerinfo.php');
      $customerinfo=new customerinfo();

     $customerinfo->infoRegister($cname,$cemail,$phone,$cmessage,$cdate);
    }


 ?>



	<div class="contact" id="contact">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Contact</h3>
				<h5>Get In Touch</h5>
			</div>
			<div class="contact-form">
				<form action="" method="post" >
					<input type="text" placeholder="Name" name="cname" required="">
					<input type="email" placeholder="Email" name="cemail" required="">
					<input type="text"  placeholder="Telephone" name="phone" required="">
					<textarea maxlength="100" placeholder="Message" name="cmessage" required=""></textarea>
					<input type="submit" value="SUBMIT">
				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!--START-USING GOOGLE MAPS WITH API KEY-->
              <h4 class="footer-head">Our Office</h4>
                <div id="map" style="height:300px;width: 100%;"></div>
                <script>
                  function initMap() {
                    var uluru = {lat: 27.737973, lng:  85.328614};
                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 16,
                      center: uluru
                    });
                    var marker = new google.maps.Marker({
                      position: uluru,
                      map: map
                    });
                  }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuRPnMVYQ_WURxAlCwCTRHhS32dKTgBCM&callback=initMap">
                </script>
            <!--END- USING GOOGLE MAP WITH API KEY-->

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<h4>Menu</h4>
					<div class="col-md-6 footer-grid-left">
						<ul>
							<li>
								<a href="#home" class="scroll">Home</a>
							</li>
							<li>
								<a href="#about" class="scroll">About</a>
							</li>
							<li>
								<a href="#services" class="scroll">Services</a>
							</li>
							<li>
								<a href="#gallery" class="scroll">Gallery</a>
							</li>
						</ul>
					</div>
					<div class="col-md-6 footer-grid-left">
						<ul>
							<li>
								<a href="#blog" class="scroll">Blog</a>
							</li>
							<li>
								<a href="#team" class="scroll">Team</a>
							</li>
							<li>
								<a href="#contact" class="scroll">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-grid">
					<h4>Contact Us</h4>
					<ul>
						<li><span>Location : </span>kapan-1,kathmandu</li>
						<li><span>Phone : </span> +977 9843312532</li>
						<li><span>Email : </span><a href="mailto:basanta999s@gmail.com">basanta999s@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid">
					<h4>Newsletter</h4>
					<p>Subscribe With Us</p>
					<form action="#" method="post">
						<input type="text" placeholder="Subscribe" name="Subscribe" required="">
						<button class="btn1">Go</button>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© <?php echo date("Y.m.d"); ?>
			Let's Hike. All rights reserved | shahibasanta.com.np</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

</body>	
</html>