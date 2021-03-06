<?php

/**
 * Baseline.
 *
 * WARNING: This file is part of the core Baseline Wordpress Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Baseline
 * @author  Last Run Media
 * @link    https://lastrunmedia.com/wordpress/
 */


/*
 *
 *This code controls the theme customizer in WordPress.
 *
*/



// Add Baseline Customizer section and settings

add_action( 'customize_register', 'baseline_customizer_settings' );
function baseline_customizer_settings( $wp_customize ) {

  // Create Custom Baseline Panel
  $wp_customize->add_panel( 'Baseline', array(
    'priority'       => 100,
    'theme_supports' => '',
    'title'          => __( 'Baseline Settings', 'baseline' ),
    'description'    => __( 'Customize the Baseline Framework', 'baseline' ),
  ) );

  // Create Colors Section
  $wp_customize->add_section( 'baseline_color_settings' , array(
    'title'      => 'Colors',
    'panel'    => 'Baseline',
    'priority'   => 30,
) );

  // Add Navbar Color Setting
  $wp_customize->add_setting( 'navbar_color' , array(
    'default'     => '#FF0004',
    'transport'   => 'refresh',
) );

  // Add Navbar Color Control
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_color', array(
  'label'        => 'Navigation Bar Color',
  'section'    => 'baseline_color_settings',
  'settings'   => 'navbar_color',
) ) );

  // Add Menu Link Color Setting
  $wp_customize->add_setting( 'menu_link_color' , array(
  'default'     => '#FFFFFF',
  'transport'   => 'refresh',
) );

  // Add Menu Link Color Control
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link_color', array(
  'label'        => 'Menu Link Color',
  'section'    => 'baseline_color_settings',
  'settings'   => 'menu_link_color',
) ) );

  // Add Menu Link Hover Color Setting
  $wp_customize->add_setting( 'menu_link_hover_color' , array(
  'default'     => '#333333',
  'transport'   => 'refresh',
) );

  // Add Menu Link Hover Color Control
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link_hover_color', array(
  'label'        => 'Menu Hover Color',
  'section'    => 'baseline_color_settings',
  'settings'   => 'menu_link_hover_color',
) ) );

  // Create Tracking Codes Section
  $wp_customize->add_section( 'baseline_tracking_settings' , array(
    'title'      => 'Tracking Codes',
    'panel'    => 'Baseline',
    'priority'   => 50,
) );

  // Add Google Webmaster Verification Setting
  $wp_customize->add_setting( 'google_verification_block', array(
     'default'           => __( 'Enter Google Verification Number', 'baseline' ),
     'sanitize_callback' => 'sanitize_text'
  ) );

  // Add Google Webmaster Verification Control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'google_verification_block',
        array(
            'label'    => __( 'Google Verification Number', 'baseline' ),
            'section'  => 'baseline_tracking_settings',
            'settings' => 'google_verification_block',
            'type'     => 'text'
        )
      )
  );

  // Add Google Analytics Setting
  $wp_customize->add_setting( 'google_analytics_block', array(
     'default'           => __( 'UA-XXXXX-X', 'baseline' ),
     'sanitize_callback' => 'sanitize_text'
  ) );

  // Add Google Analytics Control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'google_analytics_block',
        array(
            'label'    => __( 'Google Anayltics ID', 'baseline' ),
            'section'  => 'baseline_tracking_settings',
            'settings' => 'google_analytics_block',
            'type'     => 'text'
        )
      )
  );

  // Add Facebook Pixel Setting
  $wp_customize->add_setting( 'facebook_pixel_block', array(
     'default'           => __( 'Enter Facebook Pixel ID', 'baseline' ),
     'sanitize_callback' => 'sanitize_text'
  ) );

  // Add Facebook Pixel Control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'facebook_pixel_block',
        array(
            'label'    => __( 'Facebook Pixel ID', 'baseline' ),
            'section'  => 'baseline_tracking_settings',
            'settings' => 'facebook_pixel_block',
            'type'     => 'text'
        )
      )
  );


  // Sanitize Text
  function sanitize_text( $text ) {
      return sanitize_text_field( $text );
  }

}

// Add Baseline Customizer CSS funtionality to theme
add_action( 'wp_head', 'baseline_customizer_css');
function baseline_customizer_css()
{
    ?>
         <style type="text/css">
             .navbar { background: <?php echo get_theme_mod('navbar_color', 'FF0004'); ?>; }
             .navbar a, .navbar-toggler-icon .fas { color: <?php echo get_theme_mod('menu_link_color', 'FFFFFF'); ?>; }
             .navbar a:hover, .navbar a:focus { color: <?php echo get_theme_mod('menu_link_hover_color', '333333'); ?>; }
         </style>
    <?php
}


// Add Google Verification to Header
add_action( 'wp_head', 'baseline_customizer_google_verification');
function baseline_customizer_google_verification()
{
    ?>

    <!-- Begin Google Verification -->
    <meta name="google-site-verification" content="<?php echo get_theme_mod('google_verification_block', ''); ?>" />
    <!-- End Google Verification -->
    <?php
}

// Add Google Analytics to Header
add_action( 'wp_head', 'baseline_customizer_google_analytics');
function baseline_customizer_google_analytics()
{
    ?>


    <!-- Begin Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_theme_mod('google_analytics_block', ''); ?>"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '<?php echo get_theme_mod('google_analytics_block', ''); ?>');
    </script>
    <!-- End Google Analytics -->
    <?php
}


// Add Facebook Pixel to Header
add_action( 'wp_head', 'baseline_customizer_facebook_pixel');
function baseline_customizer_facebook_pixel()
{
    ?>

    <!-- Begin Facebook Pixel -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?php echo get_theme_mod('facebook_pixel_block', ''); ?>');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=<?php echo get_theme_mod('facebook_pixel_block', ''); ?>&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel -->
    <?php
}