<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Chathura" rel="stylesheet">
    <script src="https://use.typekit.net/pbi3vhp.js"></script>
    <script src="https://use.typekit.net/kpp4ocf.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

	</head>
  <body <?php body_class(isset($class) ? $class : ''); ?>>
    <div class="masthead">
      <div class="row">
        <div class="col-xs-4 col-sm-2">
         <?php
          if ( is_user_logged_in() ) {
              echo '<a class="btn-main left" href="' . wp_logout_url( home_url() ) . '">LOGOUT</a>';
          } else {
              echo  '<a class="btn-main left" href="' . home_url('login') . '">EMPLOYEE LOGIN</a>';
          }
          ?>
        </div>
        <div class="col-xs-4 col-sm-1">
          <!--<a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="Header Logo" class="headerLogoTop" />
          </a>-->
        </div>
        <div class="col-xs-4 col-sm-2 col-sm-offset-7">
          <a href="<?php echo home_url(); ?>/apply-now/" class="btn-main right">APPLY NOW</a>
        </div>
        <div class="col-xs-12 col-sm-2 col-sm-offset-8 headerSocials">
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="twitter"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="facebook"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="linkedIn"></a>
        </div>
        <div class="col-xs-12 col-sm-7 col-sm-offset-2 navButton">

          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse">
             <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div><!-- row -->
    </div><!-- container -->
    <div id="main-container" >
