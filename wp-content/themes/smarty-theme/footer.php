<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package News_Today_24
 */

?>
	</div><!-- #content -->
	<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3"> 
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
						<!-- footer-logo ---> 
						</div><!-- col-md-3 -->
						<div class="col-md-3">
						
							<!-- Latest Blog Post -->
							
							<ul class="footer-posts list-unstyled">
								<?php dynamic_sidebar( 'sidebar-4' ); ?>
							<!-- /Latest Blog Post -->

							</div><!-- col-md-3 ---> 
							<div class="col-md-2">
								<h2 class="widget-title"> Navigation </h2>
								<?php 
									wp_nav_menu( array(
										'theme_location'   => 'footer-menu',
										'container'        => 'ul',
										'menu_class'  	   => 'footer-links list-unstyled',
										'contaier'         => 'a'
									));
								?>
								<!-- Links -->
							</div><!-- col-md-2 --->
						
						<div class="col-md-4">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						
						&copy; All Rights Reserved, LTD <?php bloginfo('name'); ?> ,  <?php echo date('Y') ?> Author <?php  the_author(); ?>
					</div>
				</div>
				</div> <!-- row -->
	</footer><!-- footer -->
	
	

		

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<!-- JAVASCRIPT FILES -->
<script>var plugin_path = '<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/';</script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/scripts.js"></script>
		
			<!-- JAVASCRIPT FILES -->
		<script>var plugin_path = '<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/';</script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/scripts.js"></script>
		
	

		<!-- SWIPER SLIDER -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/view/demo.swiper_slider.js"></script>