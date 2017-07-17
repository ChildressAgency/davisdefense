<?php if(!is_front_page()): //front page footer is in front-page.php ?>
  <?php if(!is_single() && !is_page('contact-us') && !is_page('employee-links') && !is_page('employee-login')): ?>
  <section id="contact">
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
              <?php echo do_shortcode('[contact_form_shortcode]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact-img"></div>
  </section>  
  <?php endif; ?>    
  <footer class="footer">
    <?php if(!is_page('employee-login')): ?>
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
    <?php endif; ?>
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
  </footer>
<?php endif; ?>
    <?php wp_footer(); ?>
  </body>
</html>