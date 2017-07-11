<?php get_header(); ?>
<section class="employeeLinks">
  <div class="container">
    <div class="row">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <div class="col-xs-12 col-sm-6 employLinksContent">
            <?php the_content(); ?>
            <?php if ( is_user_logged_in() ) : ?>


            <a href="#" class="btn-main">PLACEHOLDER FOR TIME TRAKING SOFTWARE</a>
            <a href="#" class="btn-main">PLACEHOLDER FOR COMMON LINK</a>
            <a href="#" class="btn-main">PLACEHOLDER FOR COMMON LINK</a>
          <?php else : ?>
          <div class="attention"></div>
          <?php endif; ?>
          </div>
          <!-- /article -->
        <?php endwhile; ?>
        <?php else: ?>
          <!-- article -->

          <article>
            <h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>
          </article>
          <!-- /article -->

        <?php endif; ?>
    </div><!-- row -->
  </div><!-- container -->
</section>
<?php get_footer(); ?>
