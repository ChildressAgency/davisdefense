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
                <?php if(get_field('facebook', 'option')): ?>
                  <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
                <?php endif; 
                if(get_field('twitter', 'option')): ?>
                  <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <?php endif;
                if (get_field('linkedin', 'option')): ?>
                  <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
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
    <?php wp_footer(); ?>
  </body>
</html>