<?php get_header(); ?>
  <div class="contractArea">
    <div class="container">
      <div class="row">
        <h1>CONTRACTS</h1>
        <div class="col-xs-12">
          <h2>GENERAL SERVICES ADMINISTRATION (GSA) SCHEDULES</h2>
          <a target="_blank" href="<?php the_field('general_services_administration_schedules_url'); ?>" style="line-height:1em;">GSA eLibrary</a>
          <p style="margin-top:15px;"><?php the_field('general_services_administration_schedules'); ?></p>
          <?php the_field('general_services_administration_schedules_contract_number'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h2>SEAPORT ENHANCED &#40;SEAPORT-E&#41;</h2>
          <a target="_blank" href="<?php the_field('seaport_enhanced_information_url'); ?>"><?php the_field('seaport_enhanced_information_url'); ?></a>
          <p><?php the_field('seaport_enhanced_information_content'); ?></p>
          <?php the_field('seaport_enhanced_information'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h2>CUSTOMER SATISACTION POC</h2>
          <?php the_field('customer_satisfaction_content'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h2>CONTRACT INFORMATION POC</h2>
          <?php the_field('contract_information_content'); ?>
        </div>
      </div>
        <div class="awardedTask">
          <h2>AWARDED TASK ORDERS</h2>
            <div class="awardColumns">
              <ul>
                <?php
                  if( have_rows('awarded_task_orders') ):
                    while ( have_rows('awarded_task_orders') ) : the_row(); ?>
                    <?php $file = get_sub_field('task_orders'); ?>
                    <li><a href="<?php echo $file['url']; ?>" target="_blank"><?php echo $file['title']; ?></a></li>
                  <?php  endwhile;
                else :
                  endif;
                ?>
              </ul>
            </div>
        </div>
        <div class="teamMates">
          <h2>DAVIS DEFENSE GROUP AND ITS SEAPORT-E TEAMMATES</h2>
          <?php the_field('seaport-e_teammates_content'); ?>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 left-groups">
            <h3>BAE SYSTEMS</h3>
            <a target="_blank" href="<?php the_field('bae_systems_url'); ?>"><?php the_field('bae_systems_url'); ?></a>
            <?php the_field('bae_systems_content'); ?>
            <h3>BATTELLE</h3>
            <a target="_blank" href="<?php the_field('battele_url'); ?>"><?php the_field('battele_url'); ?></a>
            <?php the_field('battelle_content'); ?>
            <h3>CACI</h3>
            <a target="_blank" href="<?php the_field('caci_url'); ?>"><?php the_field('caci_url'); ?></a>
            <?php the_field('caci_content'); ?>
            <h3>GENERAL DYNAMICS</h3>
            <a target="_blank" href="<?php the_field('general_dynamics_url'); ?>"><?php the_field('general_dynamics_url'); ?></a>
            <?php the_field('general_dynamics_content'); ?>
            <h3>KRATOS DEFENSE &amp; SECURITY</h3>
            <a target="_blank" href="<?php the_field('kratos_defense_&_security_url'); ?>"><?php the_field('kratos_defense_&_security_url'); ?></a>
            <?php the_field('kratos_defense_&_security_content'); ?>
            <h3>L-3 SERVICES INC</h3>
            <a target="_blank" href="<?php the_field('l-3_services_inc_url'); ?>"><?php the_field('l-3_services_inc_url'); ?></a>
            <?php the_field('l-3_services_inc_content'); ?>
            <h3>MCR FEDERAL</h3>
            <a target="_blank" href="<?php the_field('mcr_federal_url'); ?>"><?php the_field('mcr_federal_url'); ?></a>
            <?php the_field('mcr_federal_content'); ?>
            <h3>ORSA CORPORATION</h3>
            <a target="_blank" href="<?php the_field('orsa_corporation_url'); ?>"><?php the_field('orsa_corporation_url'); ?></a>
            <?php the_field('orsa_corporation_content'); ?>
            <h3>SURVICE</h3>
            <a target="_blank" href="<?php the_field('survice_url'); ?>"><?php the_field('survice_url'); ?></a>
            <?php the_field('survice_content'); ?>
            <h3>TEKSYS</h3>
            <a target="_blank" href="<?php the_field('teksys_url'); ?>"><?php the_field('teksys_url'); ?></a>
            <?php the_field('teksys_content'); ?>
            <h3>THREAT DEFENSE</h3>
            <a target="_blank" href="<?php the_field('threat_defense_url'); ?>"><?php the_field('threat_defense_url'); ?></a>
            <?php the_field('threat_defense_content'); ?>
          </div>
          <div class="col-xs-12 col-sm-6 right-groups">
            <h3>BOOZ ALLEN HAMILTON</h3>
            <a target="_blank" href="<?php the_field('booz_allen_hamilton_url'); ?>"><?php the_field('booz_allen_hamilton_url'); ?></a>
            <?php the_field('booz_allen_hamilton_content'); ?>
            <h3>CAMBER</h3>
            <a target="_blank" href="<?php the_field('camber_url'); ?>"><?php the_field('camber_url'); ?></a>
            <?php the_field('camber_content'); ?>
            <h3>ENGILITY</h3>
            <a target="_blank" href="<?php the_field('engility_url'); ?>"><?php the_field('engility_url'); ?></a>
            <?php the_field('engility_content'); ?>
            <h3>HODGES TRANSPORTATION INC.</h3>
            <a target="_blank" href="<?php the_field('hodges_transportation_inc_url'); ?>"><?php the_field('hodges_transportation_inc_url'); ?></a>
            <?php the_field('hodges_transportation_inc_content'); ?>
            <h3>KNOWLEDGE CAPITAL ASSOCIATES (KCA)</h3>
            <a target="_blank" href="<?php the_field('knowledge_capital_associates_url'); ?>"><?php the_field('knowledge_capital_associates_url'); ?></a>
            <?php the_field('knowledge_capital_associates_content'); ?>
            <h3>LOCKHEED MARTIN</h3>
            <a target="_blank" href="<?php the_field('lockeed_martin_url'); ?>"><?php the_field('lockeed_martin_url'); ?></a>
            <?php the_field('lockeed_martin_content'); ?>
            <h3>NEW BREED LOGISTICS</h3>
            <a target="_blank" href="<?php the_field('new_breed_logistics_url'); ?>"><?php the_field('new_breed_logistics_url'); ?></a>
            <?php the_field('new_breed_logistics_content'); ?>
            <h3>SAYRES AND ASSOCIATES CORPORATION</h3>
            <a target="_blank" href="<?php the_field('sayres_and_associates_corporation_url'); ?>"><?php the_field('sayres_and_associates_corporation_url'); ?></a>
            <?php the_field('sayres_and_associates_corporation_content'); ?>
            <h3>SHARPSHOOTER TRAINING, LLC</h3>
            <a target="_blank" href="<?php the_field('sharpshooter_training_url'); ?>"><?php the_field('sharpshooter_training_url'); ?></a>
            <?php the_field('sharpshooter_training_content'); ?>
            <h3>SYSTEMS STUDIES &amp; SIMULATION CORPORATION</h3>
            <a target="_blank" href="<?php the_field('systems_studies_&_simulation_corporation_url'); ?>"><?php the_field('systems_studies_&_simulation_corporation_url'); ?></a>
            <?php the_field('systems_studies_&_simulation_corporation_content'); ?>
            <h3>TRANSFORMATION SYSTEMS, INC.</h3>
            <a target="_blank" href="<?php the_field('transformation_systems_url'); ?>"><?php the_field('transformation_systems_url'); ?></a>
            <?php the_field('transformation_systems_content'); ?>
            <a target="_blank" href="#" class="btn-main">VIEW CHART</a>
          </div>
        </div>
        <div class="support-services">
          <h2>SUPPORT SERVICES EXPERIENCE</h2>
          <div class="columns">
            <ul>
              <?php
                if( have_rows('support_services_experience') ):
                  while ( have_rows('support_services_experience') ) : the_row(); ?>
                  <li><?php the_sub_field('support_services_experience_support_type'); ?></li>
                <?php endwhile;
                else :
                endif;
              ?>
            </ul>
          </div>
        </div>
        <div class="quality-assurance">
          <h2>QUALITY ASSURANCE PROGRAM</h2>
          <?php the_field('quality_assurance_program_content'); ?>
        </div>
        <div class="other-transaction-authority">
          <h2>Other Transaction Authority (OTA)</h2>
          <h3>Defense Mobility Enterprise (DME)</h3>
          <a href="http://defensemobility.org" target="_blank">http://defensemobility.org</a>
          <p>Member, National Advanced Mobility Consortium (NAMC)</p>
          <h3>Department of Defense Ordnance Technology Consortium (DOTC)</h3>
          <a href="http://www.nac-dotc.org" target="_blank">http://www.nac-dotc.org</a>
          <p>Member, National Armaments Consortium</p>
          <h3>Consortium for Energy, Environment and Demilitarization</h3>
          <a href="https://www.ceedtechnologies.org/" target="_blank">https://www.ceedtechnologies.org</a>
          <h3>Consortium for Command, Control, and Communications in Cyberspace (C5)</h3>
          <a href="https://c5technologies.org/" target="_blank">https://c5technologies.org</a>
        </div>
      </div><!-- row -->
    </div><!--container -->

  </div><!-- contracts -->
  
    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 contactTitle">
            <h1>CONTACT US</h1>
          </div>
          <div class="col-xs-12 col-sm-4 contactInfo">
            <div class="col-xs-6 col-sm-12">
              <h3>ADDRESS</h3>
              <p>
                475 AQUIA TOWNE CENTER DRIVE<BR />
                SUITE #401 STAFFORD, VA 22554
              </p>
            </div>
            <div class="col-xs-6 col-sm-12">
              <h3>PHONE</h3>
              <p>540. 548. 5980</p>
              <h3>FAX</h3>
              <p>540. 542. 3079</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 contactForm">
            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
          </div>
        </div><!--row -->
      </div><!-- container -->
    </div><!-- contact-us -->
  <div class="contactBackground"></div><!-- contactBackground -->
  <?php get_footer(); ?>
