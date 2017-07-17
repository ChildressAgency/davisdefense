<?php get_header(); ?>
<main id="main">
  <section id="awardedTaskOrders">
    <div class="container">
      <h1>Awarded Task Orders</h1>
      <ul class="list-unstyled">
        <?php
          if(have_rows('awarded_task_orders')): while(have_rows('awarded_task_orders')): the_row();
            $file = get_sub_field('task_order_pdf'); ?>
            <li><a href="<?php echo $file['url']; ?>" target="_blank"><?php echo $file['title']; ?></a></li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <div id="awardedTaskOrders-img"></div>
  </section>
</main>
<?php get_footer(); ?>