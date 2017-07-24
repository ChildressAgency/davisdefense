<?php get_header(); ?>
<main id="about-main">
  <?php if(have_rows('about_page_layout')): while(have_rows('about_page_layout')): the_row(); ?>
    <section class="main-content<?php if(get_row_layout() == 'mountain_side_background'){ echo ' mountain'; } ?> section fp-auto-height-responsive" id="topSection">
      <div class="container">
        <?php if(get_row_layout() == 'hero_image'): ?>
          <?php $top_image = get_sub_field('top_image'); ?>
          <img src="<?php echo $top_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $top_image['alt']; ?>" style="margin-top:40px;" />
        <?php endif; ?>
        <h1>Company Overview</h1>
        <article class="single-col">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </article>
      </div>
    </section>
  <?php endwhile; endif; ?>
  <section class="section fp-auto-height-responsive" id="meetTheTeam">
    <div class="container">
      <h1>Meet The Team</h1>
      <div class="row team-members">
        <?php if(have_rows('team_members')): $i=0; while(have_rows('team_members')): the_row(); ?>
          <?php if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
          <div class="col-sm-6">
            <?php 
              $team_member_name = get_sub_field('team_member_name');
              $team_member_id = str_replace(' ', '', $team_member_name);
            ?>
            <a href="#" class="team-member" data-toggle="modal" data-target="#<?php echo $team_member_id; ?>">
              <img src="<?php the_sub_field('team_member_image'); ?>" class="img-responsive center-block" alt="<?php echo $team_member_name; ?>" />
              <h2><?php echo $team_member_name; ?><small><?php the_sub_field('team_member_title'); ?></small></h2>
            </a>
            <div class="modal fade" id="<?php echo $team_member_id; ?>" tab-index="-1" role="dialog" aria-labelledby="<?php echo $team_member_id; ?>-title">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="<?php echo $team_member_id; ?>-title"><?php echo $team_member_name; ?><small><?php the_sub_field('team_member_title'); ?></small></h4>
                  </div>
                  <div class="modal-body">
                    <blockquote>
                      <footer><em><?php the_sub_field('team_member_quote'); ?></em></footer>
                    </blockquote>
                    <?php the_sub_field('team_member_bio'); ?>
                  </div>
                  <div class="modal-footer">
                    <a href="<?php echo home_url('contact-us'); ?>" class="btn-main">Contact</a>
                    <a href="#" class="btn-main close" data-dismiss="modal">Close</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; endif; ?> 
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
      $('#about-main').fullpage({
        responsiveWidth:768,
        responsiveHeight:600,
        slideSelector:'.fullpage-slide',
        verticalCentered:false,
      });

      $('.modal').on('click', function(){
        //$.fn.fullpage.setAllowScrolling(false);
        //$.fn.fullpage.setKeyboardScrolling(false);
        $.fn.fullpage.destroy('all');
      });
      $('.close').on('click', function(){
        //$.fn.fullpage.setAllowScrolling(true);
        //$.fn.fullpage.setKeyboardScrolling(true);
        $.fn.fullpage.reBuild();
      });
    }
  });
</script>
<?php get_footer(); ?>