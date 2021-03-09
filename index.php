<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<link rel="icon" type="image/png" href="favicon.PNG" />

		<title>majsterkovic</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Witaj!</a></li>
							<li><a href="#one">Zainteresowania</a></li>
							<li><a href="#two">Moje projekty</a></li>
							<li><a href="#three">Kontakt</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						
						<div class="inner">
							<h1>majsterkovic</h1>
							<p>Jestem studentem informatyki na drugim semstrze.</p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Więcej</a></li>
							</ul>
						</div>
						
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Smartfony i komputery</h2>
									<p>Interesuję się urządzeniami elektronicznymi i z chęcią pomogę Ci w wyborze komputera lub smartfonu. W mojej głowie znajdziesz specyfikacje (prawie) wszystkich telefonów Xiaomi, ale inne chińskie marki również nie są mi obce.</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">Więcej</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Fotografia</h2>
									<p>Piękne zdjęcia cieszą duszę. W ramach testowania smartfonów lubię strzelić im oraz z nich ładne ujęcie.</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">Więcej</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Moje umiejętności</h2>
							<p>Wciąż zdobywam nowe!</p>
							<div class="features">
								<section>
									<span class="icon solid major fa-code"></span>
									<h3>Programowanie</h3>
									<p>Obecnie językiem, w którym potrafię zrobić najwięcej jest Python. Posiadam także znajomość C++ oraz C.</p>
								</section>
								<section>
									<span class="icon solid major fa-cog"></span>
									<h3>Matematyka</h3>
									<p>Lubię ciekawe zadania matematyczne oraz zagadni logiczne. Mogę pomóc Ci na poziomie szkoły podstawowej, średniej, a nawet pierwszego roku studiów.</p>
								</section>
								<section>
									<span class="icon solid major fa-desktop"></span>
									<h3>Konfiguracja komputera.</h3>
									<p>Nie są mi obce podstawowe czynności związane z komputerem. Instalacja na nowo systemów Windows, Linux, diagnoza i naprawa podstawowych błędów. Jestem w tym zaprawiony.</p>
								</section>
								<section>
									<span class="icon brands major fa-twitter"></span>
									<h3>Praca w zespole</h3>
									<p>Trello to moje ulubione narzędzie. Na początku pandemii koronawirusa stałem się koordynatorem prowadzenia zajęć i rozwiązywania zadań. Lubię kiedy w projekcie każdy ma swoje zadania i każdy dzieli się swoimi pomysłami.</p>
								</section>
							</div>
							<!-- <ul class="actions">
								<li><a href="generic.html" class="button">Więcej</a></li>
							</ul> -->
						</div>
					</section>

				<!-- Three -->

				<?php
					$name = $_POST['name'];
					$email = $_POST['email'];
					$message = $_POST['message'];
					$from = 'From: majsterkovic@github.io';
   					$to = 'majsterkovic@gmail.com';
     				$email_subject = 'New Contact Form Submission!';
    				$body = "Name: $name\nE-mail: $email\n\nThe message is below:\n$message";;
				?>

					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Pozostań w kontakcie</h2>
							<p>Jeśli chcesz się ze mną skontaktować, pisz!</p>
							<div class="split style1">
								<section>
									<form method="post" action="index.php">
										<div class="fields">
											<div class="field half">
												<label for="name">Imię</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Wiadomość</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Adres</h3>
											<span>Somewhere<br />
											over the rainbow<br />
											</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">majsterkovic@outlook.com</a>
										</li>
										<!-- <li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li> -->
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>