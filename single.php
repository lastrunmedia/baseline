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


    <!-- Begin Primary Container -->
    <div class="container page-content">

        <!-- Begin Content Row -->
        <div class="row">

            <div class="col-md-12">

              <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <!-- Begin Article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            </div>

            <div class="col-md-12">
              
              <!-- Begin Post Thumbnail -->
              <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
              <?php endif; ?>
              <!-- End Post Thumbnail -->
           
            </div>

            <div class="col-md-12">

              <!-- Begin Post Title -->
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
              <!-- End Post Title -->

            </div>

            <div class="col-md-12 post-meta">

              <!-- Begin Post Meta -->
              <span class="author"><?php _e( 'Written by', 'baseline' ); ?> <?php the_author_posts_link(); ?></span>
              <span class="date">on <?php the_time('F j, Y'); ?></span>
              <!-- End Post Meta -->

            </div>

            <div class="col-md-12">

              <?php the_content(); // Dynamic Content ?>

            </div>

            <div class="col-md-12">

              <?php the_tags( __( 'Tagged: ', 'baseline' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
              <p><?php _e( 'Filed in: ', 'baseline' ); the_category(', '); // Separated by commas ?></p>
              <?php edit_post_link( __( 'Edit', 'textdomain' ), '<p>', '</p>', null, 'edit-post-link' ); // Edit Post link ?>

            </div>

        </div>
        <!-- End Content Row -->

      </article>

        <div class="row">


          <div class="col-md-12">

            <!-- Begin After Post Widget Area -->
            <?php if( is_active_sidebar( 'after-post-widget' ) ) : ?>
              <aside class="after-post-widget">
               <?php dynamic_sidebar( 'after-post-widget' ); ?>
              </aside>
             <?php endif; ?>
            <!-- End After Post Widget Area -->


          </div>


        </div>

        <div class="col-md-12">

          <?php comments_template(); ?>

          <?php endwhile; ?>

          <?php else: ?>

        </div>

        <div class="col-md-12">

          <h1><?php _e( 'Sorry, nothing to display.', 'baseline' ); ?></h1>

          <?php endif; ?>

        </div>


    </div>
    <!-- End Primary Container -->

	</main>

<?php get_footer(); ?>
