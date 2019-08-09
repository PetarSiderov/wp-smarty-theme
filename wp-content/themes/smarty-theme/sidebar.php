<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package News_Today_24
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>



<!-- HOT -->
<h3 class="page-header mt-0 fw-300">
								Today's <span>Hot</span>
							</h3>
							<?php 
			$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

?>
							<!-- No #1 Hot -->
							<div class="item-box mt-0">
								<figure  class="mb-20">
									<a class="item-hover" href="#">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>READ</strong> ARTICLE
										</span>
									</a>
									<?php $popular = new WP_Query('orderby=comment_count&posts_per_page=10'); ?>
									
									<!-- comment counting  -->
									
									<?php while ($popular->have_posts()) : $popular->the_post(); ?>	
									<?php $justanimage = get_post_meta($post->ID, 'Image', true); // get an image
										if ($justanimage) { ?>
									<img src="<?php echo get_post_meta($post->ID, "Image", true); ?>" alt="<?php the_title(); ?>" />
									<?php } else { $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
									echo '<img class="img-fluid" src="'.$image[0].'" alt="" />';  ?>
									<?php } ?>
									
								<?php break; endwhile; ?>
								</figure>
								<div class="item-box-desc p-10">
								<small><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></small>
								<?php
									
							the_posts_navigation();
							?>
								</div>
							</div>
							<!-- /No #1 Hot -->

							<!-- small articles -->
							<div class="row mt-30">
								<div class="col-6 col-md-6">
									<a href="#">
										<img alt="" class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/demo_files/images/magazine/thumbs/thumb_3-min.jpg" />
										<h6 class="fsize12 font300 padding6">Horses hypnotized by the sea</h6>
									</a>							
								</div>
								<div class="col-6 col-md-6">
									<a href="#">
										<img alt="" class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/demo_files/images/magazine/thumbs/thumb_4-min.jpg" />
										<h6 class="fsize12 font300 padding6">Sochi protesters fight to be heard</h6>
									</a>							
								</div>
							</div>
							<!-- /small articles -->



							<!-- LATEST -->
							<h3 class="page-header fw-300 mt-60">
								Read <span>this</span>, Watch <span>that</span>
							</h3>

							<div id="accordion">
								<div class="card card-default mt-5 mb-0">
									<div class="card-heading">
										<h4 class="card-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="fa fa-heart-o"></i>
												Most readed
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="card-block">
											<ul class="list-unstyled list-icons mb-10">
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card card-default mt-5 mb-0">
									<div class="card-heading">
										<h4 class="card-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="fa fa-star"></i>
												Most Rated
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="card-block">
											<ul class="list-unstyled list-icons mb-10">
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card card-default mt-5 mb-0">
									<div class="card-heading">
										<h4 class="card-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="fa fa-comment"></i>
												Most Commented
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="card-block">
											<ul class="list-unstyled list-icons mb-10">
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
												<li class="mt-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



							<!-- TWEETS -->
							<h3 class="page-header fw-300 mt-60">
								<i class="fa fa-twitter"></i> 
								Latest <span>Tweets</span> 
							</h3>

							<!--
								data-php="php/twitter/tweet.php"		- widget php path
								data-username="stepofweb"			- twitter username
								data-limit="3"					- maximum twwts to load
								
								PLEASE NOTE!
								php/_cache/ - folder should be writable by the webserver!
										- it's used to cache tweets
							-->
							<ul class="widget-twitter" data-php="php/twitter/tweet.php" data-username="stepofweb" data-limit="3">
								<li></li>
							</ul>



							<!-- FOLLOW -->
							<h3 class="page-header fw-300 mt-60">
								<i class="fa fa-twitter"></i> 
								Foolow <span>Us</span> 
							</h3>

							<!-- Social Icons -->
							<div class="mt-20 clearfix">
								<a href="#" class="social-icon social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->
