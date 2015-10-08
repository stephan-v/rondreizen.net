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

	<div class="row hero-unit" style="background: url('https://drscdn.500px.org/photo/87619513/m%3D2048/6a5885abdfdf4a92f3c2bc810b88af4b') center; background-size: cover;">
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
				<h1 class="center-text">Thailand reis - Blogbericht</h1>
			</div>
		</div><!-- /.container -->
		<div class="hero-edge"></div><!-- /.hero-edge -->
	</div><!-- /.row -->

<div class="row toprow-metadata">
	<div class="container">
		<div class="column-3">
			<aside class="sidebar sidebar-top">
				<h2>Over deze post</h2>
				<ul class="blogpost-meta">
					<li><i class="fa fa-clock-o"></i>Geplaatst op: 10 augustus 2015</li>
					<li><i class="fa fa-pencil"></i>Door: Redactie</li>
					<li><i class="fa fa-eye"></i>73 keer bekeken</li>
				</ul>
				<a href="zoekpagina.php" class="btn btn-fullwidth">meer berichten</a>
			</aside>
		</div><!-- /.column-3 -->

		<div class="column-9 tabs blogpost-single">
			<ul>
				<li><a href="#tabs-1">overzicht</a></li>
			</ul>
			<div id="tabs-1" class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic odio, dolores, nesciunt non quis obcaecati. Minus odit temporibus porro ducimus sint. Culpa dolorem quos ex cum, saepe optio placeat. Odio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis impedit cupiditate omnis nesciunt repellat voluptate dicta sit praesentium quis laudantium nam explicabo magni, magnam sint quos rerum necessitatibus voluptatibus porro.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ea consequuntur similique, mollitia quo excepturi enim itaque, ut totam aliquam, ratione, ipsam obcaecati facilis! Obcaecati libero cum magni tempora distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio modi excepturi sit reprehenderit temporibus culpa omnis, a ex assumenda, libero cum, voluptates labore numquam fuga officia accusamus in dolore?</p>
			</div><!-- /#tabs-1 -->
		</div><!-- /.column-9 -->

		<div class="pagination">
			<a href="#" class="btn">vorige post</a>
			<a href="#" class="btn">volgende post</a>
		</div><!-- /.pagination -->
	</div><!-- /.container -->
</div><!--/.row -->

<?php require('footer.php'); ?>