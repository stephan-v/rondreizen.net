<!-- setting the hero background dynamically by adding a class to it -->
<?php $imageclass='contacthero'; ?>

<?php require('header.php'); ?>

<div class="row contact">
	<div class="container">

		<div class="column-9 main">
			<h3>Neem contact met ons op</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ratione ex voluptatum, consectetur, cum voluptatibus in, expedita nesciunt, velit praesentium minus! Aliquid hic vero vel, earum saepe consequatur eligendi quidem.</p>
			<form action="#">
				<div class="column-6">
					<label for="name">Naam:</label>
					<input type="text" id="name" name="name" placeholder="Uw naam">
				</div><!-- /.column-6 -->
				<div class="column-6">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" placeholder="Uw emailadres">
				</div><!-- /.column-6 -->
				<div class="column-12">
					<label for="message">Bericht</label>
					<textarea name="message" id="message" placeholder="Uw bericht"></textarea>
				</div><!-- /.column-12 -->
				<input type="submit" value="verzenden" class="btn">
			</form>
		</div><!-- /. column-9 -->

		<div class="column-3">
			<aside class="sidebar">
				<h3>Contact</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque veritatis quam neque eligendi facere placeat odio consequuntur accusamus ullam iure eos enim similique voluptatum sequi iusto commodi praesentium, eveniet nam.</p>
				<div class="logo"></div>
			</aside><!-- /aside -->
		</div><!-- /.column-3 -->


	</div><!-- /.container -->
</div><!-- /.row .blog -->

<?php require('footer.php'); ?>