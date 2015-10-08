<!doctype html>
<html lang="en">
<head>
	<title>Titan responsive css grid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- fontawesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- select menu styling -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.selectboxit/3.8.0/jquery.selectBoxIt.css">
	<!-- jquery ui, mobile and main stylesheet(sass concat) -->
	<link rel="stylesheet" href="stylesheets/jquery-ui.min.css">
	<link rel="stylesheet" href="stylesheets/main.css">
	<!-- typography -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<form action="#" class="search-dropdown-menu">
		<input type="text" placeholder="zoeken" name="mainsearch">
	</form>	

	<div class="row hero-unit bloghero">
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
				<h1 class="center-text">Nieuws</h1>
			</div>
		</div><!-- /.container -->
		<div class="hero-edge"></div><!-- /.hero-edge -->
	</div><!-- /.row -->

	<div class="blog">
		<div class="container">
			<div class="row filterheader">		
				<div class="column-6">
					<h2>BLOG</h2>
				</div><!-- /.column-8 -->
				
				<div class="column-3">
					<select name="archief">
						<option selected="" disabled="">Archief</option>
						<option value="afrika">Afrika</option>
						<option value="antartica">Antartica</option>
						<option value="azie">Azie</option>
					</select>
				</div><!-- /.column-2 -->
				<div class="column-3">
					<select name="categorie">
						<option selected="" disabled="">Categorie</option>
						<option value="afrika">Afrika</option>
						<option value="antartica">Antartica</option>
						<option value="azie">Azie</option>
					</select>
				</div><!-- /.column-2 -->
			</div><!-- /.row -->

			<div class="row">
				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->

				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->
				
				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->

				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->

			<div class="row">
				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->

				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->
				
				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->

				<div class="column-3">
					<article>
						<figure>
							<a href="#">
								<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/69188183/m%3D2048/69bc0269c0494617aa93bbafc6f35cb2')"></figure>
								<span class="category">Foto van de dag</span>
							</a>
						</figure>
						<div class="article-content">
							<h3>Man rijdt op crossmotor op de golven van Tahiti</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi explicabo.</p>
							<a href="#" class="btn btn-fullwidth">LEES MEER</a>
						</div><!-- /.article-content -->
						<div class="article-meta">
							<div class="publish-date">gepost op: 4 augustus 2015</div>
						</div>
					</article>
				</div><!-- /.column-3 -->
			</div><!--/.row -->

			<div class="pagination">
				<a href="#" class="btn">vorige</a>
				<a href="#" class="btn">1</a>
				<a href="#" class="btn">2</a>
				<a href="#" class="btn">3</a>
				<a href="#" class="btn">volgende</a>
			</div><!-- /.pagination -->

		</div><!-- /.container -->
	</div><!-- /.blog -->
	
<?php require('footer.php'); ?>