<?php get_header(); ?>
<main id="main">
  <div class="container">
    <img src="<?php the_field('top_image'); ?>" class="img-responsive center-block" alt="Business people working at table" style="margin-top:40px;" />
    <section class="main-content">
      <h1>Company Overview</h1>
      <article class="single-col">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </article>
    </section>
    <section id="meetTheTeam">
      <h1>Meet The Team</h1>
      <div class="row team-members">
        <?php if(have_rows('team_members')): $i=0; while(have_rows('team_members')): the_row(); ?>
          <?php if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
          <div class="col-sm-6">
            <?php 
              $team_member_name = get_sub_field('team_member_name');
              $team_member_id = str_replace(' ', '', $team_member_name);
            ?>
            <a href="#" class="team-member" data-toggle="modal" data-target="#<?php echo $team_member_id; ?>">
              <img src="<?php the_sub_field('team_member_image'); ?>" class="img-responsive center-block" alt="<?php echo $team_member_name; ?>" />
              <h2><?php echo $team_member_name; ?><small><?php the_sub_field('team_member_title'); ?></small></h2>
            </a>
            <div class="modal fade" id="<?php echo $team_member_id; ?>" tab-index="-1" role="dialog" aria-labelledby="<?php echo $team_member_id; ?>-title">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="<?php echo $team_member_id; ?>-title"><?php echo $team_member_name; ?><small><?php the_sub_field('team_member_title'); ?></small></h4>
                  </div>
                  <div class="modal-body">
                    <blockquote>
                      <footer><em><?php the_sub_field('team_member_quote'); ?></em></footer>
                    </blockquote>
                    <?php the_sub_field('team_member_bio'); ?>
                  </div>
                  <div class="modal-footer">
                    <a href="<?php echo home_url('contact-us'); ?>" class="btn-main">Contact</a>
                    <a href="#" class="btn-main" data-dismiss="modal">Close</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; endif; ?> 
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>