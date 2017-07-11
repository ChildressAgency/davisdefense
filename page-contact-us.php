<?php get_header(); ?>
  <div class="contact-us">
    <div class="container">
      <h1>CONTACT US</h1>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="col-xs-12 col-sm-6 contactInfo">
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
          <div class="col-xs-12 col-sm-6 contactForm">
            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div><!--row -->
    </div><!-- container -->
  </div><!-- contact-us -->
<div class="contactBackground"></div><!-- contactBackground -->
<div class="mapContainer">
  <div class="row">
    <div class="col-xs-12 col-sm-7 mapArea">
      <?php
        $location = get_field('location', 'option');
      if(!empty($location)): ?>
          <div class="acf-map google-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
          </div>
    <?php endif; ?>
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.094201046512!2d-77.40525848444919!3d38.462386479640145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6efdd3463cfc5%3A0x229f6264bfd53fbf!2sDavis+Defense+Group!5e0!3m2!1sen!2sus!4v1496783091440" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    </div><!-- mapArea -->
    <div class="col-sm-5 locateUs">
      <h2>LOCATE US</h2>
      <p>
        SITUATED IN STATFORD, VIRGINIA<br />
        DAVIS DEFENSE GROUP IS EASILY<br />
        ACCESSIBLE FROM WASHINGTON<br />
        DC AND THE MULTIPLE<br />
        GOVERNMENT AGENCIES AND<br />
        FORTUNE 500 COMPANIES IN THE <br />
        NORTHERN VIRGINIA AREA
      </p>
    </div><!-- locateUs -->
  </div><!-- row -->
</div><!-- mapContainer -->
<div class="clearfix"></div>
<div class="stay-updated">
  <div class="background">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 blogArea">
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
        <a href="<?php echo home_url(); ?>/our-blog/" class="btn-main left-side">OUR BLOG</a>
        <a href="#" class="btn-main right-side">SUBSCRIBE</a>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- background -->
  <div class="whiteBand-2">
    <h2>FOLLOW US ON SOCIAL MEDIA</h2>
    <div class="row">
      <div class="col-xs-4">
        <div class="twitter"></div>
      </div>
      <div class="col-xs-4">
        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" class="linkedIn wow bounce"></a>
      </div>
      <div class="col-xs-4">
        <div class="facebook"></div>
      </div>
    </div><!-- row -->
  </div><!-- whiteBand-2 -->
</div><!-- stay-updated -->
<?php get_footer(); ?>
