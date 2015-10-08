<!doctype html>
<html lang="en">
<head>
	<title>Titan responsive css grid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheet(sass concat) -->
	<link rel="stylesheet" href="stylesheets/main.css">
	<!-- typography -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<form action="#" class="search-dropdown-menu">
		<input type="text" placeholder="zoeken" name="mainsearch">
	</form>	

	<div class="row hero-unit destinationhero">
		<div class="container">
			<div class="logo-holder">
				<a href="index.php" class="logo"></a>
				<div class="triangle"></div>
			</div>

			<!-- responsive navigation -->
			<nav class="navigation-menu dark-menu">
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="bestemmingen.php">bestemmingen</a></li>
					<li><a href="zoekpagina.php">rondreis zoeken</a></li>
					<li><a href="reisorganisaties.php">reisorganisaties</a></li>
					<li><a href="#">reissoorten</a></li>
					<li><a href="blog.php">nieuws</a></li>
					<li><a href="#">mijn rondreizen</a></li>
					<li class="close-responsive-menu"><a href="#">sluit menu</a></li>
					<li class="search search-dark">
						<a href="#" class="search-button"></a>
					</li>
				</ul>
				
				<button type="button" href="#" class="navigation-toggle">
					<span></span>
				</button><!-- /.navigation-toggle -->
			</nav>

			<div class="worldmap">
				<a href="#" class="pin north-america" title="Noord-Amerika"></a>
				<a href="#" class="pin south-america" title="Zuid-Amerika"></a>
				<a href="#" class="pin europe" title="Europa"></a>
				<a href="#" class="pin africa" title="Afrika"></a>
				<a href="#" class="pin asia" title="Azie"></a>
				<a href="#" class="pin oceania" title="Oceanie"></a>

				<img src="images/worldmap.png" alt="">
			</div><!-- /.worldmap -->
		</div><!-- /.container -->
		<div class="hero-edge"></div><!-- /.hero-edge -->
	</div><!-- /.row -->

	<div class="row top-destinations">
		<div class="row header">
			<div class="container owl-theme">
				<h2>TOP <span class="bold">BESTEMMINGEN</span></h2>
				<div id="destinations-dots" class="owl-dots"></div>
			</div><!-- /.container -->
		</div><!-- /.row -->

		<div class="row ">
			<div class="container owl-carousel" id="destination-carousel">
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/68038239/m%3D2048/7e2971a6f24894b65c6c1b752d09c5ae');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/64879019/m%3D2048/761ea797505739c613c0a45e7fa617e9');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/71087645/m%3D2048/eb4ceaf8acb703d2ff9f85fa15a8ec59');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/86942421/m%3D2048/01691301b1bfa983e13bdbd29b3c6489');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/68038239/m%3D2048/7e2971a6f24894b65c6c1b752d09c5ae');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/64879019/m%3D2048/761ea797505739c613c0a45e7fa617e9');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/71087645/m%3D2048/eb4ceaf8acb703d2ff9f85fa15a8ec59');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
				<div class="column-3">
					<a href="#">
						<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/86942421/m%3D2048/01691301b1bfa983e13bdbd29b3c6489');"></figure>
					</a>
					<div class="article-content">
						<h3>India</h3>
						<p>85 reizen</p>
					</div><!-- /.article-content -->
				</div><!-- /.column-3 -->
			</div><!-- /.container -->
		</div><!-- /.row -->
	</div><!-- /.row top-destinations -->
	
	<div class="row destinations">
		<div class="container">
			<h2>ALLE RONDREIS <span class="bold">BESTEMMINGEN</span></h2>
			<div class="row">
				<div class="column-3 continent-container africa">
					<div class="destination-header">
						<h2>Afrika</h2>
						<p>29 landen</p>
						<div class="hero-edge white-edge"></div><!-- /.hero-edge -->
					</div>
					<ul class="countrylist">
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
					</ul>
				</div><!-- /.column-3 -->
				<div class="column-3 continent-container asia">
					<div class="destination-header">
						<h2>Azie</h2>
						<p>6 landen</p>
						<div class="hero-edge white-edge"></div><!-- /.hero-edge -->
					</div>
					<ul class="countrylist">
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
					</ul>
				</div><!-- /.column-3 -->
				<div class="column-3 continent-container europe">
					<div class="destination-header">
						<h2>Europa</h2>
						<p>19 landen</p>
						<div class="hero-edge white-edge"></div><!-- /.hero-edge -->
					</div>
					<ul class="countrylist">
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
					</ul>
				</div><!-- /.column-3 -->
				<div class="column-3 continent-container north-america">
					<div class="destination-header">
						<h2>Noord-Amerika</h2>
						<p>34 landen</p>
						<div class="hero-edge white-edge"></div><!-- /.hero-edge -->
					</div>
					<ul class="countrylist">
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
					</ul>
				</div><!-- /.column-3 -->
			</div><!-- /.row -->

			<div class="row">
				<div class="column-3 continent-container south-america">
					<div class="destination-header">
						<h2>Zuid-Amerika</h2>
						<p>34 landen</p>
						<div class="hero-edge white-edge"></div><!-- /.hero-edge -->
					</div>
					<ul class="countrylist">
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
					</ul>
				</div><!-- /.column-3 -->
				<div class="column-3 continent-container oceania">
					<div class="destination-header">
						<h2>Oceanie</h2>
						<p>34 landen</p>
						<div class="hero-edge white-edge"></div><!-- /.hero-edge -->
					</div>
					<ul class="countrylist">
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
					</ul>
				</div><!-- /.column-3 -->
				<div class="column-3 continent-container antartica">
					<div class="destination-header">
						<h2>Antartica</h2>
						<p>3 landen</p>
						<div class="hero-edge white-edge"></div><!-- /.hero-edge -->
					</div>
					<ul class="countrylist">
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
						<li>
							<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
							<a href="#">Country</a>
						</li>
					</ul>
				</div><!-- /.column-3 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!--/.row -->
<?php require('footer.php'); ?>