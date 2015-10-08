<!-- setting the hero background dynamically by adding a class to it -->
<?php $imageclass='searchhero'; ?>

<?php require('header.php'); ?>

<div class="row searchpage">
	<div class="container">
		<div class="column-3">
			<div class="filterheader">
				<h2>FILTER</h2>
			</div><!-- /.filterheader -->
			
			<aside class="sidebar">
				<div class="filteroption slider">
					<h3 class="heading"><img src="images/collapsible.png" alt="">Prijs</h3>
					<div class="collapsible">
						<div id="price-slider"></div>
						<input type="text" class="left-price">
						<input type="text" class="right-price">
					</div><!-- /.collapsible -->
				</div><!-- /.filteroption -->
				
				<div class="filteroption slider">
					<h3 class="heading"><img src="images/collapsible.png" alt="">Reisduur</h3>
					<div class="collapsible">
						<div id="duration-slider"></div>
						<input type="text" class="left-days">
						<input type="text" class="right-days">
					</div><!-- /.collapsible -->
				</div><!-- /.filteroption -->

				<div class="filteroption">
					<h3 class="heading"><img src="images/collapsible.png" alt="">Reissoort</h3>
					<div class="collapsible">
						<form action="#">
							<div class="checkbox">
								<input type="checkbox" name="autorondreis" value="autorondreis" id="autorondreis">
								<label for="autorondreis">Autorondreis</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="familierondreis" value="familierondreis" id="familierondreis">
								<label for="familierondreis">Familierondreis</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="fietsrondreis" value="fietsrondreis" id="fietsrondreis">
								<label for="fietsrondreis">Fietsrondreis</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="fly-drive" value="fly-drive" id="fly-drive">
								<label for="fly-drive">Fly-drive</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="groepsrondreis" value="groepsrondreis" id="groepsrondreis">
								<label for="groepsrondreis">Groepsrondreis</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="individuelerondreis" value="individuelerondreis" id="individuelerondreis">
								<label for="individuelerondreis">Individuele rondreis</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="kampeerrondreis" value="kampeerrondreis" id="kampeerrondreis">
								<label for="kampeerrondreis">Kampeerrondreis</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="singlereis" value="singlereis" id="singlereis">
								<label for="singlereis">Singlereis</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="stedentrip" value="stedentrip" id="stedentrip">
								<label for="stedentrip">Stedentrip</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="wandelrondreis" value="wandelrondreis" id="wandelrondreis">
								<label for="wandelrondreis">Wandelrondreis</label>
							</div><!-- /.checkbox -->
						</form>
					</div><!-- /.price -->
				</div><!-- /.filteroption -->

				<div class="filteroption">
					<h3 class="heading"><img src="images/collapsible.png" alt="">Reisorganisaties</h3>
					<div class="collapsible">
						<form action="#">
							<div class="checkbox">
								<input type="checkbox" name="djoser" value="djoser" id="djoser">
								<label for="djoser">Djoser</label>
							</div><!-- /.checkbox -->
						</form>
					</div><!-- /.price -->
				</div><!-- /.filteroption -->

				<div class="filteroption">
					<h3 class="heading"><img src="images/collapsible.png" alt="">Continenten</h3>
					<div class="collapsible">
						<form action="#">
							<div class="checkbox">
								<input type="checkbox" name="afrika" value="afrika" id="afrika">
								<label for="afrika">Afrika</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="azie" value="azie" id="azie">
								<label for="azie">Azie</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="europa" value="europa" id="europa">
								<label for="europa">Europa</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="noordamerika" value="noordamerika" id="noordamerika">
								<label for="noordamerika">Noord-Amerika</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="oceanie" value="oceanie" id="oceanie">
								<label for="oceanie">Oceanie</label>
							</div><!-- /.checkbox -->
							<div class="checkbox">
								<input type="checkbox" name="zuidamerika" value="zuidamerika" id="zuidamerika">
								<label for="zuidamerika">Zuid-Amerika</label>
							</div><!-- /.checkbox -->
						</form>
					</div><!-- /.price -->
				</div><!-- /.filteroption -->

			</aside>
		</div><!-- /.column-3 -->

		<div class="column-9">
			<div class="row filterheader">
				<div class="column-9">
					<h2>25 RONDREIZEN <span class="bold">GEVONDEN</span></h2>
				</div><!-- /.column-8 -->
				<div class="column-3">
					<select name="categorie">
						<option selected="" disabled="">Sorteer op</option>
						<option value="afrika">Afrika</option>
						<option value="antartica">Antartica</option>
						<option value="azie">Azie</option>
					</select>
				</div><!-- /.column-3 -->
			</div><!-- /. row -->

			<article class="travelagency">
				<div class="row">
					<div class="column-3">
						<a href="#">
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/108176215/m%3D2048/a6739be6223064eae32417716f839370');">
								<div class="price">vanaf &euro;300</div>
							</figure>
						</a>
					</div><!-- /.column-3 -->
					<div class="column-7">
						<h3>Mexico, 20 dagen</h3>
						<h4>20 daagse <a href="#" class="bluelink">familiereis</a> inclusief vliegticket</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						
						<!-- jQuery dropdown countries button -->
						<div class="btn countries">
							<span class="content">azie - thailand</span>
							<ul class="country-list">
								<li><a href="test.php" class="btn">Een land</a></li>
								<li><a href="test.php" class="btn">Nog een land</a></li>
								<li><a href="test.php" class="btn">En nog eentje</a></li>
							</ul>
							<span class="more">+3</span>
						</div><!-- /.button -->		
						<a class="btn like" href="#">like</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="agency-logo">
							<a href="#">
								<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" alt="">
							</a>
						</div>
						<div class="call-to-action">
							<a href="#" class="btn centered">MEER INFO</a>
						</div><!-- /.price -->
						
					</div><!-- /.column-2 -->
				</div><!-- /.row -->
			</article><!-- /.travelagency -->

			<article class="travelagency">
				<div class="row">
					<div class="column-3">
						<a href="#">
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/111073131/m%3D2048/d5631bafc944550b8b0a7dcea664089f');">
								<div class="price">vanaf &euro;300</div>
							</figure>
						</a>
					</div><!-- /.column-3 -->
					<div class="column-7">
						<h3>Mexico, 20 dagen</h3>
						<h4>20 daagse <a href="#" class="bluelink">familiereis</a> inclusief vliegticket</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						
						<!-- jQuery dropdown countries button -->
						<div class="btn countries">
							<span class="content">azie - thailand</span>
							<ul class="country-list">
								<li><a href="test.php" class="btn">Een land</a></li>
								<li><a href="test.php" class="btn">Nog een land</a></li>
								<li><a href="test.php" class="btn">En nog eentje</a></li>
							</ul>
							<span class="more">+3</span>
						</div><!-- /.button -->		
						<a class="btn like" href="#">like</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="agency-logo">
							<a href="#">
								<img src="http://www.reisorakel.nl/afbeeldingen/logos/logo_peter_langhout_reizen.png" alt="">
							</a>
						</div>
						<div class="call-to-action">
							<a href="#" class="btn centered">MEER INFO</a>
						</div><!-- /.price -->
						
					</div><!-- /.column-2 -->
				</div><!-- /.row -->
			</article><!-- /.travelagency -->

			<article class="travelagency">
				<div class="row">
					<div class="column-3">
						<a href="#">
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/90987413/m%3D2048/cd36e73cf30ed165854f277e8e13c091');">
								<div class="price">vanaf &euro;300</div>
							</figure>
						</a>
					</div><!-- /.column-3 -->
					<div class="column-7">
						<h3>Mexico, 20 dagen</h3>
						<h4>20 daagse <a href="#" class="bluelink">familiereis</a> inclusief vliegticket</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						
						<!-- jQuery dropdown countries button -->
						<div class="btn countries">
							<span class="content">azie - thailand</span>
							<ul class="country-list">
								<li><a href="test.php" class="btn">Een land</a></li>
								<li><a href="test.php" class="btn">Nog een land</a></li>
								<li><a href="test.php" class="btn">En nog eentje</a></li>
							</ul>
							<span class="more">+3</span>
						</div><!-- /.button -->		
						<a class="btn like" href="#">like</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="agency-logo">
							<a href="#">
								<img src="http://www.boekenweek.nl/beeld/2015/schrijfwedstrijd/djoser_logo.gif" alt="">
							</a>
						</div>
						<div class="call-to-action">
							<a href="#" class="btn centered">MEER INFO</a>
						</div><!-- /.price -->
						
					</div><!-- /.column-2 -->
				</div><!-- /.row -->
			</article><!-- /.travelagency -->

			<article class="travelagency">
				<div class="row">
					<div class="column-3">
						<a href="#">
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/110087799/m%3D2048/4d2a85c8e55067b3cea52f64c1b62e5f');">
								<div class="price">vanaf &euro;300</div>
							</figure>
						</a>
					</div><!-- /.column-3 -->
					<div class="column-7">
						<h3>Mexico, 20 dagen</h3>
						<h4>20 daagse <a href="#" class="bluelink">familiereis</a> inclusief vliegticket</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						
						<!-- jQuery dropdown countries button -->
						<div class="btn countries">
							<span class="content">azie - thailand</span>
							<ul class="country-list">
								<li><a href="test.php" class="btn">Een land</a></li>
								<li><a href="test.php" class="btn">Nog een land</a></li>
								<li><a href="test.php" class="btn">En nog eentje</a></li>
							</ul>
							<span class="more">+3</span>
						</div><!-- /.button -->		
						<a class="btn like" href="#">like</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="agency-logo">
							<a href="#">
								<img src="https://opiness.nl/content/uploads/2012/10/333TRAVEL_logo_affiliate2-300x197.jpg" alt="">
							</a>
						</div>
						<div class="call-to-action">
							<a href="#" class="btn centered">MEER INFO</a>
						</div><!-- /.price -->
						
					</div><!-- /.column-2 -->
				</div><!-- /.row -->
			</article><!-- /.travelagency -->

			<article class="travelagency">
				<div class="row">
					<div class="column-3">
						<a href="#">
							<figure class="fleximage" style="background-image: url('https://drscdn.500px.org/photo/91147491/m%3D2048/2d49248bdf703e1c3fbd8d2a4417ae25');">
								<div class="price">vanaf &euro;300</div>
							</figure>
						</a>
					</div><!-- /.column-3 -->
					<div class="column-7">
						<h3>Mexico, 20 dagen</h3>
						<h4>20 daagse <a href="#" class="bluelink">familiereis</a> inclusief vliegticket</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						
						<!-- jQuery dropdown countries button -->
						<div class="btn countries">
							<span class="content">azie - thailand</span>
							<ul class="country-list">
								<li><a href="test.php" class="btn">Een land</a></li>
								<li><a href="test.php" class="btn">Nog een land</a></li>
								<li><a href="test.php" class="btn">En nog eentje</a></li>
							</ul>
							<span class="more">+3</span>
						</div><!-- /.button -->		
						<a class="btn like" href="#">like</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="agency-logo">
							<a href="#">
								<img src="http://www.afrika.nl/foto/adverteerder-groot/20/" alt="">
							</a>
						</div>
						<div class="call-to-action">
							<a href="#" class="btn centered">MEER INFO</a>
						</div><!-- /.price -->
						
					</div><!-- /.column-2 -->
				</div><!-- /.row -->
			</article><!-- /.travelagency -->

			<div class="pagination">
				<a href="#" class="btn">vorige</a>
				<a href="#" class="btn">1</a>
				<a href="#" class="btn">2</a>
				<a href="#" class="btn">3</a>
				<a href="#" class="btn">volgende</a>
			</div><!-- /.pagination -->
		</div><!-- /. column-9 -->

	</div><!-- /.container -->
</div><!-- /.row -->

<?php require('footer.php'); ?>