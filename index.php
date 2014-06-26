<?php
function generateFormToken($form) {
	// generate a token from an unique value, took from microtime, you can also use salt-values, other crypting methods...
	$token = md5(uniqid(microtime(), true));  
	
	// Write the generated token to the session variable to check it against the hidden field when the form is sent
	$_SESSION[$form.'_token'] = $token; 
	
	return $token;
}


// generate a new token for the $_SESSION superglobal and put them in a hidden field
$newToken = generateFormToken('form1');   
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Gleb Polushkin — front-end developer</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Who am I</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><img src="images/me.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1>Hi. I'm <strong>Gleb Polushkin</strong>.</h1>
							</header>
							<p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://n33.co/">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license/">CCA license</a>.</p>
							<a href="#work" class="button button-big">Learn about what I do</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper wrapper-style2">
				<article id="work">
					<header>
						<h2>I'm using stable next-step technologies which makes websites richer</h2>
						<span>It helps to create websites that allow the user to experience better filling of your service on wide range of mobile and non-mobile devices.</span>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box box-style1">
									<span class="icn featured">
										<svg version="1.1"
											 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
											 x="0px" y="0px" width="166px" height="218px" viewBox="-16.8 -14.5 206 273"
											 overflow="visible" enable-background="new -16.8 -14.5 206 273" xml:space="preserve">
										<defs>
										</defs>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#E34F26" d="M156.5,62.5l-12.8,151.2l-57.8,16.5L85.6,62.5H156.5z M172.4,48.4
											c0,0-10.5,118.9-16.2,176.4C133.2,231.6,87.4,245,86,245c-1,0-46.8-13.4-70.2-20.1C10.5,167.3,0,48.4,0,48.4H172.4z"/>
										<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#F1662A" points="156.6,62.3 143.9,214.4 85.4,230.7 85.4,62.3 "/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M139.9,84.9l-1.9,20.6H55.4l2.1,22.8l78.6,0.2l-5.7,66.7l-44.4,12
											l-43.9-12l-2.9-33.6h21l1.4,16.8l24.4,6.7c0,0,16.2-4.3,24.4-6.7c0.5,0,2.9-28.8,2.9-28.8H37.7l-5.2-64.7H139.9z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#010101" d="M141.4,0v22h15.3v10.6h-25.8V0H141.4z M99.3,0
											c2.4,3.8,4.3,7.7,7.2,11.5L113.7,0h11v32.6h-10.5V16.3c-2.9,3.8-5.3,7.7-7.6,11.5l-8.1-11.5v16.3h-10V0H99.3z M82.6,0v10.5h-9.6
											v22.1H62.6V10.5H53V0H82.6z M26.3,0v11h11V0h10v32.6h-10v-11h-11v11h-10V0H26.3z"/>
										</svg>
									</span>
									<!-- <h3>HTML5</h3> -->
									<p>HTML5 has the latest multimedia features and keeps it easily readable by humans and consistently understood by computers and other devices.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box box-style1">
									<span class="icn featured">
										<svg version="1.1"
											 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
											 x="0px" y="0px" width="166px" height="218px" viewBox="-16.8 -14.5 206 273"
											 overflow="visible" enable-background="new -16.8 -14.5 206 273" xml:space="preserve">
										<defs>
										</defs>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#4971B8" d="M156.5,62.5l-12.8,151.2l-57.8,16.5L85.6,62.5H156.5z M172.4,48.4
											c0,0-10.5,118.9-16.2,176.4C133.2,231.6,87.4,245,86,245c-1,0-46.8-13.4-70.2-20.1C10.5,167.3,0,48.4,0,48.4H172.4z"/>
										<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#5690CC" points="156.7,62.3 143.9,214.4 85.4,230.7 85.4,62.3 "/>
										<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="140.2,84.8 137.9,105.2 90.5,128.4 136.2,128.4 
											130.7,195.3 85.1,207.6 41.7,195 38.6,161.1 60.8,161.3 61.7,178.2 85.1,184.6 110.8,178 113,149.8 37.6,150 36,129.4 87,106.6 
											33.9,105.8 32.5,84.8 "/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#010101" d="M137.6,0v11.4h-8.8l8.6,11.9v9.5h-25.8V22.3h8.4
											c0,0,0.2-0.2,0.2-0.5l-9.3-13.1V0H137.6z M100,0v11.4h-8.6L100,23v9.7H74.2V22.1h8.6L73.5,8.5V0H100z M62.1,0v10.9H46.6v11.4h15.5
											v10.4H35.4V0H62.1z"/>
										</svg>
									</span>
									<!-- <h3>CSS3</h3> -->
									<p>CSS3 allows to build content-rich web pages with amazing visual effects, better user interfaces and cleaner pages that load ultra fast.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box box-style1">
									<span class="icn featured">
										<svg version="1.1"
											 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
											 x="0px" y="0px" width="166px" height="218px" viewBox="-16.8 -14.5 206 273"
											 overflow="visible" enable-background="new -16.8 -14.5 206 273" xml:space="preserve">
										<defs>
										</defs>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#03A48F" d="M156.5,62.5l-12.8,151.2l-57.8,16.5L85.6,62.5H156.5z M172.4,48.4
											c0,0-10.5,118.9-16.2,176.4C133.2,231.6,87.4,245,86,245c-1,0-46.8-13.4-70.2-20.1C10.5,167.3,0,48.4,0,48.4H172.4z"/>
										<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#6DC8C2" points="156.7,62.3 143.8,214.4 85.4,230.7 85.4,62.3 "/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M116.1,127.7H56.9l-1.2-21.9l62.5,0.2L116.1,127.7z M139.1,85.1
											c0,0.9-5.1,65.3-5.1,65.3h-14.9l9.3,45.2l-26.2,7.3l-5.1-52.6l-38.6-0.3l6.9,51.8L41.4,195L31.6,85.1H139.1z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#010101" d="M30.6,0.3c-0.4-1.1,0,32,0,32h10.5v-9.3c0,0,1.1-0.5,8.1,9.3
											c0.1,0.1,12.1,0,12.1,0l-7.5-11.1c0,0,9.9-2.8,5.1-14.8C55.3-2.6,31,1.4,30.6,0.3 M40.9,9.6c0,0,9-1.4,8.8,3.1
											c-0.2,4-8.8,2.9-8.8,2.9V9.6z M71.4,0.5H60.5l9.9,32h9.5l5.4-15.6l5.5,15.6h9.5l10.3-32.2H99.3L95,15.8L90,0.1h-8.9l-5,15.4
											L71.4,0.5z M112,0.7l0.2,31.6c0,0,34,5.6,30.7-18.8C140.5-4.4,112,0.7,112,0.7 M122.7,10c0,0,8.5-1.3,9.3,5.6c1,8.6-9.3,7.4-9.3,7.4
											V10z"/>
										</svg>

									</span>
									<!-- <h3>RWD</h3> -->
									<p>Responsive web design is a technic which produce a better reading for user with a minimum of resizing or scrolling on a wide range of devices.</p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>My recent tech stack is consist of jquery, backbone.js, bootstrap+less, node.js, modernizr.js</p>
						<a href="#portfolio" class="button button-big">Take a look at my recent work</a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper wrapper-style3">
				<article id="portfolio">
					<header>
						<h2>Awesome work makes happy clients.</h2>
						<span>Proin odio consequat  sapien vestibulum ipsum primis sed amet consequat lorem dolore feugiat lorem ipsum dolore.</span>
					</header>
					<div class="container">
						<div class="row">
							<div class="12u">
							</div>
						</div>
						<div class="row">
							<div class="4u">
								<article class="box box-style2">
									<a href="http://qstoq.me" class="image image-full"><img src="images/qstoq_shadow.png" alt="" /></a>
									<h3><a href="http://qstoq.me">Qstoq</a></h3>
									<p>Georgeous web app about creating small price tag for any online or offline goods</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://hipe.im" class="image image-full"><img src="images/hipe_shadow.png" alt="" /></a>
									<h3><a href="http://hipe.im">Hipe messenger</a></h3>
									<p>Web application for the awesome gif-centered chating mobile app with pin bookmarklet</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://favestore.com" class="image image-full"><img src="images/fave_shadow.png" alt="" /></a>
									<h3><a href="http://favestore.com">Fave store</a></h3>
									<p>Ultra fast catalog web app of interesting stuff with personal selections</p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u">
								<article class="box box-style2">
									<a href="http://weheartpics.com" class="image image-full"><img src="images/whp_shadow.png" alt="" /></a>
									<h3><a href="http://weheartpics.com">We Heart Pics</a></h3>
									<p>Fully responsive mobile-first web application for photosharing mobile app</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://bigbuzzy.ru" class="image image-full"><img src="images/bigbuzzy_shadow.png" alt="" /></a>
									<h3><a href="http://bigbuzzy.ru">BigBuzzy</a></h3>
									<p>High-load groupon-like site with ie6 support and absolutely crazy team members</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://bigbuzzy.ru/m/" class="image image-full"><img src="images/mbigbuzzy_shadow.png" alt="" /></a>
									<h3><a href="http://bigbuzzy.ru/m/">Mobile BigBuzzy</a></h3>
									<p>Mobile-first site on progress enhancement and ability to work without js</p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#contact" class="button button-big">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper wrapper-style4">
				<article id="contact" class="container small">
					<header>
						<h2>Want to hire me? Get in touch!</h2>
						<span>I'll answer you if it is a day or a night, so don't be shy — I'm right behind this form.</span>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<input type="hidden" name="token" id="token" value="<?php echo $newToken;?>"/>
									<div>
										<div class="row half">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<a href="#" class="button form-button-submit">Send Message</a>
												<a href="#" class="button button-alt form-button-reset">Clear Form</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li class="linkedin"><a href="http://linkedin.com/in/proll/" class="fa fa-linkedin"><span>LinkedIn</span></a></li>
									<li class="twitter"><a href="https://twitter.com/prolll" class="fa fa-twitter"><span>Twitter</span></a></li>
									<li class="facebook"><a href="https://www.facebook.com/prolll" class="fa fa-facebook"><span>Facebook</span></a></li>
									<li class="github"><a href="https://github.com/proll" class="fa fa-github"><span>Github</span></a></li>
									<li class="tumblr"><a href="http://blog.prolll.com" class="fa fa-tumblr"><span>Tumblr</span></a></li>
									<!-- <li class="dribbble"><a href="http://dribbble.com/n33" class="fa fa-dribbble"><span>Dribbble</span></a></li>
									<li class="googleplus"><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
									<li class="rss"><a href="#" class="fa fa-rss"><span>RSS</span></a></li>
									<li class="instagram"><a href="#" class="fa fa-instagram"><span>Instagram</span></a></li>
									<li class="foursquare"><a href="#" class="fa fa-foursquare"><span>Foursquare</span></a></li>
									<li class="skype"><a href="#" class="fa fa-skype"><span>Skype</span></a></li>
									<li class="soundcloud"><a href="#" class="fa fa-soundcloud"><span>Soundcloud</span></a></li>
									<li class="youtube"><a href="#" class="fa fa-youtube"><span>YouTube</span></a></li>
									<li class="blogger"><a href="#" class="fa fa-blogger"><span>Blogger</span></a></li>
									<li class="flickr"><a href="#" class="fa fa-flickr"><span>Flickr</span></a></li>
									<li class="vimeo"><a href="#" class="fa fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; 2014 Gleb Polushkin</li>
						</ul>
					</footer>
				</article>
			</div>


	</body>
</html>