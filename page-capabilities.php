<?php get_header(); ?>

<div id="fullpage">
	<div class="section " id="section0">
		<div class="capabilities">
			<h1>CAPABILITIES</h1>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="#businessAnalytics" class="scroll-down">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/business-icon.png" alt="Business Analytics" />
							<h2>BUSINESS ANALYTICS</h2>
							<?php the_field('business_analytics', 'option'); ?>
						</a>
					</div>
					<div class="col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="#logistics" class="scroll-down">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/logistics-icon.png" alt="Logistics" />
							<h2>LOGISTICS</h2>
							<?php the_field('logistics', 'option'); ?>
						</a>
					</div>
					<div class="col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="#engineering" class="scroll-down">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/engineering-icon.png" alt="Engineering" />
							<h2>ENGINEERING</h2>
							<?php the_field('engineering', 'option'); ?>
						</a>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class=" col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="#cyber" class="scroll-down">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/cyber-icon.png" alt="Cyber" />
							<h2>CYBER</h2>
							<?php the_field('cyber', 'option'); ?>
						</a>
					</div>
					<div class=" col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="#education" class="scroll-down">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/education-icon.png" alt="Education" />
							<h2>EDUCATION</h2>
							<?php the_field('education', 'option'); ?>
						</a>
					</div>
					<div class=" col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="#research" class="scroll-down">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/rd-icon.png" alt="Research &amp; Development" />
							<h2>RESEARCH &#38; DEVELOPMENT</h2>
							<?php the_field('research_&_development', 'option'); ?>
						</a>
					</div>
				</div><!-- row -->
			</div><!-- container -->

		</div><!-- capabilities -->
		<div class="frogMan wow slideInUp ">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/frogman.png" class="img-responsive center-block" alt="Frogman" />			
		</div>
	</div>
	<div class="section " id="businessAnalytics">
			<div class="container">
					<div class="businessAnalyticsContent">
						<h1>BUSINESS ANALYTICS</h1>
						<?php the_field('business_analytics_content'); ?>
						<?php the_field('business_analytics_list') ?>
					</div>
			</div><!-- container -->
		<div class="businessAnalytics"></div><!-- businessAnalytics -->
	</div><!-- section1 -->
	<div class="section" id="logistics">
		<div class="logistics" id="logistics">
			<div class="container">
				<div class="row">
					<div class="logisticsContainer">
						<h1>LOGISTICS</h1>
						<div class="col-xs-12 col-sm-6 logisticsContent">
							<h2>LOGISTICS AN LIFE CYCLE SUPPORT</h2>
							<?php the_field('logistics_and_life_cycle_support_content'); ?>
							<span><?php the_field('logistics_and_life_cycle_support_list'); ?></span>
						</div>
						<div class="col-xs-12 col-sm-6 logisticsContent">
							<h2>QUALITY ASSURANCE (QA) SUPPORT</h2>
							<?php the_field('quality_assurance_support_content'); ?>
							<span><?php the_field('quality_assurance_support_list'); ?></span>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
						<div class="col-xs-12 col-sm-6 logisticsContent">
							<h2>EQUIPMENT SUSTAINMENT &amp; TRAINING</h2>
							<?php the_field('equipment_sustainment_and_training_content'); ?>
							<span><?php the_field('equipment_sustainment_and_training_list'); ?></span>
						</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- logistics -->
	</div><!-- section2 -->
	<div class="section" id="engineering">
		<div class="engineering" id="engineering">
			
				<h1>ENGINEERING</h1>
				<div class="container">
						<div class="engineeringContent">
							<?php the_field('engineering_content'); ?>
							<span><?php the_field('engineering_list'); ?></span>
						</div>
				</div><!-- container -->
			<div class="engineeringBackground wow slideInUp ">
				<!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/engineering-background.jpg" class="img-responsive center-block" alt="Sniper" />-->
			</div><!-- engineeringBackground -->
		</div><!-- engineering -->
	</div><!-- section3 -->
	<div class="section" id="cyber">
		<div class="cyber">
			<h1>CYBER</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3 cyberContent">
						<h2>PROGRAM OFFICE SUPPORT</h2>
						<?php the_field('program_office_support_content'); ?>
						<span><?php the_field('program_office_support_list'); ?></span>
						<h2>POST DEPLOYMENT SYSTEMS SUPPORT</h2>
						<?php the_field('post_deployment_systems_support_content'); ?>
						<span><?php the_field('post_deployment_systems_support_list'); ?></span>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- cyber -->
	</div><!-- section4 -->
	<div class="section" id="education">
		<div class="education">
			<h1>EDUCATION</h1>
			<div class="container">
					<div class="whiteBackground">
						<?php the_field('education_content'); ?>
						<span><?php the_field('education_list'); ?></span>
					</div>
			</div><!-- container -->
		</div><!-- education -->
			<div class="education-background">
				<!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/education-background.jpg" class="img-responsive center-block" alt="soldiers" />-->
			</div>
	</div><!-- section5 -->
	<div class="section" id="research">
		<div class="research">
			<div class="container">
				<h1>RESEARCH AND DEVELOPMENT</h1>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3">
						<?php the_field('research_and_development_content'); ?>
						<span><?php the_field('research_and_development_list'); ?></span>
						<h2>IT ADMINISTRATION</h2>
						<?php the_field('it_administration_content'); ?>
						<span><?php the_field('it_administration_list'); ?></span>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- research -->
	</div><!-- section6 -->

	<div class="section" id="section7">
		
			<div class="contact-us">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4 contactTitle">
							<h1>CONTACT US</h1>
						</div>
						<div class="col-xs-12 col-sm-4 contactInfo">
							<div class="col-xs-6 col-sm-12">
								<h3>ADDRESS</h3>
								<p>
									475 AQUIA TOWNE CENTER DRIVE<BR />
									SUITE #401 STAFFORD, VA 22504
								</p>
							</div>
							<div class="col-xs-6 col-sm-12">
								<h3>PHONE</h3>
								<p>540. 548. 5980</p>
								<h3>FAX</h3>
								<p>540 542 3079</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 contactForm wow slideInUp">
							<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
						</div>
					</div><!--row -->
				</div><!-- container -->
			</div><!-- contact-us -->
		<div class="contactBackground"></div><!-- contactBackground -->
	</div><!-- section7 -->
</div><!--full-page -->
		<?php get_footer(); ?>
