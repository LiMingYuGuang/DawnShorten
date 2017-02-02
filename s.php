<!DOCTYPE HTML>
<html>
	<head>
		<title>DawnUrlShorten</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1>DawnUrlShorten</h1>
						<p>Just another UrlShorten<br />
						built by <a href="https://lim-light.com/">DawnLight</a> for <a href="https://go.lim-light.com">DawnUrlShorten</a>.</p>
						<?php if (isset($_GET["ok"])) { $ok=$_GET["ok"]; echo "<strong><p>OK!Your shorturl is <a href='".$ok."'>".$ok."</a>.</p></strong>"; } ?>
						<?php if (isset($_GET["longurl"])) { $longurl=$_GET["longurl"]; echo "<strong><p>The long url is <a href='".$longurl."'>".$longurl."</a>.</p></strong>"; } ?>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#Shorten" class="active">Shorten</a></li>
							<li><a href="#Reduce">Reduce</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="Shorten" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Shorten</h2>
										</header>
                                        <form method="post" action="index.php?shorten">
                                            <div class="row uniform">
                                                <div class="6u 12u$(xsmall)">
                                                    <input type="text" name="long" id="long" value="" placeholder="LongUrl">
                                                </div>
                                                <div class="6u$ 12u$(xsmall)">
                                                    <input type="text" name="short" id="short" value="" placeholder="ShortUrl(https://go.lim-ligh.com/...)">
                                                </div>
                                                <div class="12u$">
                                                    <input type="password" name="passwd" id="passwd" value="" placeholder="PassWord">
                                                </div>
                                                <div class="12u$">
                                                    <ul class="actions">
                                                        <li><input type="submit" value="Short it!" class="special"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
									</div>
									<span class="image"><img src="images/pic01.jpg" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="Reduce" class="main">
                                <div class="spotlight">
                                    <div class="content">
                                        <header class="major">
                                            <h2>Reduce</h2>
                                        </header>
                                        <form method="post" action="index.php?reduce">
                                            <div class="row uniform">
                                                <div class="12u$">
                                                    <input type="text" name="short" id="short" value="" placeholder="ShortUrl(https://go.lim-ligh.com/...)">
                                                </div>
                                                <div class="12u$">
                                                    <ul class="actions">
                                                        <li><input type="submit" value="Reduce Url" class="special"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <span class="image"><img src="images/pic01.jpg" alt="" /></span>
                                </div>
							</section>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy;2016 DawnLight. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>