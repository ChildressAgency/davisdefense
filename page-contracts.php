<?php get_header(); ?>
<main id="main" style="padding-bottom:60px;">
  <section id="contracts">
    <div class="container">
      <h1>Contracts</h1>
      <p class="text-center"><a href="<?php echo home_url('task-orders'); ?>" class="btn-main">Task Orders</a></p>
      <section id="otherTransactionAuthority">
        <div class="container">
        </div>
      </section>
      <div class="row">
        <div class="col-sm-6 col-sm-push-6">
          <article class="single-col">
            <h2>Other Transaction Authority</h2>
            <?php if(have_rows('transaction_authorities')): while(have_rows('transaction_authorities')): the_row(); ?>
              <div class="transaction-authority">
                <p><strong><?php the_sub_field('transaction_authority_name'); ?></strong></p>
                <a href="<?php the_sub_field('transaction_authority_url'); ?>"><?php the_sub_field('transaction_authority_url'); ?></a>
                <p><?php the_sub_field('transaction_authority_text'); ?></p>
              </div>
            <?php endwhile; endif; ?>
          </article>
        </div>
        <div class="col-sm-6 col-sm-pull-6">
          <h2>General Services Administration Schedules</h2>
          <a href="http://www.gsaadvantage.gov">www.gsaadvantage.gov</a>
          <p><?php the_field('gsa_schedules_text'); ?></p>
          <a href="<?php the_field('gsa_schedules_price_list'); ?>" class="btn-main">GSA Contract Price List</a>
          <h2><a href="#teammates" class="scroller" style="color:#822222;">Seaport Enhanced (Seaport-E)</a></h2>
          <a href="http://www.seaport.navy.mil">www.seaport.navy.mil</a>
          <p><?php the_field('seaport_e_text'); ?></p>
          <h2>For Customer Satisfaction &amp; Contract Info</h2>
          <p><strong><?php the_field('customer_satisfaction_name'); ?></strong><br /><?php the_field('customer_satisfaction_title'); ?></p>
          <a href="mailto:<?php the_field('customer_satisfaction_email'); ?>" class="btn-main">Send Email</a>
        </div>
      </div>
    </div>
    <div id="contracts-img"></div>
  </section>
  <section id="teammates">
    <div class="container">
      <h1>DDG Teammates</h1>
      <ul class="list-unstyled list-inline">
        <?php if(have_rows('teammates')): while(have_rows('teammates')): the_row(); ?>
          <li><a href="<?php the_sub_field('teammate_link'); ?>" target="_blank"><img src="<?php the_sub_field('teammate_image'); ?>" /></a></li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </section>
  <section id="seaporteSupportServices">
    <div class="container">
      <article class="single-col">
        <h2 class="text-center">Seaport-e Support Services</h2>
        <?php the_field('seaport_e_support_services_content'); ?>
      </article>
    </div>
  </section>
  <section id="qualityAssurance Program">
    <div class="container">
      <article class="single-col">
        <h2 class="text-center">Quality Assurance Program</h2>
        <?php the_field('quality_assurance_program_content'); ?>
      </article>
    </div>
  </section>  
</main>
<?php get_footer(); ?>