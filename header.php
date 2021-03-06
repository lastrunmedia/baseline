<!doctype html>

<!--
 * Baseline.
 *
 * WARNING: This file is part of the core Baseline Wordpress Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Baseline
 * @author  Last Run Media
 * @link    https://lastrunmedia.com/wordpress/
 *
 -->

<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
    
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
  
	<body <?php body_class(); ?>>

    <!-- Begin Header -->
    <header class="header" role="banner">

      <!-- Begin Menu -->

      <nav class="navbar navbar-expand-lg fixed-top">
          <div class="d-flex flex-grow-1">
              <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
              <a class="navbar-brand" href="<?php echo home_url(); ?>">
                  
                  <!-- Begin Custom Logo -->
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?><img src="<?php echo $image[0]; ?>" alt="Site Logo">
                  <!-- End Custom Logo -->

              </a>
              <div class="w-100">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
              </div>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="headerNav">
              <?php baseline_nav(); ?>
          </div>
      </nav>

      <!-- End Menu -->

    </header>
    <!-- End Header -->


    <!-- Begin Site Inner -->
    <div class="site-inner">