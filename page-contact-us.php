<?php get_header(); ?>
<main id="main">
  <section id="contactPage">
    <div class="container">
      <h1>Contact Us</h1>
      <div class="row contact-info-form">
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
    <div id="contact-img"></div>
  </section>
  <section id="locate">
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-5 col-sm-push-7 col-sm-height locate-info">
          <h2>Locate Us</h2>
          <p><?php the_field('locate_us_text'); ?></p>
        </div>
        <div class="col-sm-7 col-sm-pull-5 col-sm-height google-map">
          <?php
            $location = get_field('location');
            if(!empty($location)): ?>
              <div class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section id="section4" class="contact-page-loop">
    <div class="container">
      <h1>Stay Updated</h1>
      <?php
        $recent_posts = new WP_Query(array('posts_per_page' => 2, 'post_status' => 'publish'));
        if($recent_posts->have_posts()): while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
          <div class="blog-post-summary">
            <div class="media">
              <div class="media-left">
                <p><?php echo get_the_date('M d'); ?></p>
              </div>
              <div class="media-body">
                <h4 class="media-header"><?php the_title(); ?><small>by <?php the_author(); ?></small></h4>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">READ MORE</a>
              </div>
            </div>
          </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
      <div class="btn-inline">
        <a href="<?php echo home_url('blog'); ?>" class="btn-main btn-clear">Our Blog</a>
        <a href="<?php echo home_url('subscribe'); ?>" class="btn-main btn-clear">Subscribe</a>
      </div>
    </div>
    <div class="follow-us">
      <div class="container">
        <h2>FOLLOW US ON SOCIAL MEDIA</h2>
        <div class="follow-us-social">
          <?php
            $facebook = get_field('facebook', 'option');
            $twitter = get_field('twitter', 'option');
            $linkedin = get_field('linkedin', 'option');
            if($facebook): ?>
              <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-official"></i></a>
            <?php endif;
            if($twitter): ?>
              <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
            <?php endif;
            if($linkedin): ?>
             <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>