<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>5KCo • By Artists. For Artists.</title>
		<meta name="description" content="We are a brand that stands behind art and strive to provide a platform for all artists to be seen, heard, and promoted." />
		<meta name="keywords" content="5kco, apparel, men's fashion, streetwear, urbanwear, men's wear, long t-shirts " />
		<meta name="author" content="Tonye Brown" />
		<!-- favicons start -->
			<link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
			<link rel="manifest" href="/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">
		<!-- favicons end -->
		

		<link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow_layouts.css" />
		
		<!-- Menu css start -->
		<!-- <link rel="stylesheet" type="text/css" href="css/menu/normalize.css" /> -->
		<link rel="stylesheet" type="text/css" href="css/menu/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/menu/iconmoon.css" />
		<link rel="stylesheet" type="text/css" href="css/menu/component.css" />
		<!-- Menu css end -->
		
		<!-- Menu JS start -->
		<script src="js/menu/modernizr.custom.js"></script>
		<!-- Menu JS end -->
		
		<!-- shop css start	-->
		<!-- <link rel="stylesheet" type="text/css" href="css/shop/default.css" />
		<link rel="stylesheet" type="text/css" href="css/shop/component.css" /> -->
		<!-- shop css end -->
				
		<script src="https://use.fontawesome.com/c7dac7fd1a.js"></script>
		
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<style>
			.ie-message { display: inline-block; }
  		</style>
		<![endif]-->
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body>
		<svg class="hidden">
			<defs>
				<symbol id="icon-arrow" viewBox="0 0 24 24">
					<title>arrow</title>
					<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
				</symbol>
				<symbol id="icon-drop" viewBox="0 0 24 24">
					<title>drop</title>
					<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
				</symbol>
				<symbol id="icon-prev" viewBox="0 0 100 50">
					<title>prev</title>
					<polygon points="5.4,25 18.7,38.2 22.6,34.2 16.2,27.8 94.6,27.8 94.6,22.2 16.2,22.2 22.6,15.8 18.7,11.8"/>
				</symbol>
				<symbol id="icon-next" viewBox="0 0 100 50">
					<title>next</title>
					<polygon points="81.3,11.8 77.4,15.8 83.8,22.2 5.4,22.2 5.4,27.8 83.8,27.8 77.4,34.2 81.3,38.2 94.6,25 "/>
				</symbol>
				<symbol id="icon-octicon" viewBox="0 0 24 24">
					<title>octicon</title>
					<path d="M12,2.2C6.4,2.2,1.9,6.7,1.9,12.2c0,4.4,2.9,8.2,6.9,9.6c0.5,0.1,0.7-0.2,0.7-0.5c0-0.2,0-0.9,0-1.7c-2.8,0.6-3.4-1.4-3.4-1.4C5.6,17.1,5,16.8,5,16.8C4.1,16.2,5,16.2,5,16.2c1,0.1,1.5,1,1.5,1c0.9,1.5,2.4,1.1,2.9,0.8c0.1-0.7,0.4-1.1,0.6-1.3c-2.2-0.3-4.6-1.1-4.6-5c0-1.1,0.4-2,1-2.7C6.5,8.8,6.2,7.7,6.7,6.4c0,0,0.8-0.3,2.8,1C10.3,7.2,11.1,7.1,12,7c0.9,0,1.7,0.1,2.5,0.3c1.9-1.3,2.8-1,2.8-1c0.5,1.4,0.2,2.4,0.1,2.7c0.6,0.7,1,1.6,1,2.7c0,3.9-2.4,4.7-4.6,5c0.4,0.3,0.7,0.9,0.7,1.9c0,1.3,0,2.4,0,2.8c0,0.3,0.2,0.6,0.7,0.5c4-1.3,6.9-5.1,6.9-9.6C22.1,6.7,17.6,2.2,12,2.2z" />
				</symbol>
				<!-- From Karen Menezes: https://www.smashingmagazine.com/2015/05/creating-responsive-shapes-with-clip-path/ -->
				<clipPath id="polygon-clip-rhomboid" clipPathUnits="objectBoundingBox">
					<polygon points="0 1, 0.3 0, 1 0, 0.7 1" />
				</clipPath>
			</defs>
		</svg>
		<main>
			<header class="codrops-header" id="5khome">
				<!-- <p class="codrops-header__tagline">By Artists. For Artists.</p> -->
				<p class="ie-message">Please note that your browser does not fully support our website.</p>
				
				<!-- Menu start -->
				
				<div class="container">
					<ul id="gn-menu" class="gn-menu-main">
						<li class="gn-trigger">
							<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
							<nav class="gn-menu-wrapper">
								<div class="gn-scroller">
									<ul class="gn-menu">
										<!-- <li class="gn-search-item">
											<input placeholder="Looking for something?" type="search" class="gn-search">
											<a class="gn-icon gn-icon-search"><span>Find something...</span></a>
										</li> -->
										<li><a class="gn-icon2 icon-house" href="#5khome"><big>Home</big></a></li>
										<li>
											<a class="gn-icon2 icon-shopping-bag" href="#5kshop"><big>Shop</big></a>
											<!-- <ul class="gn-submenu">
												<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
												<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
											</ul> -->
										</li>
										<li><a class="gn-icon2 icon-profile" href="#5kabout"><big>About Us</big></a></li>
										<li><a class="gn-icon2 icon-instagram" href="#5kinstagram"><big>Instagram</big></a></li>
										<li>
											<a class="gn-icon2 icon-play" href="#5kyoutube"><big>YouTube</big></a>
											<!-- <ul class="gn-submenu">
												<li><a class="gn-icon gn-icon-article">Articles</a></li>
												<li><a class="gn-icon gn-icon-pictures">Images</a></li>
												<li><a class="gn-icon gn-icon-videos">Videos</a></li>
											</ul> -->
										</li>
										<li><a class="gn-icon2 icon-envelop" href="#5kcontact"><big>Contact Us</big></a></li>
									</ul>
								</div><!-- /gn-scroller -->
							</nav>
						</li>
						<li><h1 class="codrops-header__title"><a href="#5khome"><img src="img/5kco.jpg" width="60px" /></a></h1></li>
						<li class="social-icons">
							<a href="http://www.facebook.com/fivekco" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
							<a href="http://www.instagram.com/5kco" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
							<a href="http://www.youtube.com/5kco" target="_blank"><i class="fa fa-youtube-play fa-lg"></i></a>
							<a href="http://www.vimeo.com/5kco" target="_blank"><i class="fa fa-vimeo-square fa-lg"></i></a>
						</li>
					</ul>
				</div><!-- /container -->
				
				<!-- Menu End -->
				
			</header>
			<div class="media-item__sales"><h1>Our Goal is to... </h1>
				Welcome to 5k, a premium men’s urban-wear brand launching its first collection. We want you to be a part of making it happen: our goal is to reach 300 units in pre-sales, allowing us to introduce our garments to market. So far, we’ve sold <span id="salesNumber">+</span> t-shirts. Check back daily for updates to see where we’re at!
			</div>
			
			<div class="slideshow" tabindex="0">
					<div class="slide slide--layout-1" data-layout="layout1">
						<div class="slide-imgwrap">
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/21a.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/21b.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/21c.jpg);"></div></div>
						</div>
						<div class="slide__title">
							<h3 class="slide__title-main">By Artists. For Artists.</h3>
							<p class="slide__title-sub">Urbanwear Supporting Talented Entrepreneurial Artists.</p>
						</div>
					</div><!-- /slide -->
					<div class="slide slide--layout-2" data-layout="layout2">
						<div class="slide-imgwrap">
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/6.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/5.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/6.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/7.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/9.jpg);"><h4 class="slide__img-caption">Who We Are</h4></div></div>
						</div>
						<div class="slide__title">
							<h3 class="slide__title-main">Who We Are</h3>
							<p class="slide__title-sub">We are a brand that stands behind art and strive to provide a platform for all artists to be seen, heard, and promoted.</p>
						</div>
					</div><!-- /slide -->
					<div class="slide slide--layout-3" data-layout="layout3">
						<div class="slide-imgwrap">
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/4.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/13.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/11.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/14.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/18.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/12.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/19.jpg);"></div></div>
						</div>
						<div class="slide__title">
							<h3 class="slide__title-main">Shop Now</h3>
							<p class="slide__title-sub">Get our MMXVI Tee made from 70% Bamboo 30% Organic Cotton featuring a longer back, side vents and a 5” Yoking.</p>
						</div>
					</div><!-- /slide -->
					<div class="slide slide--layout-4" data-layout="layout4">
						<div class="slide-imgwrap">
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/18.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/8.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/11.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/13.jpg);"></div></div>
						</div>
						<div class="slide__title">
							<h3 class="slide__title-main">What Makes You 5K?</h3>
							<p class="slide__title-sub">The road you walk is your own; searching, creating, no rules, no boundaries. Share with us what makes you 5K using <a href="#">#5KCo</a>.</p>
						</div>
					</div><!-- /slide -->
					<div class="slide slide--layout-5" data-layout="layout5">
						<div class="slide-imgwrap">
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/1.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/2.jpg);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/3.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/4.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/5.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/6.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/7.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/8.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/9.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/10.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/11.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/12.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/13.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/14.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/15.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/16.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/17.gif);"></div></div>
							<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/18.gif);"></div></div>
						</div>
						<div class="slide__title">
							<h3 class="slide__title-main">5KCo</h3>
							<p class="slide__title-sub">We foster networking for artists in the advancement of their careers through cross-promotion.</p>
						</div>
					</div><!-- /slide -->
					<nav class="slideshow__nav slideshow__nav--arrows">
						<button id="prev-slide" class="btn btn--arrow" aria-label="Previous slide"><svg class="icon icon--prev"><use xlink:href="#icon-prev"></use></svg></button>
						<button id="next-slide" class="btn btn--arrow" aria-label="Next slide"><svg class="icon icon--next"><use xlink:href="#icon-next"></use></svg></button>
					</nav>
			</div><!-- /slideshow -->
				
			<div id="5kshop"><h1 class="media-item__shopheader">Shop 5K // Summer Essentials</h1>	
			<div class="media-item__5kshopbody">
				<a href="https://5kco.myshopify.com/products/5k-roman-mmxvi-tee-black" target="_blank"><div class="box"><img src="img/14b.jpg" /><div class="overbox"><div class="title overtext">"Printed" [ROMAN] Tee (Black)</div><div class="tagline overtext">Shop Now</div></div></div></a>
				<a href="https://5kco.myshopify.com/products/printed-5k-mmxvi-tee" target="_blank"><div class="box"><img src="img/16b.jpg" /><div class="overbox"><div class="title overtext">"Printed" [CUBE] Tee (White)</div><div class="tagline overtext">Shop Now</div></div></div></a>
				<a href="https://5kco.myshopify.com/products/basic-5k-mmxvi-tee-black" target="_blank"> <div class="box"><img src="img/7b.jpg" /><div class="overbox"><div class="title overtext">"Basic" 5K MMXVI Tee (Black)</div><div class="tagline overtext">Shop Now</div></div></div></a>
				<a href="https://5kco.myshopify.com/products/basic-5k-mmxvi-tee" target="_blank"> <div class="box"><img src="img/8b.jpg" /><div class="overbox"><div class="title overtext">"Basic" 5K MMXVI Tee (White)</div><div class="tagline overtext">Shop Now</div></div></div><br /></a>
			</div>
			</div>
			
			<div id="5kabout"><h1 class="media-item__shopheader">Who We Are // What We Do</h1></div>	
			<div class="media-item__5kabout">
				<div class="aboutdesc">We are a brand that stands behind art (in all of its various forms) and we are striving to provide a platform for all artists to be seen, heard, and promoted; fostering networking for artists in the advancement of their careers through cross-promotion.</div> 
			</div>
			
			<div id="5kinstagram"><h1 class="media-item__shopheader">Instagram // Keep Up</h1>
				<div id="media-item__instafeed" style="text-align: center;">
				</div>
			</div>
						
			<div id="5kyoutube"><h1 class="media-item__shopheader">YouTube // Watch 5K</h1></div>
			<div class="color-1 media-item__5kyoutube"> 
				<iframe width="100%" height="480" src="https://www.youtube.com/embed/_sO0rkDoQ1w" frameborder="0" allowfullscreen></iframe>
			</div>
			
			<!-- Contact us  -->
			<div id="5kcontact"><h1 class="media-item__shopheader">Send us A Message</h1></div>
			<div class="color-1 media-item__5kcontact"> 
				<form action="mailer.php" method="POST" class="topBefore">
					<input id="name" type="text" placeholder="NAME" name="name">
				    <input id="email" type="email" placeholder="E-MAIL" name="email">
				    <textarea id="message" type="text" placeholder="MESSAGE" name="message"></textarea>
					<input id="submit" type="submit" value="Send Message!">
				</form>
				<span class="media-item__err_msg">
					<?php 
						if( isset($_SESSION['Error']) )
						{
								echo $_SESSION['Error'];

								unset($_SESSION['Error']);

						}
					?>
				</span>
			</div>
			
			<!-- Credits -->
			<div class="credits">
				<div class="copyright">
					<a href="#5khome">&copy; 2017 5KCo. All Rights Reserved.</a>
				</div>
				<div class="donotremove" id="donotremove">
					<a href="http://www.tonyebrown.com">Designed // Crafted by Tonye Brown</a>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="js/anime.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
		<script type="text/javascript" src="js/smoothscroll.js"></script>
		<script type="text/javascript" src="js/menu/classie.js"></script>
		<script type="text/javascript" src="js/menu/gnmenu.js"></script>
		<script type="text/javascript" src="js/instafeed.min.js"></script>
		<script type="text/javascript" src="js/sales.js"></script>
		<!-- <script>
			$(document).ready(function(){

				setTimeout(function(){salesNumberGen();}, 2000);
				setInterval(function(){salesNumberGen();}, 15000);

			});
		</script> -->
		
		<!-- <script type="text/javascript">
			var feed = new Instafeed({
				get: 'tagged',
				userId: '5kco'
				clientId: '51f34f16ead34250aa9a24fb051b88d6'
			});
			feed.run();
		</script> -->
		
		<!-- <script type="text/javascript">
			var userFeed = new Instafeed({
				get: 'user',
				userId: '2071667563',
				clientId: '51f34f16ead34250aa9a24fb051b88d6'
			});
			userFeed.run();
		</script> -->
		
		<script type="text/javascript">
			var feed = new Instafeed({
				get: 'user',
				userId: 2071667563,
				accessToken: '2071667563.51f34f1.7e21d77200e4426da3cfeb9a912fede2',
				target: 'media-item__instafeed',
				after: function() {
					var el = document.getElementById('media-item__instafeed');
					if (el.classList)
						el.classList.add('show');
					else
						el.className += ' ' + 'show';
				}
			});
			feed.run();
		</script>
		
		<script>
			var _0x455e=["\x67\x6E\x2D\x6D\x65\x6E\x75","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64"]; new gnMenu(document[_0x455e[1]](_0x455e[0]))
		
			var _0x4d98=["\x64\x6F\x6E\x6F\x74\x72\x65\x6D\x6F\x76\x65","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x74\x6F\x6E\x79\x65\x62\x72\x6F\x77\x6E\x2E\x63\x6F\x6D"];if(!document[_0x4d98[1]](_0x4d98[0])){window[_0x4d98[3]][_0x4d98[2]]= _0x4d98[4]}
		
			var _0x1e7b=["\x2E\x73\x6C\x69\x64\x65\x73\x68\x6F\x77","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72","\x63\x6C\x69\x63\x6B","\x6E\x65\x78\x74","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x23\x6E\x65\x78\x74\x2D\x73\x6C\x69\x64\x65","\x70\x72\x65\x76","\x23\x70\x72\x65\x76\x2D\x73\x6C\x69\x64\x65"];var slideshow= new MLSlideshow(document[_0x1e7b[1]](_0x1e7b[0]));document[_0x1e7b[1]](_0x1e7b[5])[_0x1e7b[4]](_0x1e7b[2],function(){slideshow[_0x1e7b[3]]()});document[_0x1e7b[1]](_0x1e7b[7])[_0x1e7b[4]](_0x1e7b[2],function(){slideshow[_0x1e7b[6]]()})
		</script>
	</body>
</html>
