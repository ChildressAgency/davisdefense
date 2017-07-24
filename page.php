<?php get_header(); ?>
<main id="main"<?php if(is_user_logged_in()){ echo ' class="fix-height"'; } ?>>
  <div class="container">
    <article class="single-col">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </article>
  </div>
</main>
<?php get_footer(); ?>