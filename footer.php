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


</div>
<!-- End Site Inner -->

<!-- Begin Site Footer -->
<div class="container-fluid site-footer">

    <!-- Begin Footer Widget Areas -->
    <div class="row footer-widgets">
    
        <div class="col-md-3">
            <?php if( is_active_sidebar( 'footer-widget-one' ) ) : ?>
                <aside class="footer-widget-one">
                 <?php dynamic_sidebar( 'footer-widget-one' ); ?>
                </aside>
            <?php endif; ?>
        </div>

        <div class="col-md-3">
            <?php if( is_active_sidebar( 'footer-widget-two' ) ) : ?>
                <aside class="footer-widget-two">
                 <?php dynamic_sidebar( 'footer-widget-two' ); ?>
                </aside>
            <?php endif; ?>
        </div>

        <div class="col-md-3">
            <?php if( is_active_sidebar( 'footer-widget-three' ) ) : ?>
                <aside class="footer-widget-three">
                 <?php dynamic_sidebar( 'footer-widget-three' ); ?>
                </aside>
            <?php endif; ?>
        </div>

        <div class="col-md-3">
            <?php if( is_active_sidebar( 'footer-widget-four' ) ) : ?>
                <aside class="footer-widget-four">
                 <?php dynamic_sidebar( 'footer-widget-four' ); ?>
                </aside>
            <?php endif; ?>
        </div>
    
  </div>
  <!-- End Footer Widget Areas -->

  <!-- Begin Footer Menu -->
    <div class="row footer-menu">
         <div class="col-md-12">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
         </div>
    </div>
    <!-- End Footer Menu -->

  <div class="row">
    
		<div class="col-md-12">

			 <!-- Begin Copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. All rights reserved.
				</p>
				<!-- End Copyright -->

		</div>
    
  </div>

</div>
<!-- End Site Footer -->

<?php wp_footer(); ?>

		<!-- Bootstrap JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</html>