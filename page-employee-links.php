<?php get_header(); ?>
<main id="main">
  <section id="employeeLinks">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="emp-links-block">
            <?php if(is_user_logged_in()): ?>
              <?php the_field('employee_links_intro'); ?>
              <div class="emp-links">
                <?php if(have_rows('employee_links')): while(have_rows('employee_links')): the_row(); ?>
                  <a href="<?php the_sub_field('link_address'); ?>" class="btn-emp-link"><?php the_sub_field('link_title'); ?></a>
                <?php endwhile; endif; ?>
              </div>
            <?php else: ?>
              <p>You must be logged in to view this content.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>