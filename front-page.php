<?php get_header(); ?>
<main id="hp-main">
  <section class="section fp-auto-height-responsive" id="section0">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block animated slideInDown" alt="Davis Defense Logo" style="margin-top:40px;" />
    <div class="company-awards-bg" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/home-header-image1.png);">
      <?php if(have_rows('company_recognitions')): ?>
        <div class="company-awards">
          <div class="container">
            <ul class="list-unstyled list-inline animated bounce">
              <?php while(have_rows('company_recognitions')): the_row(); ?>
                <li><img src="<?php the_sub_field('recognition_image'); ?>" class="img-responsive" alt="<?php the_sub_field('recognition_title'); ?>" /></li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="quick-links">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <a href="<?php the_field('services_icon_link'); ?>" class="media">
              <div class="media-left media-middle">
                <span class="services-icon"></span>
              </div>
              <div class="media-body">
                <h3 class="media-heading"><?php the_field('services_icon_title'); ?></h3>
                <p><?php the_field('services_icon_text'); ?></p>
              </div>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="<?php the_field('contracts_icon_link'); ?>" class="media">
              <div class="media-left media-middle">
                <span class="contracts-icon"></span>
              </div>
              <div class="media-body">
                <h3 class="media-heading"><?php the_field('contracts_icon_title'); ?></h3>
                <p><?php the_field('contracts_icon_text'); ?></p>
              </div>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="<?php the_field('training_icon_link'); ?>" class="media">
              <div class="media-left media-middle">
                <span class="training-icon"></span>
              </div>
              <div class="media-body">
                <h3 class="media-heading"><?php the_field('training_icon_title'); ?></h3>
                <p><?php the_field('training_icon_text'); ?></p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section fp-auto-height-responsive" id="section1">
    <div class="caps-icons keep-on-top">
      <div class="container">
        <h1>Capabilities</h1>
        <?php 
          $caps_page = get_page_by_path('capabilities');
          $caps_page_id = $caps_page->ID; 
        ?>
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <a href="<?php echo home_url('capabilities/#business-analytics'); ?>" class="cap-link scroller">
              <span class="business-icon"></span>
              <h2>Business Analytics</h2>
              <p><?php the_field('business_analytics_icon_summary', $caps_page_id); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="<?php echo home_url('capabilities/#logistics'); ?>" class="cap-link scroller">
              <span class="logistics-icon"></span>
              <h2>Logistics</h2>
              <p><?php the_field('logistics_icon_summary', $caps_page_id); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="<?php echo home_url('capabilities/#engineering'); ?>" class="cap-link scroller">
              <span class="engineering-icon"></span>
              <h2>Engineering</h2>
              <p><?php the_field('engineering_icon_summary', $caps_page_id); ?></p>
            </a>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-sm-4 col-md-2">
            <a href="<?php echo home_url('capabilities/#cyber'); ?>" class="cap-link scroller">
              <span class="cyber-icon"></span>
              <h2>Cyber</h2>
              <p><?php the_field('cyber_icon_summary', $caps_page_id); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="<?php echo home_url('capabilities/#education'); ?>" class="cap-link scroller">
              <span class="education-icon"></span>
              <h2>Education</h2>
              <p><?php the_field('education_icon_summary', $caps_page_id); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="<?php echo home_url('capabilities/#research-development'); ?>" class="cap-link scroller">
              <span class="research-icon"></span>
              <h2>Research &amp; Development</h2>
              <p><?php the_field('research_development_icon_summary', $caps_page_id); ?></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="section1-img" class="bottom-bg"></div>
  </section>
  <section class="section fp-auto-height-responsive" id="section2">
    <div class="client-logos keep-on-top">
      <h1>Clients</h1>
      <div class="container">
        <ul class="list-unstyled list-inline">
          <?php if(have_rows('clients')): while(have_rows('clients')): the_row(); ?>
            <li><img src="<?php the_sub_field('client_image'); ?>" class="img-responsive center-block" alt="<?php the_sub_field('client_name'); ?>" /></li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
    <div id="section2-img" class="bottom-bg"></div>
  </section>
  <section class="section fp-auto-height-responsive" id="section3">
    <div class="container">
      <h1>Testimonials</h1>
      <?php if(have_rows('testimonials')): ?>
        <div id="testimonialSlider" class="carousel slide keep-on-top" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <?php $item = 0; while(have_rows('testimonials')): the_row(); ?>
              <div class="item<?php if($item==0){ echo ' active'; } ?>">
                <div class="caption">
                  <p class="testimonial"><?php the_sub_field('testimonial'); ?></p>
                  <p class="testimonial-author">- <?php the_sub_field('testimonial_author'); ?></p>
                </div>
              </div>
            <?php $item++; endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="teaming-vehicles">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h3>Teaming &amp; Business Opps</h3>
            <a href="<?php the_field('teaming_business_opps_link'); ?>" class="btn-main">Learn More</a>
          </div>
          <div class="col-sm-6">
            <h3>Contract Vehicles</h3>
            <a href="<?php the_field('contract_vehicles_link'); ?>" class="btn-main">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div id="section3-img" class="bottom-bg"></div>
  </section>
    <section class="section fp-auto-height-responsive" id="section4">
      <div class="container">
        <h1>Stay Updated</h1>
        <div class="blog-post-summary">
          <div class="fb-page" data-href="https://www.facebook.com/davisdefensegroup" data-tabs="timeline" data-width="425" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/davisdefensegroup" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/davisdefensegroup">Davis Defense Group</a></blockquote></div>
        </div>
      </div>
    </section>
  <section class="section fp-auto-height-responsive" id="section5">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h1>Contact Us</h1>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-6">
              <div class="contact-info">
                <h3>Address</h3>
                <p><?php the_field('street_address1', 'option'); ?><br /><?php echo get_field('street_address2', 'option') ? get_field('street_address2', 'option') . ', ' : ''; ?><?php the_field('city_state_zip', 'option'); ?></p>
                <h3>Phone</h3>
                <p><?php the_field('phone', 'option'); ?></p>
                <h3>Fax</h3>
                <p><?php the_field('fax', 'option'); ?></p>
              </div>
            </div>
            <div class="col-sm-6">
              <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="section5-img" class="bottom-bg"></div>
  </section>
  <section class="section fp-auto-height" id="section6">
    <div class="footer">
      <div class="login-section">
        <div class="container">
          <?php if(is_user_logged_in()): ?>
            <div class="btn-inline">
              <a href="<?php echo home_url('employee-links'); ?>" class="btn-main">Employee Page</a>
              <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn-main">Logout</a>
            </div>
          <?php else: ?>
            <?php get_template_part('custom-login-form'); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="footer-nav">
        <div class="container">
          <a href="<?php echo home_url(); ?>" class="footer-logo pull-left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/davis-logo-small.png" alt="Davis Defense Logo Small" />
          </a>
          <div class="footer-social pull-right">
            <?php 
              $facebook = get_field('facebook', 'option');
              $twitter = get_field('twitter', 'option');
              $linkedin = get_field('linkedin', 'option');
              if($facebook): ?>
                <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
            <?php endif; 
            if($twitter): ?>
              <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php endif;
            if ($linkedin): ?>
              <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            <?php endif; ?>
          </div>
        </div>
        <ul class="list-unstyled list-inline">
          <li><a href="<?php echo home_url('capabilities'); ?>">Capabilities</a></li>
          <li><a href="<?php echo home_url('about-us'); ?>">About Us</a></li>
          <li><a href="<?php echo home_url('contracts'); ?>">Contracts</a></li>
          <li><a href="<?php echo home_url('contact-us'); ?>">Contact Us</a></li>
        </ul>
        <div class="clearfix"></div>
        <p class="copyright">&copy;<?php echo date('Y'); ?> Davis Defense Group</p>
        <p class="copyright">website created by <a href="https://childressagency.com">The Childress Agency</a></p>
      </div>
    </div>
  </section>
</main>
<script>
  jQuery(document).ready(function($){
    if(typeof $.fn.fullpage == 'function'){
      $('#hp-main').fullpage({
        responsiveWidth:768,
        responsiveHeight:600,
        slideSelector:'.fullpage-slide',
        verticalCentered: false,
        'onLeave': function(index, nextIndex, direction){
          $('.cap-link>span').addClass('animated bounce');
          $('.section1-img').addClass('animated slideInRight');
          if(index == 2){
            $('.client-logos ul').addClass('animated bounce');
            $('.section2-img').addClass('animated slideInUp');
          }
          if(index == 3){
            $('.teaming-vehicles').addClass('animated slideInUp');
            $('.teaming-vehicles .row').addClass('animated bounce');
          }
          if(index == 4){
            $('.blog-post-summary').addClass('animated slideInLeft');
          }
        },
      });
    }
  });
</script>
<?php get_footer(); ?>