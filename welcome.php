<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Web3D DAOUDI Bilel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>WEB3D</strong> <span>by Bilel Daoudi</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="landing.html">Pratical Works</a></li>
							<li><a href="landing.html">Scenes</a></li>
							<li><a href="logout.php">Log Out</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Hi, my name is Daoudi Bilel</h1>
							</header>
							<div class="content">
								<p>This website is designed and developped for<br />
								one purpose which is studying.</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/3d.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">TP1</a></h3>
										<p>First pratical work</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/img2.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="welcome.php" class="link" onclick="return alert('Not yet done :( .')">TP2</a></h3>
										<p>Second pratical work</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/img6.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="welcome.php" class="link" onclick="return alert('Not yet done :( .')">TP3</a></h3>
										<p>Third pratical work</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/img10.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="research.html" class="link">Research</a></h3>
										<p>About Second life</p>
									</header>
								</article>
								
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>About Me</h2>
									</header>
									<p>My name is DAOUDI Bilel am 24 years old a computer science student.
										 This is my last year to get my Master degree in DATA ANALYSIS AND WEB TECHNOLOGIES speciality. 
										 This website is created to present some of pratical works and research that i have done.
										 Thanks to all FERHAT Abbas Computer science departement teachers.</p>
									<ul class="actions">
										<li><a href="landing.html" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">daoudibiillel@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 00000</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Université Ferhat Abbas<br />
										Bez , setif 19000<br />
										Algeria</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="https://twitter.com/bilelmcobilos" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/bilel.daoudi3" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/daoudi.bilel" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/bilosbilel" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="https://www.linkedin.com/in/daoudi-bilel-b9b437180/" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Bilos</li><li>Edited: <a href="https://el-batal.blogspot.com">DAOUDI Bilel</a></li>
						</ul>
					</div>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://use.fontawesome.com/693217babc.js"></script>
	</body>
</html>