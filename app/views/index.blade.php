<!DOCTYPE HTML>
<html>
	<head>
		<title>Big Picture by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<!-- Promos -->
		{{ HTML::script('js/jquery.min.js')}}
		{{ HTML::script('js/jquery.poptrox.min.js')}}
		{{ HTML::script('js/skel.min.js')}}
		{{ HTML::script('js/init.js')}}
		
		
		
		<script src="js/init.js"></script>
		<noscript>
			{{ HTML::style('css/skel-noscript.css', array('media' => 'screen'))}}
			{{ HTML::style('css/style.css', array('media' => 'screen'))}}
			
			
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo"><a href="/">Eder Alvarez</a></h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Inicio</a></li>
							<li><a href="#one">Lo que hago</a></li>
							<li><a href="#two">Quien Soy</a></li>
							<li><a href="#work">Mi trabajo</a></li>
							<li><a href="#contact">Contacto</a></li>
						</ul>
					</nav>

			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<h2>Hey.</h2>
					</header>
					<p>
					Bienvenido a <strong>Mi web</strong> solo quiero compartir algo de mi experiencia haciendo cosas
					para internet, especialmete con <a href="#">Laravel</a> 

					</p>
					<footer>
						<a href="#one" class="button style2 down">Más</a>
					</footer>
				</div>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Lo que hago</h2>
					</header>
					<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu, 
					id varius justo euismod in. Curabitur egestas consectetur magna urna.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Quien Soy</h2>
					</header>
					<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu, 
					id varius justo euismod in. Curabitur egestas consectetur magna urna.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>
			
		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>My Work</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
						Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis 
						arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae urna.</p>
					</header>
					
					<!--
						 Lightbox Gallery
						 
						 Powered by poptrox. Full docs here: https://github.com/n33/jquery.poptrox
					-->
						<div class="container small gallery">
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/01.jpg" class="image full l"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/02.jpg" class="image full r"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image full l"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image full r"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image full l"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image full r"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
							</div>
						</div>

				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Say Hello.</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
					</header>
					<div class="box container small">
					
						<!--
							 Contact Form
							 
							 To get this working, place a script on your server to receive the form data, then
							 point the "action" attribute to it (eg. action="http://mydomain.tld/mail.php").
							 More on how it all works here: http://www.1stwebdesigner.com/tutorials/custom-php-contact-forms/
						-->
							<form method="post" action="#">
								<div class="row half">
									<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u"><input type="text" name="email" placeholder="Email" /></div>
								</div>
								<div class="row half">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
			</section>
			
		<!-- Footer -->
			<footer id="footer">
			
				<!--
				     Social Icons
				     
				     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
				-->
					<ul class="actions">
						<li><a href="#" class="fa solo fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa solo fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa solo fa-google-plus"><span>Google+</span></a></li>
						<li><a href="#" class="fa solo fa-dribbble"><span>Dribbble</span></a></li>
						<li><a href="#" class="fa solo fa-pinterest"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa solo fa-instagram"><span>Instagram</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://html5up.net/">HTML5 UP</a></li>
					</ul>
			
			</footer>

	</body>
</html>