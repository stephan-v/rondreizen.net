<!-- setting the hero background dynamically by adding a class to it -->
<?php $imageclass='car-travels-hero'; ?>

<!doctype html>
<html lang="en">
<head>
	<title>Titan responsive css grid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	<div class="row hero-unit <?= $imageclass; ?>">
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
				<h1 class="center-text">Autorondreis</h1>
			</div>
		</div><!-- /.container -->
		<div class="hero-edge"></div><!-- /.hero-edge -->
	</div><!-- /.row -->

<div class="row toprow-metadata">
	<div class="container">
		<div class="column-3">
			<aside class="sidebar sidebar-top">
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

<?php require('footer.php'); ?>