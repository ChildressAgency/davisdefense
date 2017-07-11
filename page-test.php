<?php get_header(); ?>


<section id="location">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 locationContent">
				<h2>OUR LOCATION</h2>
				<p>
					Since 1996 Bike Works has been a cornerstone in providing sales and service for cyclists in the Fredericksburg area.
					Located in the heart of downtown at 104 William Street, our location offers quick access to the numerous paved trails,
					off-road trails, coffee shops, local breweries and great food! We are conveniently located near
					<a href="http://www.Fredericksburg.gov/documentcenter/view/6940">two public parking lots</a>
					and also provide a loading zone to utilize for those drop-offs and pick-ups.
				</p>
				<span class="mapLink">
					<a href="https://www.google.com/maps/place/104+William+St,+Fredericksburg,+VA+22401/@38.3038555,-77.4611515,17z/data=!3m1!4b1!4m5!3m4!1s0x89b6c20560e591d1:0xd29abf1e9b981e60!8m2!3d38.3038555!4d-77.4589628">104 William Street Fredericksburg Virginia 22401</a>
				</span>
				<p>
					Monday-Friday 10a-7p<br />
					Saturday 10a-5p<br />
					Sunday Closed
				</p>
				<span class="telLink">
					<a href="tel:5403738900">Tel:540-373-8900</a><br />
					<a href="tel:5403730836">Tel:540-373-0836</a>
				</span>
				<a href="<?php echo home_url(); ?>/about/" class="btn-main">ABOUT US</a>
			</div>
			<div class="col-xs-12 col-sm-6 locationMap">
				<div id="map">
					<?php $location = get_field('location', 'option');

								if(!empty($location)): ?>

									<div class="acf-map google-map">

										<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>

									</div>

							<?php endif; ?>

						</div><!-- Map -->
			</div><!-- locationMap -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- location -->



<?php get_footer(); ?>
