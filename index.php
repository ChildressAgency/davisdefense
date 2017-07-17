<?php get_header(); ?>
<main id="main">
  <div class="container">
    <article class="single-col">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="read-more">READ MORE</a>
      <?php endwhile; endif; ?>
    </article>
  </div>
</main>
<?php get_footer(); ?>