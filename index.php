<!DOCTYPE html>
<html>
<head>
	<title>iUsaha - Instruksi Usaha</title>
	<link href="css/style-home.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Sintony:700,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Infusion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->

</head>
<body>
<!-- header -->
<div class="header">
	<div class="header-left">
		<a href="index.php"><img src="images2/iUsahaLogo.png" alt=""/></a>
	</div>
	<div class="header-right">
		<span class="menu"><img src="images2/menu.png" alt=""/></span>
				<ul class="nav1">
					<li><a href="index.php" class="active">HOME</a></li>
					<li><a href="profil_iu.php">PROFILE</a></li>
					<li><a href="services.php">BANTUAN</a></li>	
					<li><a href="register.php">REGISTER</a></li>
					<li><a href="login-form.php">LOGIN</a></li>
				</ul>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->

	</div>
	<div class="clearfix"></div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner">
	<div class="container">
		<div class="banner-info text-center">
			<h1>BERWIRAUSAHA UNTUK BERSAMA</h1>
			<p>Menciptakan relasi dengan mitra lain untuk dapat memperoleh kemudahan dalam mendapatkan pernghasilan lebih.
			<!-- <span>Stands out like a ridgy-didge also shazza got us.</span> --></p>
			<a href="#">Detail</a>
			<div class="uparrow">
				<img src="images2/uparrow.png" alt=""/>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="container">
		<!-- responsiveslides -->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: true,
								nav: true,
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
				<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="bottom-grids">
								<div class="bottom-grid">
									<img src="images2/a2.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>Muhammad Faruq A</h3>
										<h3>Leader of Lischa Bakery </h3>
										<p>Pengusaha di bidang Kuliner 
										 Produk : Kue, Roti & Jajanan Khas Jepara  </p>
									</div></center>
									<div class="bottom-pos d"></div>
								</div>
								<div class="bottom-grid">
									<img src="images2/a1.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>Andika Setyawan</h3>
										<h3>Leader of newDevmedia</h3>
										<p> Pengusaha di bidang IT 
										 Produk/Jasa : Website, SEO, Internet Marketing</p>
									</div></center>
									<div class="bottom-pos b"></div>
								</div>
								<div class="bottom-grid">
									<img src="images2/a3.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>Aji Dwi Saputra</h3>
										<h3>Leader of 4Technical</h3>
										<p> Pengusaha di bidang Teknik Mesin
										Produk : Motor Electrik, </p>
									</div></center>
									<div class="bottom-pos a"></div>
								</div>
								<div class="bottom-grid">
									<img src="images2/a5.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>M Yusuf Iskandar </h3>
										<h3>Leader of Allhandycrafts </h3>
										<p>Pengusaha di Bidang Kesenian dan Kerajinan
										Produk : Lukisan, Ukiran, Cendera Mata dll  </p>
									</div></center>
									<div class="bottom-pos c"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="bottom-grids">
								<div class="bottom-grid">
									<img src="images2/a9.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>Muhammad Reza Dewantara</h3>
										<h3>Leader of MadridCloth </h3>
										<p>Pengusaha di bidang Fashion 
										 Produk : Jeans, Baju   </p>
									</div></center>
									<div class="bottom-pos d"></div>
								</div>
								<div class="bottom-grid">
									<img src="images2/a8.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>Rizky Nurunnaim</h3>
										<h3>Leader of PlayGameOn</h3>
										<p> Pengusaha di bidang IT 
										 Produk : Game Makker </p>
									</div></center>
									<div class="bottom-pos b"></div>
								</div>
								<div class="bottom-grid">
									<img src="images2/a7.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>Dwi Rizka </h3>
										<h3>Leader of Chepereess </h3>
										<p> Pengusaha di bidang Teknik
										Produk : Onderdil Motor </p>
									</div></center>
									<div class="bottom-pos a"></div>
								</div>
								<div class="bottom-grid">
									<img src="images2/a4.png" alt=""/>
									<div class="bottom-info"><center>
										<h3>Slamet Raharjo </h3>
										<h3>Leader of ButikBatik </h3>
										<p>Pengusaha di Bidang Fashion
										Produk : Kemeja Batik, Kaos Batik, Celana Batik  </p>
									</div></center>
									<div class="bottom-pos c"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- article -->
<div class="article">
	<div class="container">
		<h3>PROGRAM SYSTEM</h3>
	</div>
</div>
<!-- //article -->

<!-- laptop slider -->
<div class="flex-slider">
	<div class="container">
		<ul id="flexiselDemo1">			
			<li>
				<div class="laptop">
					<img src="images2/bn1.jpg" alt=""/>
				</div>
			</li>
			<li>
				<div class="laptop">
					<img src="images2/bn3.jpg" alt=""/>
				</div>
			</li>
			<li>
				<div class="laptop">
					<img src="images2/bn2.jpg" alt=""/>
				</div>
			</li>
		</ul>
			<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 1,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:768,
											visibleItems: 1
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
<!-- //laptop slider -->
<!-- article -->
<div class="article">
	<div class="container">
		<h3>BIDANG USAHA</h3>
	</div>
