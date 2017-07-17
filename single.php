<?php get_header(); ?>
<main id="main">
  <section id="blogSingle">
    <div class="container">
      <h1>Our Blog</h1>
      <p class="text-center"><a href="<?php echo home_url('subscribe'); ?>" class="btn-main">Subscribe</a></p>
      <div class="row blog-post">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="col-sm-2">
            <div class="blog-date">
              <p><?php echo get_the_date('M d'); ?></p>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="blog-content-wrapper">
            <div class="blog-content">
              <h4 class="blog-title"><?php the_title(); ?><small>by <?php the_author(); ?></small></h4>
              <?php the_content(); ?>
            </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
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