<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package News_Today_24
 */

get_header();
?>

<!-- -->
<section>
		<div class="container">
			<div class="row">
				<!-- LEFT -->
				<div class="col-sm-9">
				
				<div class="owl-carousel buttons-autohide controlls-over" 
					data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
					<?php

									if ( have_posts() ) :
										while ( have_posts() ) :
											the_post();
											$counter ++;
											$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
											/* grab the url for the full size featured image */
											$featured_img_url = get_the_post_thumbnail_url('full'); 
											$link_to_post = get_permalink();
											/* link thumbnail to full size image for use with lightbox*/
											echo '<a href="'.$link_to_post.'" rel="lightbox">'; 
											echo '<img class="img-fluid" src="'.$image[0].'"';
												the_post_thumbnail('thumbnail');
											echo '>';
											echo '</a>';
											if( $counter == 3){
												break;
											}
										endwhile; 
									endif; 
					?>
				</div>
				<div class="alert alert-mini alert-primary mb-30">
						<strong>BREAKING NEWS:</strong>
						<div class="owl-carousel controlls-over m-0" 
						data-plugin-options='{"autoPlay":3000, "stopOnHover":true, "items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
							<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) :
									
								endif;

								/* Start the Loop */
								while ( have_posts() ) :
									the_post();
									?>
									<header>
										
									</header>
									<?php
									/*
									* Include the Post-Type-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Type name) and that will be used instead.
									*/
									//get_template_part( 'template-parts/content', get_post_type() );
									?>
									<div class="text-left fs-14">
									<a href="<?php echo get_permalink();  ?>" class="page-title screen-reader-text"><?php echo get_the_title(); ?></a>
									</div>
									<?php
									
								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>
							</div>
						
					</div> <!-- allert -->

<!-- TWO COLUMNS -->
<div class="row">

<!-- first column -->
<div class="col-md-12">
			<h3 class="page-header fw-300">
				<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a>
				<strong>Recent</strong> News
			</h3>
			
				<div class="col-md-4 text-center">
				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<div>
					<img id="Img-main" alt="" class="img-fluid" src="<?php  echo get_the_post_thumbnail_url( $post->ID ); ?>" />
				</div>
			</div>
		<div class="col-md-8">					
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<p><?php the_excerpt(__('(more…)')); ?></p>
				<small class="block"><?php echo date('Y D M H') ?></small>
		</div>
		<hr /><!-- separator -->
		<?php 
		endwhile;
		wp_reset_postdata();
		?>
</div>

						<!-- /LEFT -->

						<!-- RIGHT -->
						<div class="col-sm-3">
							<?php get_sidebar(); ?>	
						</div>
						<!-- /RIGHT -->

					</div>
				
					<div class="row">
					<div class="item-box">
					
					</div>
				</div>
				</div>
				
			</section>
			<!-- / -->
			

		</main><!-- #main -->
		
	</div><!-- container -->
	</section>

<?php

get_footer();
