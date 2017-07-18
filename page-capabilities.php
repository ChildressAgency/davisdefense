<?php get_header(); ?>
<main id="main">
  <section id="capabilities">
    <div class="caps-icons keep-on-top">
      <div class="container">
        <h1>Capabilities</h1>
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <a href="#businessAnalytics" class="cap-link scroller">
              <span class="business-icon"></span>
              <h2>Business Analytics</h2>
              <p><?php the_field('business_analytics_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#logistics" class="cap-link scroller">
              <span class="logistics-icon"></span>
              <h2>Logistics</h2>
              <p><?php the_field('logistics_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#engineering" class="cap-link scroller">
              <span class="engineering-icon"></span>
              <h2>Engineering</h2>
              <p><?php the_field('engineering_icon_summary'); ?></p>
            </a>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-sm-4 col-md-2">
            <a href="#cyber" class="cap-link scroller">
              <span class="cyber-icon"></span>
              <h2>Cyber</h2>
              <p><?php the_field('cyber_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#education" class="cap-link scroller">
              <span class="education-icon"></span>
              <h2>Education</h2>
              <p><?php the_field('education_icon_summary'); ?></p>
            </a>
          </div>
          <div class="col-sm-4 col-md-2">
            <a href="#researchDevelopment" class="cap-link scroller">
              <span class="research-icon"></span>
              <h2>Research &amp; Development</h2>
              <p><?php the_field('research_development_icon_summary'); ?></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="capabilities-img"></div>        
  </section>
  <section id="businessAnalytics">
    <div class="container">
      <h1>Business Analytics</h1>
      <article class="single-col">
        <?php the_field('business_analytics_section_content'); ?>
      </article>
    </div>
    <div id="business-analytics-img"></div>
  </section>
  <section id="logistics">
    <div class="container">
      <h1>Logistics</h1>
      <div class="row">
        <div class="col-sm-6">
          <div class="logistic-content">
            <?php the_field('logistics_life_cycle_support_content'); ?>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="logistic-content">
            <?php the_field('quality_assurance_support_content'); ?>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="logistic-content">
            <?php the_field('equipment_sustainment_training_content'); ?>
          </div>
        </div>
      </div>
    </div>
    <div id="logistics-img visible-xs-block"></div>
  </section>
  <section id="engineering">
    <div class="container">
      <h1>Engineering</h1>
      <article class="single-col">
        <?php the_field('engineering_section_content'); ?>
      </article>
    </div>
    <div id="engineering-img"></div>
  </section>
  <section id="cyber">
    <div class="container">
      <h1>Cyber</h1>
      <article class="single-col">
        <?php the_field('cyber_section_content'); ?>
      </article>
    </div>
  </section>
  <section id="education">
    <div class="container">
      <h1>Education</h1>
      <article class="single-col">
        <?php the_field('education_section_content'); ?>
      </article>
    </div>
    <div id="education-img"></div>
  </section>
  <section id="researchDevelopment">
    <div class="container">
      <h1>Research And Development</h1>
      <article class="single-col">
        <?php the_field('research_development_section_content'); ?>
      </article>
    </div>
  </section>
</main>
<?php get_footer(); ?>