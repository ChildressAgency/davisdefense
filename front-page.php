<?php get_header(); ?>




<div id="fullpage">
	<div class="section " id="section0">
		<div class="header">

				<div class="headerLogo wow slideInLeft">
		      <a href="<?php echo home_url(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/images/logo-1.png" alt="Header Logo" /></a>
		    </div>
				<div class=" headerImage">
					<span class="whiteArea  ">
						<div class="container">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/inc-500-1.png" alt="Services Logo" />
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/fast-50-1.png" alt="Services Logo" />
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/star-award-1.png" alt="Services Logo" />
						</div>
					</span>
				</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 services">
								<a href="<?php echo home_url(); ?>/apply-now/">
									<div class="col-xs-3">
										<img src="<?php echo get_template_directory_uri(); ?>/images/services.png" alt="Services Logo" />
									</div>
									<div class="col-xs-9">
										<h2>CAPABILITIES</h2>
											<?php the_field('services_content') ?>
										</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-4 contracts">
								<a href="<?php echo home_url(); ?>/apply-now/">
									<div class="col-xs-3">
										<img src="<?php echo get_template_directory_uri(); ?>/images/contracts.png" alt="Contracts Logo" />
									</div>
									<div class="col-xs-9">
										<h2>CONTRACTS</h2>
											<?php the_field('contracts_content') ?>
										</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-4 training">
								<a href="<?php echo home_url(); ?>/apply-now/">
									<div class="col-xs-3">
										<img src="<?php echo get_template_directory_uri(); ?>/images/jobs-icon.png" alt="Training Logo" />
									</div>
									<div class="col-xs-9">
										<h2>JOBS</h2>
											<?php the_field('training_content') ?>
									</div>
								</a>
							</div>
						</div><!-- row -->
			</div><!-- container -->
		</div><!-- header -->
	</div><!-- section -->
	<div class="section second " id="section1">
		<div class="capabilities">
			<h1>CAPABILITIES</h1>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/capabilities/#businessAnalytics">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/business-icon.png" alt="Business Analytics" />
							<h2>BUSINESS ANALYTICS</h2>
							<?php the_field('business_analytics', 'option'); ?>
						</a>
					</div>
					<div class="col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/capabilities/#logistics">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/logistics-icon.png" alt="Logistics" />
							<h2>LOGISTICS</h2>
							<?php the_field('logistics', 'option'); ?>
						</a>
					</div>
					<div class="col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/capabilities/#engineering">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/engineering-icon.png" alt="Engineering" />
							<h2>ENGINEERING</h2>
							<?php the_field('engineering', 'option'); ?>
						</a>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class=" col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/capabilities/#cyber">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/cyber-icon.png" alt="Cyber" />
							<h2>CYBER</h2>
							<?php the_field('cyber', 'option'); ?>
						</a>
					</div>
					<div class=" col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/capabilities/#education">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/education-icon.png" alt="Education" />
							<h2>EDUCATION</h2>
							<?php the_field('education', 'option'); ?>
						</a>
					</div>
					<div class=" col-sm-4 col-md-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/capabilities/#research">
							<img class="wow bounce" src="<?php echo get_template_directory_uri(); ?>/images/rd-icon.png" alt="Research &amp; Development" />
							<h2>RESEARCH &#38; DEVELOPMENT</h2>
							<?php the_field('research_&_development', 'option'); ?>
						</a>
					</div>
				</div><!-- row -->
			</div><!-- container -->

		</div><!-- capabilities -->
		<div class="frogMan wow slideInUp">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/frogman.png" class="img-responsive center-block" alt="Frogman" />
		</div>
	</div>
	<div class="section third " id="section2">
		<div class="our-clients">
			<h1>CLIENTS</h1>
			<div class="container">
				<ul class="client-logos">
					<li>
						<img class="wow bounce img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/marines.png" alt="Marine Corps" />
					</li>
					<!--<div class="col-xs-6 col-sm-2 clientArea">
						<img class="wow bounce " src="<?php echo get_template_directory_uri(); ?>/images/national-guard.png" alt="National Guard" />
					</div>-->
					<li>
						<img class="wow bounce img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/army.png" alt="Army" />
					</li>
					<li>
						<img class="wow bounce img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/homeland-security.png" alt="Homeland Security" />
					</li>
					<li>
						<img class="wow bounce img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/navy.png" alt="Navy" />
					</li>
					<li>
						<img class="wow bounce img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/air-force.png" alt="Air Force" />
					</li>
				</ul><!-- row -->
			</div><!-- container -->
			<div class="climbing-wall"></div>
		</div><!-- our-clients -->
	</div>
	<div class="section forth " id="section3">
		<div class="solid-foundation ">
			<div class="mountain wow slideInLeft">
				<div class="container">
						<h1>TESTIMONIALS</h1>
						<div class="solidFoundationContentArea">
								<section id="testimonialSlider" class="carousel slide" data-ride="">
						      <div class="carousel-inner " role="listbox ">
						        <?php
						        // check if the repeater field has rows of data
						        if( have_rows('testimonials') ):
						         	// loop through the rows of data
						           $i=1; while ( have_rows('testimonials') ) : the_row(); ?>
						            <div class="item <?php if ($i == 1) echo 'active'; ?> ">
						              <div id="noPhoto"></div>
						              <div class="caption-wrapper">
						                <div class="caption">
						                  <?php the_sub_field('testimonial_content');?>
															<span><p><?php the_sub_field('testimonial_author'); ?></p></span>
						                </div><!-- caption -->
						              </div><!-- caption-wrapper -->
						            </div><!-- item -->
						            <?php $i++;  endwhile;
						            else :
						            // no rows found
						          endif;
						          ?>
						      </div><!-- carousel-inner -->
						          <!-- Controls -->
						        <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
						          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						          <span class="sr-only">Previous</span>
						        </a>
						        <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
						          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						          <span class="sr-only">Next</span>
						        </a>
						    </section><!-- testimonialSlider -->
								<!-- original Buttons -->
							<div class="info-officers">
								<a href="<?php echo home_url(); ?>/about/" class="btn-main left-side">INFORMATION</a>
								<a href="<?php echo home_url(); ?>/about/#team" class="btn-main right-side">OFFICERS</a>
							</div>
						</div>
				</div><!-- container -->
				<div class="clearfix"></div>
				<div class="whiteBand wow slideInUp">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 whiteBandContent  ">
								<h2>
									TEAMING &amp;<br />
									BUSINESS OPPS
								</h2>
								<a href="<?php echo home_url(); ?>/contact-us/" class="btn-main left-side ">LEARN MORE</a>
							</div>
							<div class="col-xs-6 whiteBandContent ">
								<h2>
									CONTRACT<br />
									VEHICLES
								</h2>
								<a href="<?php echo home_url(); ?>/contracts/" class="btn-main right-side">LEARN MORE</a>
							</div>
						</div><!-- row -->
					</div><!-- container -->
				</div>
			</div><!-- mountain -->
		</div><!-- solid-foundation -->
	</div>
	<div class="section fifth" id="section4">
		<div class="stay-updated">
			<div class="background">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 blogArea wow slideInLeft ">
							<h1>STAY UPDATED</h1>
							<?php

          $latest_post = new WP_Query(array('posts_per_page' => 2, 'post_status' => 'publish'));
          if($latest_post->have_posts()): while($latest_post->have_posts()): $latest_post->the_post(); ?>
            <?php $latest_post_id = get_the_ID(); //skip this id in the blog list below ?>
							<div class="col-xs-2 redBox">
								<h3>
									<?php echo get_the_date('F '); ?><br/>
									<?php echo get_the_date(' j'); ?>
								</h3>
							</div>
							<div class="col-xs-9 col-xs-offset-1 blueBox">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
								<span><p><?php the_field('post_author'); ?></p></span>
	              <?php my_excerpt('short'); ?>
							</div>
        			<?php endwhile; endif; wp_reset_postdata(); ?>
						</div>
						<div class="clearfix"></div>
						<div class="col-xs-9 col-xs-offset-1 col-sm-8 col-sm-offset-2 blogButtons">
							<a href="<?php echo home_url(); ?>/our-blog/" class="btn-main left-side">OUR BLOG</a>
							<a href="#" class="btn-main right-side">SUBSCRIBE</a>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- background -->
			<div class="whiteBand-2">
				<h2>FOLLOW US ON SOCIAL MEDIA</h2>
				<div class="row">
					<div class="col-xs-4">
						<a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="twitter wow bounce"></a>
					</div>
					<div class="col-xs-4">
						<a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" class="linkedIn wow bounce"></a>
					</div>
					<div class="col-xs-4">
						<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="facebook wow bounce"></a>
					</div>
				</div><!-- row -->
			</div><!-- whiteBand-2 -->
		</div><!-- stay-updated -->
	</div>


	<div class="section sixth" id="section5">
		
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
									SUITE #401 STAFFORD, VA 22554
								</p>
							</div>
							<div class="col-xs-6 col-sm-12">
								<h3>PHONE</h3>
								<p>540 548 5980</p>
								<h3>FAX</h3>
								<p>540 542 3079</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 contactForm wow slideInUp ">
							<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
						</div>
					</div><!--row -->
				</div><!-- container -->
			</div><!-- contact-us -->
		<div class="contactBackground"></div><!-- contactBackground -->
	</div>
</div><!-- fullpage -->
		<?php get_footer(); ?>
