<?php get_header(); ?>
<main id="cap-main">
  <section id="capabilities" class="section fp-auto-height-responsive">
    <div class="caps-icons keep-on-top" style="margin-top:40px;">
      <div class="container">
        <h1>Capabilities</h1>
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <a href="#businessAnalytics" class="cap-link scroller">
              <span class="business-icon"></span>
              <h2>Business Analytics</h2>
              <p><?php the_field('business_analytics_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#logistics" class="cap-link scroller">
              <span class="logistics-icon"></span>
              <h2>Logistics</h2>
              <p><?php the_field('logistics_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#engineering" class="cap-link scroller">
              <span class="engineering-icon"></span>
              <h2>Engineering</h2>
              <p><?php the_field('engineering_icon_summary'); ?></p>
            </a>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-sm-4 col-md-2">
            <a href="#cyber" class="cap-link scroller">
              <span class="cyber-icon"></span>
              <h2>Cyber</h2>
              <p><?php the_field('cyber_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#education" class="cap-link scroller">
              <span class="education-icon"></span>
              <h2>Education</h2>
              <p><?php the_field('education_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#researchDevelopment" class="cap-link scroller">
              <span class="research-icon"></span>
              <h2>Research &amp; Development</h2>
              <p><?php the_field('research_development_icon_summary'); ?></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="capabilities-img" class="bottom-bg"></div>        
  </section>
  <section id="businessAnalytics" class="section fp-auto-height-responsive">
    <div class="container">
      <h1>Business Analytics</h1>
      <article class="single-col">
        <?php the_field('business_analytics_section_content'); ?>
      </article>
    </div>
    <div id="business-analytics-img" class="bottom-bg"></div>
  </section>
  <section id="logistics" class="section fp-auto-height-responsive">
    <div class="container">
      <h1>Logistics</h1>
      <article class="single-col">
        <?php the_field('logistics_section_content'); ?>
      </article>
    </div>
    <div id="logistics-img" class="bottom-bg"></div>
  </section>
  <section id="engineering" class="section fp-auto-height-responsive">
    <div class="container">
      <h1>Engineering</h1>
      <article class="single-col">
        <?php the_field('engineering_section_content'); ?>
      </article>
    </div>
    <div id="engineering-img" class="bottom-bg"></div>
  </section>
  <section id="cyber" class="section fp-auto-height-responsive">
    <div class="container">
      <h1>Cyber</h1>
      <article class="single-col">
        <?php the_field('cyber_section_content'); ?>
      </article>
    </div>
    <div id="cyber-img" class="bottom-bg"></div>
  </section>
  <section id="education" class="section fp-auto-height-responsive">
    <div class="container">
      <h1>Education</h1>
      <article class="single-col">
        <?php the_field('education_section_content'); ?>
      </article>
    </div>
    <div id="education-img" class="bottom-bg"></div>
  </section>
  <section id="researchDevelopment" class="section fp-auto-height-responsive">
    <div class="container">
      <h1>Research And Development</h1>
      <article class="single-col">
        <?php the_field('research_development_section_content'); ?>
      </article>
    </div>
    <div id="research-img" class="bottom-bg"></div>
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
<?php get_footer(); ?>