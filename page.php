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

          <div class="col-sm-12">
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="col-sm-12">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- Begin Article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_content(); ?>

            <?php comments_template( '', true ); // Remove if you don't want comments ?>

            <br class="clear">

            <?php edit_post_link( __( 'Edit', 'baseline' ), '<p>', '</p>', null, 'edit-post-link' ) ?>

            </article>
            <!-- End Article -->

            <?php endwhile; ?>

            <?php else: ?>

            <article>

            <h2><?php _e( 'Sorry, nothing to display.', 'baseline' ); ?></h2>

            </article>

            <?php endif; ?>
      

          </div>

        </div>
      </div>

	</main>

<?php get_footer(); ?>
