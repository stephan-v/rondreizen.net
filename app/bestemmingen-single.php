<!doctype html>
<html lang="en">
<head>
	<title>Titan responsive css grid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- select menu styling -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.selectboxit/3.8.0/jquery.selectBoxIt.css">
	<!-- main stylesheet(sass concat) -->
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

	<div class="row hero-unit singlehero">
		<div class="container">
			<div class="logo-holder">
				<a href="index.php" class="logo"></a>
				<div class="triangle"></div>
			</div>

			<!-- responsive navigation -->
			<nav class="navigation-menu">
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="bestemmingen.php">bestemmingen</a></li>
					<li><a href="zoekpagina.php">rondreis zoeken</a></li>
					<li><a href="reisorganisaties.php">reisorganisaties</a></li>
					<li><a href="reissoorten.php">reissoorten</a></li>
					<li><a href="blog.php">nieuws</a></li>
					<li><a href="#">mijn rondreizen</a></li>
					<li class="close-responsive-menu"><a href="#">sluit menu</a></li>
					<li class="search"><a href="#" class="search-button"></a></li>
				</ul>
				
				<button type="button" href="#" class="navigation-toggle">
					<span></span>
				</button><!-- /.navigation-toggle -->
			</nav>

			<div class="absolute-container">
				<h1 class="center-text">Thailand reis</h1>
			</div>
		</div><!-- /.container -->
		<div class="hero-edge"></div><!-- /.hero-edge -->
	</div><!-- /.row -->

<div class="row toprow-metadata">
	<div class="container">
		<div class="column-3">
			<aside class="sidebar sidebar-top max-height">
				<h2>Vergelijk rondreizen</h2>
				<p>87 rondreizen door Indonesie van 15 reisorganisaties</p>
				<a href="zoekpagina.php" class="btn btn-fullwidth">vergelijk</a>
			</aside>
		</div><!-- /.column-3 -->

		<div class="column-9 tabs">
			<ul>
				<li><a href="#tabs-1">overzicht</a></li>
				<li><a href="#tabs-2">algemeen</a></li>
				<li><a href="#tabs-3">prijzen</a></li>
			</ul>
			<div id="tabs-1" class="content">
				<article>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic odio, dolores, nesciunt non quis obcaecati. Minus odit temporibus porro ducimus sint. Culpa dolorem quos ex cum, saepe optio placeat. Odio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis impedit cupiditate omnis nesciunt repellat voluptate dicta sit praesentium quis laudantium nam explicabo magni, magnam sint quos rerum necessitatibus voluptatibus porro.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ea consequuntur similique, mollitia quo excepturi enim itaque, ut totam aliquam, ratione, ipsam obcaecati facilis! Obcaecati libero cum magni tempora distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio modi excepturi sit reprehenderit temporibus culpa omnis, a ex assumenda, libero cum, voluptates labore numquam fuga officia accusamus in dolore?</p>
				</article>
			</div><!-- /#tabs-1 -->

			<div id="tabs-2" class="content">
				<article>
					<p>Consectetur adipisicing elit. Hic odio, dolores, nesciunt non quis obcaecati. Minus odit temporibus porro ducimus sint. Culpa dolorem quos ex cum, saepe optio placeat. Odio!</p>
				</article>
			</div><!-- /#tabs-2 -->

			<div id="tabs-3" class="content">
				<article>
					<p>Minus odit temporibus porro ducimus sint. Culpa dolorem quos ex cum, saepe optio placeat. Odio!</p>
				</article>
			</div><!-- /#tabs-3 -->
		</div><!-- /.column-9 -->

	</div><!-- /.container -->
</div><!--/.row -->

<div class="row top-organizations">
	<div class="container">
		<div class="organization owl-carousel" id="organization-carousel">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
			<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
		</div><!-- /.organization -->
	</div><!-- /.container -->
</div><!-- /.top-organization -->

