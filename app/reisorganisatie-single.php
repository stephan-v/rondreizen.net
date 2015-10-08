<!-- setting the hero background dynamically by adding a class to it -->
<?php $imageclass='agencieshero'; ?>

<?php require('header.php'); ?>

<div class="row toprow-metadata">
	<div class="container">
		<div class="column-3">
			<aside class="sidebar sidebar-top">
				<img src="http://www.boekenweek.nl/beeld/2015/schrijfwedstrijd/djoser_logo.gif" alt="">
				<h2>Djoser is een aanbieder van de volgende reissoorten:</h2>
				<ul class="categories-list">
					<li><a href ="#">Groepsrondreizen, </a></li>
					<li><a href ="#">Autoreizen, </a></li>
					<li><a href ="#">Fly-drive</a></li>
				</ul><!-- categories-list -->
				<a href="#" class="btn btn-fullwidth">WEBSITE<i class="fa fa-external-link fa-lg"></i></a>
			</aside>
		</div><!-- /.column-3 -->

		<div class="column-9 tabs">
			<ul>
				<li><a href="#tabs-1">overzicht</a></li>
				<li><a href="#tabs-2">algemeen</a></li>
				<li><a href="#tabs-3">prijzen</a></li>
			</ul>
			<div id="tabs-1" class="content">
				<article class="height-188">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic odio, dolores, nesciunt non quis obcaecati. Minus odit temporibus porro ducimus sint. Culpa dolorem quos ex cum, saepe optio placeat. Odio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis impedit cupiditate omnis nesciunt repellat voluptate dicta sit praesentium quis laudantium nam explicabo magni, magnam sint quos rerum necessitatibus voluptatibus porro.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ea consequuntur similique, mollitia quo excepturi enim itaque, ut totam aliquam, ratione, ipsam obcaecati facilis! Obcaecati libero cum magni tempora distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio modi excepturi sit reprehenderit temporibus culpa omnis, a ex assumenda, libero cum, voluptates labore numquam fuga officia accusamus in dolore?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ea consequuntur similique, mollitia quo excepturi enim itaque, ut totam aliquam, ratione, ipsam obcaecati facilis! Obcaecati libero cum magni tempora distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio modi excepturi sit reprehenderit temporibus culpa omnis, a ex assumenda, libero cum, voluptates labore numquam fuga officia accusamus in dolore?</p>
				</article>
			</div><!-- /#tabs-1 -->

			<div id="tabs-2" class="content">
				<article>
					<p>Consectetur adipisicing elit. Hic odio, dolores, nesciunt non quis obcaecati. Minus odit temporibus porro ducimus sint. Culpa dolorem quos ex cum, saepe optio placeat. Odio!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ea consequuntur similique, mollitia.</p>
				</article>
			</div><!-- /#tabs-2 -->

			<div id="tabs-3" class="content">
				<article>
					<p>Minus odit temporibus porro ducimus sint. Culpa dolorem quos ex cum, saepe optio placeat. Odio!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ipsum debitis distinctio nisi dolorum recusandae reprehenderit in, repellat itaque culpa, similique voluptates provident dolorem architecto eveniet sequi obcaecati asperiores iste.</p>
				</article>
			</div><!-- /#tabs-3 -->
		</div><!-- /.column-9 -->

	</div><!-- /.container -->
</div><!--/.row -->

<div class="row agencies">
	<div class="container">
		<div class="column-3">
			<div class="header row">
				<h2>BESTEMMINGEN VAN <span class="bold">DJOSER</span></h2>
			</div>
			<div class="destinations-from-agency">
				<select name="archief">
					<option selected="" disabled="">Continent</option>
					<option value="afrika">Afrika</option>
					<option value="antartica">Antartica</option>
					<option value="azie">Azie</option>
				</select>
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
		</div><!-- /. column-9 -->

	</div><!-- /.container -->
</div><!-- /.row .blog -->

<div class="row agencies">
	<div class="container">
		<div class="column-3">
			<div class="row header">
				<h2>GEMIDDELD <span class="bold">CIJFER</span></h2>
			</div>
			<aside class="sidebar submit-review">
				<div class="progress" value="80"></div>
				<h4>29 beoordelingen</h4>
				<ul>
					<li>ACCOMODATIE<span class="grade">8.7</span></li>
					<li>VERVOER<span class="grade">8.9</span></li>
					<li>REISLEIDING<span class="grade">7.2</span></li>
					<li>PRIJS/KWALITEIT<span class="grade">4.0</span></li>
					<li>ALGEMEEN<span class="grade">6.5</span></li>
				</ul>
				<a href="#" class="btn btn-fullwidth">PLAATS BEOORDELING</a>
			</aside><!-- /aside -->
		</div>
		<div class="column-9">
			<div class="row header">
				<h2>REIZIGER <span class="bold">RECENSIES</span></h2>
			</div>
			<article class="travelagency">
				<div class="row">
					<figure class="column-3">
						<img src="http://vwocontent.s3.amazonaws.com/images/case-studies/djoser-logo.gif" alt="">
					</figure><!-- /.column-3 -->
					
					<div class="column-7">
						<h3>Reis thailand - Hans Otten</h3>
						<h4>Reisdatum: 11 augustus 2015</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						<a class="btn" href="#">azie - thailand</a>
						<a class="btn" href="#">scoreverdeling</a>
						<a class="btn" href="#">20 februari 2012</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="progress" value="25"></div>
					</div><!-- /.column-2 -->
				</div><!-- /.row -->
			</article><!-- /.travelagency -->

			<article class="travelagency">
				<div class="row">
					<figure class="column-3">
						<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" alt="">
					</figure><!-- /.column-3 -->
					
					<div class="column-7">
						<h3>Reis thailand - Hans Otten</h3>
						<h4>Reisdatum: 11 augustus 2015</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						<a class="btn" href="#">azie - thailand</a>
						<a class="btn" href="#">scoreverdeling</a>
						<a class="btn" href="#">20 februari 2012</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="progress" value="45"></div>
					</div><!-- /.column-2 -->
				</div><!-- /.row -->
			</article><!-- /.travelagency -->

			<article class="travelagency">
				<div class="row">
					<figure class="column-3">
						<img src="http://www.arke.nl/Design/v1.22/images/interface/arke-logo.png" alt="">
					</figure><!-- /.column-3 -->
					
					<div class="column-7">
						<h3>Reis thailand - Hans Otten</h3>
						<h4>Reisdatum: 11 augustus 2015</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque totam recusandae nostrum, quaerat omnis voluptatibus aut eius quo nihil ea at soluta iure asperiores, veniam quae similique error aperiam.</p>
						<a class="btn" href="#">azie - thailand</a>
						<a class="btn" href="#">scoreverdeling</a>
						<a class="btn" href="#">20 februari 2012</a>
					</div><!-- /.column-7 -->

					<div class="column-2">
						<div class="progress" value="100"></div>
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
			</div><!-- /.columm-9 -->
	</div><!-- /.container -->
</div><!-- /.row -->

<?php require('footer.php'); ?>