</div>
<!-- //article -->
<!-- portfolio -->
<div class="our-works">
		<div class="our-work-info text-center wow bounceIn" data-wow-delay="0.4s">	
		</div>	
		<div class="portfolio-grid">
			<div class="col-md-4 port-left">
					<ul id="filters">
						<li class="active"><span class="filter " data-filter="app card icon mov set seni perti">Semua Bidang Usaha</span> </li>
						<li><span class="filter" data-filter="app">IT Developer</span></li>
						<li><span class="filter" data-filter="card">Fashion</span></li>
						<li><span class="filter" data-filter="icon">Kuliner</span></li>
						<li><span class="filter" data-filter="set">Peternakan</span></li>
						<li><span class="filter" data-filter="mov">Perkebunan</span></li>
						<li><span class="filter" data-filter="seni">Kesenian</span></li>
						<li><span class="filter" data-filter="perti">Properti</span></li>
					</ul>
			</div>
			<div class="col-md-8 port-right">
				<div id="portfoliolist">
							<div class="port-grid">
								<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
									<div class="portfolio-wrapper ">		
											<a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
												<img class="img-responsive" src="images2/kt6.jpg" alt=""  />
												<div class="simple-in">
												
												</div>
											</a>
																		
									</div>
								</div>				
								<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
										<div class="portfolio-wrapper">		
											<a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
												<img class="img-responsive" src="images2/kt1.jpg" alt=""/>
												<div class="simple-in one">
													
												</div>
											</a>
																			
										</div>
								</div>		
								
							</div>	
							<div class="port-grid">
								<div class="portfolio mov mix_all" data-cat="mov" style="display: inline-block; opacity: 1;">
									<div class="portfolio-wrapper ">		
										<a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
										<img class="img-responsive" src="images2/kt7.jpg" alt=""  />
										<div class="simple-in three">
													
										</div>	
										</a>
																	
									</div>
								</div>	
								<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
									<div class="portfolio-wrapper ">		
										<a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
											<img class="img-responsive" src="images2/kt8.jpg" alt=""  />
											<div class="simple-in four">
												
											</div>	
										</a>
																		
									</div>
								</div>			
								
							</div>
							<div class="port-grid">
								<div class="portfolio mov mix_all" data-cat="mov" style="display: inline-block; opacity: 1;">
									<div class="portfolio-wrapper">		
										<a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

											<img class="img-responsive" src="images2/kt4.jpg" alt=""  />
											<div class="simple-in six">
												
											</div>	
										</a>
																	
									</div>
								</div>
								<div class="portfolio set mix_all" data-cat="set" style="display: inline-block; opacity: 1;">
									<div class="portfolio-wrapper">		
										<a href="#small-dialog6" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

											<img class="img-responsive" src="images2/kt3.jpg" alt=""  />						    
												<div class="simple-in seven">
													
												</div>
										</a>
																	
									</div>
								</div>
								
							</div>	
				</div>	
			</div>	
			<!-- pop-up-box -->
					<!-- script for pop-up-box -->
					<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!-- //script for pop-up-box -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="image-top">
							<img src="images2/kt6.jpg" alt="" />
								
						</div>
					</div>
					<div id="small-dialog2" class="mfp-hide">
						<div class="image-top">
							<img src="images2/kt1.jpg" alt="" />
							
						</div>
					</div>
					<div id="small-dialog3" class="mfp-hide">
						<div class="image-top">
							<img src="images2/kt7.jpg" alt="" />
							
						</div>
					</div>
					<div id="small-dialog4" class="mfp-hide">
						<div class="image-top">
							<img src="images2/kt8.jpg" alt="" />
							
						</div>
					</div>
					<div id="small-dialog5" class="mfp-hide">
						<div class="image-top">
							<img src="images2/kt4.jpg" alt="" />
							
						</div>
					</div>
					<div id="small-dialog6" class="mfp-hide">
						<div class="image-top">
							<img src="images2/kt3.jpg" alt="" />
						
						</div>
					</div>
					
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
			</script>
		<!-- //pop-up-box -->			
			<!-- Script for gallery Here -->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
							$(function () {
								var filterList = {
									init: function () {
										// MixItUp plugin
										// http://mixitup.io
										$('#portfoliolist').mixitup({
											targetSelector: '.portfolio',
											filterSelector: '.filter',
											effects: ['fade'],
											easing: 'snap',
											// call the hover effect
											onMixEnd: filterList.hoverEffect()
										});				
									},
									hoverEffect: function () {
									
										// Simple parallax effect
										$('#portfoliolist .portfolio').hover(
											function () {
												$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
												$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
											},
											function () {
												$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
												$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
											}		
										);				
									}
								};
								// Run the show!
								filterList.init();
							});	
					</script>
				<!-- Gallery Script Ends -->
				<div class="clearfix"> </div>
		</div>
	
</div>

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-2 footer-grid logobtm">
				<a href="index.php">iUsaha</a>
			</div>
			<div class="col-md-5 footer-grid">
				<p>iUsaha Memberikan kemudahan bagi wirausahawan dan para pemilik modal yang ingin berwirausaha. 
				Dengan adanya iUsaha wirausahawan dapat bekerjasama membangun usaha sehingga peluang keberhasilan lebih meningkat.</p>
			</div>
			<div class="col-md-3 footer-grid">
				<p>iUsaha sebagai wadah bagi wirausahawan dan pemilik modal untuk melakukan kerjasama.</p>
			</div>
			<!-- <div class="col-md-2 footer-grid">
				<ul>
					<li><a href="#">List one</a></li>
					<li><a href="#">Page two</a></li>
					<li><a href="#">Design</a></li>
					<li><a href="#">Work</a></li>
					<li><a href="contact.php">Contact Me</a></li>
				</ul> -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="copy-right">
			<p>Copyright &copy; 2015 <a href="">iUsaha</a></p>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>