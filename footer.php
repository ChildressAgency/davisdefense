<footer>
<?php if(!is_page('login')): ?>
  <div class="blueFooter">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2  footerForm">
          <h2>EMPLOYEE LOGIN</h2>
          <?php if ( is_user_logged_in() ) : ?>
          <h3>USER IS CURRENTLY LOGGED IN</h3>
          <?php else : ?>
          <div class="attention"><?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2')) ?></div>
          <?php endif; ?>


        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- blueFooter -->
  <div class="clearfix"></div>
  <div class="whiteFooter">
    <div class="container">
      <div class="row">
        <div class="col-xs-2 col-sm-3 footerLogo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="Footer Logo" /></a>
        </div>
        <div class="col-xs-8 col-sm-6 footerMenu">
            <?php wp_nav_menu(); ?>
        </div>

        <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-0 footerSocials">
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="twitter"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="facebook"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="linkedIn"></a>
        </div>
        <div class="clearfix"></div>
      </div><!-- row -->
      <div style="text-align:center; margin-top:15px;">
          <p class="copyright" style="line-height:1em; margin-top:0; text-align:center;">
            &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
          </p>
          <p class="childress" style="line-height:1em; margin-top:0; text-align:center;">
            Created by<a href="https://childressagency.com/" target="_blank">The Childress Agency</a>
          </p>
      </div>

    </div><!-- container -->
  </div><!-- whiteFooter -->
<?php endif; ?>
</footer>

</div> <!-- close main container -->
<?php wp_footer(); ?>

</body>
</html>
