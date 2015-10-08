<!doctype html>
<html lang="en">
<head>
	<title>Titan responsive css grid</title>
	<meta charset="UTF-8">
	<!-- responsive viewport meta -->
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

			<!-- search form -->
			<form action="#" class="compare-travels-form">
				<h1>Waar wil je heen?</h1>
				<select name="continent" class="continent">
					<option selected="" disabled="">CONTINENT</option>
					<option value="afrika">Afrika</option>
					<option value="antartica">Antartica</option>
					<option value="azie">Azie</option>
				</select>
				<select name="land">
					<option selected="" disabled="">LAND</option>
					<option value="AF">Afghanistan</option>
					<option value="AX">Åland Islands</option>
					<option value="AL">Albania</option>
				</select>
				<select name="reissoort">
					<option selected="" disabled="">REISSOORT</option>
					<option value="autorondreis">Autorondreis</option>
					<option value="familiereis">Familiereis</option>
					<option value="fietsrondreis">Fietsrondreis</option>
				</select>
				<select name="reisduur">
					<option selected="" disabled="">REISDUUR</option>
					<option value="1t9">1 tot 9</option>
					<option value="10t15">10 tot 15</option>
				</select>
				<input type="submit" value="ZOEKEN">
			</form>

		</div><!-- /.container -->
		<div class="hero-edge"></div><!-- /.hero-edge -->
	</div><!-- /.row -->