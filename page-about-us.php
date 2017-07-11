<?php get_header(); ?>

<div id="fullpage">
<div class="section" id="section0">
  <div class="about">
    <img src="<?php the_field('about_hero_image'); ?>" class="img-responsive wow zoomIn" />

    <div class="container">
        <div class="about-us-content">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="wow slideInLeft">COMPANY OVERVIEW</h1>
            <?php the_content(); ?>
          </div>
            <?php endwhile; ?>
            <?php else : ?>
          </div>
          <div class="alert alert-info">
            <strong>No content in this loop</strong>
          </div>
          <?php endif; ?>
      </div><!--row -->
    </div><!-- container -->
  </div><!-- about -->
</div><!-- section0 -->
<div class="section" id="section1">
  <div class="team" id="team">
    <h1 class="wow slideInLeft">MEET THE TEAM</h1>
    <div class="container">
      <div class="the-team">
        <div class="row">
          <?php
              if( have_rows('meet_the_team') ): $m=0;
       	    while ( have_rows('meet_the_team') ) : the_row();?>
             <?php if($m%2==0){ echo '<div class="clearfix"></div>'; } ?>
            <div class="col-xs-6 employeeInfo">
              <?php 
                $emp_name = get_sub_field('employee_name');
                $emp_id = str_replace(' ', '', $emp_name);
              ?>
              <img class="wow flipInX" src="<?php the_sub_field('employee_image'); ?>" />
              <h2 class="wow fadeIn" data-wow-delay="1s"><a href="#" data-toggle="modal" data-target="#<?php echo $emp_id; ?>"><?php echo $emp_name; ?></a></h2>
              <h3><?php the_sub_field('employee_title'); ?></h3>
              <div class="modal fade" id="<?php echo $emp_id; ?>" tab-index="-1" role="dialog" aira-labelledby="<?php echo $emp_id . '-title'; ?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="<?php echo $emp_id . '-title'; ?>"><?php echo $emp_name; ?><br /><small><?php the_sub_field('employee_title'); ?></small></h4>
                    </div>
                    <div class="modal-body">
                      <blockquote>
                        <footer><em><?php the_sub_field('employee_quote'); ?></em></footer>
                      </blockquote>
                      <?php the_sub_field('employee_bio'); ?>
                    </div>
                    <div class="modal-footer">
                      <a href="<?php echo home_url('contact-us'); ?>" class="btn-main">Contact</a>
                      <a href="#" class="btn-main" data-dismiss="modal">Close</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $m++; endwhile;
            else :
            endif;
          ?>
        </div>
      </div>
    </div><!-- container -->
  </div><!-- team -->
</div><!-- section1 -->
<div class="section" id="section2">
  
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
</div><!-- section2 -->
</div><!--full-page -->
  <?php get_footer(); ?>