<div class="row">
	<div class="container">
		<div class="column-3">
			<div class="header row">
				<h2>NIEUWS</h2>
			</div>
			
			<aside class="sidebar blog">
				<article>
					<figure>
						<img src="https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2" alt="">
						<span class="category">Foto van de dag</span>
					</figure>
					<div class="article-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div><!-- /.article-content -->
				</article>

				<article>
					<figure>
						<img src="https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2" alt="">
						<span class="category">Foto van de dag</span>
					</figure>
					<div class="article-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div><!-- /.article-content -->
				</article>

			<div class="header row">
				<h2>RONDREIS <span class="bold">COMBINEREN</span></h2>
			</div>
			<div class="destinations-from-agency combine">
				<p>Een Thailand reis kun je combineren met:</p>
				<ul>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
					<li>
						<img src="http://rondreizen.net/pub/img/flags/bw.png" alt="">
						<a href="#">Argentinie</a>
					</li>
				</ul>
				</div><!-- /.destinations-from-agency -->
			</aside><!-- /aside -->
		</div><!-- /.column-3 -->

		<div class="column-9">
			<div class="row owl-theme">
				<div class="header row">
					<h2>TOP <span class="bold">BESTEMMINGEN</span></h2>
					<div id="top-travels-dots" class="owl-dots"></div>
				</div>

				<div class="owl-carousel top-travels row" id="top-travels-carousel-3">
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 500</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/97225251/m%3D2048/af26b9b6a5fb0db353eb71aa5077d1fb');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 349</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/77645015/m%3D2048_k%3D1/7a991d142188661f4a9a5632476b0e57');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 1299</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/62701605/m%3D2048/452854f4e691feaed376d29b0708bb6c');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 35</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/77328327/m%3D2048/d8cee4650a86fd390316fdf7e5027956');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 500</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/97225251/m%3D2048/af26b9b6a5fb0db353eb71aa5077d1fb');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 349</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/77645015/m%3D2048_k%3D1/7a991d142188661f4a9a5632476b0e57');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 1299</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/62701605/m%3D2048/452854f4e691feaed376d29b0708bb6c');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
					<div class="column-3">
						<figure>
							<div class="pricetag">
								<span class="price">vanaf<br>&euro; 35</span>
								<img src="images/pricetag.png" alt="">
							</div><!--/. price -->
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/77328327/m%3D2048/d8cee4650a86fd390316fdf7e5027956');"></figure>
						</figure>
						<div class="article-content">
							<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" class="organization-logo" alt="arke-logo">
							<h3>Dwars door de Elzas</h3>
							<h4>8 daagse autorondreis excl. vliegticket</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore temporibus rem hic quisquam explicabo nostrum tempora nisi aut repellat eos....</p>
						</div><!-- /.article-content -->
					</div><!-- /.column-3 -->
				</div><!-- /.top-travels -->
			</div><!-- /.row -->

			<div class="row">
				<h2>Feiten Azie</h2>
				<div class="factbox">
					<div class="row">
						<div class="column-6">
							<span class="fa-stack fa-3x">
								<i class="fa fa-circle fa-stack-2x"></i>
							 	<i class="fa fa-sun-o fa-stack-1x fa-inverse"></i>
							</span>
							<h2>Klimaat</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, incidunt, quasi? Ea quod odit totam, aspernatur animi, quidem tempora voluptatibus vero atque vitae pariatur consequuntur autem, repellendus, voluptate cupiditate quaerat!</p>
						</div><!-- /.column-6 -->
						<div class="column-6">
							<span class="fa-stack fa-3x">
								<i class="fa fa-circle fa-stack-2x"></i>
							 	<i class="fa fa-language fa-stack-1x fa-inverse"></i>
							</span>
							<h2>Taal</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, incidunt, quasi? Ea quod odit totam, aspernatur animi, quidem tempora voluptatibus vero atque vitae pariatur consequuntur autem, repellendus, voluptate cupiditate quaerat!</p>
						</div><!-- /.column-6 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="column-6">
							<span class="fa-stack fa-3x">
								<i class="fa fa-circle fa-stack-2x"></i>
							 	<i class="fa fa-money fa-stack-1x fa-inverse"></i>
							</span>
							<h2>Valuta</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, incidunt, quasi? Ea quod odit totam, aspernatur animi, quidem tempora voluptatibus vero atque vitae pariatur consequuntur autem, repellendus, voluptate cupiditate quaerat!</p>
						</div><!-- /.column-6 -->
						<div class="column-6">
							<span class="fa-stack fa-3x">
								<i class="fa fa-circle fa-stack-2x"></i>
							 	<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
							</span>
							<h2>Hoofdstad</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, incidunt, quasi? Ea quod odit totam, aspernatur animi, quidem tempora voluptatibus vero atque vitae pariatur consequuntur autem, repellendus, voluptate cupiditate quaerat!</p>
						</div><!-- /.column-6 -->
					</div><!-- /.row -->
				</div><!-- /.factbox -->
			</div><!-- /.row -->
			
		</div><!-- /. column-9 -->

	</div><!-- /.container -->
</div><!-- /.row .blog -->

<?php require('footer.php'); ?>