<?php get_header(); ?>
<main id="main">
  <section id="section4" class="blog-page-loop">
    <div class="container">
      <h1 class="text-center">Our Blog</h1>
      <p class="text-center"><a href="<?php echo home_url('subscribe'); ?>" class="btn-main">Subscribe</a></p>
      <?php 
        $blog_posts = new WP_Query(array('posts_per_page' => 2, 'post_status' => 'publish'));
        if($blog_posts->have_posts()): while($blog_posts->have_posts()): $bog_posts->the_post(); ?>
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
      <?php endwhile; wp_pagenavi(array('query' => $blog_posts)); endif; ?>
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