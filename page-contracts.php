<?php get_header(); ?>
<main id="main">
  <section id="contracts">
    <div class="container">
      <h1>Contracts</h1>
      <div class="row">
        <?php if(have_rows('contracts_sections')): $c=0; while(have_rows('contracts_sections')): the_row(); ?>
          <?php if($c%2==0){ echo '<div class="clearfix"></div>'; } ?>
          <div class="col-sm-6">
            <?php the_sub_field('contracts_section_content'); ?>
          </div>
        <?php $c++; endwhile; endif; ?>
      </div>
    </div>
    <div id="contracts-img"></div>
  </section>
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
  </section>
  <section id="teammates">
    <div class="container">
      <h1>DDG Teammates</h1>
      <ul class="list-unstyled list-inline">
        <?php if(have_rows('teammates')): while(have_rows('teammates')): the_row(); ?>
          <li><a href="<?php the_sub_field('teammate_link'); ?>"><img src="<?php the_sub_field('teammate_image'); ?>" /></a></li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>