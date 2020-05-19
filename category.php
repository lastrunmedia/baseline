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

 get_header(); ?>

	<main role="main">

    <div class="container page-content">
      <div class="row">
        
        <div class="col-md-12">
          <h1><?php _e( 'Posts filed in ', 'baseline' ); single_cat_title(); ?></h1>
        </div>

      </div>

      <div class="row">
        
        <div class="col-md-4">

          <?php get_template_part('loop'); ?>

        </div>

      </div>

      <div class="row">
        
        <div class="col-md-12">
          <?php get_template_part('pagination'); ?>
        </div>

      </div>

    </div>

	</main>

<?php get_footer(); ?>