<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package News_Today_24
 */

get_header();
?>

<section class="page-header dark page-header-xs">
				<div class="container">

					<h1><?php the_title(); ?></h1>

				</div>
</section><!-- /PAGE HEADER -->
<section>
	<div class="container">
		<div class="row">
			<!-- LEFT -->
			<div class="col-md-9 col-sm-9">
			<?php
				while ( have_posts() ) :
					the_post();
				?>

			<h1 class="blog-post-title"><?php echo get_the_title(); ?></h1>
			
			<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato"><?php echo date('Y D M') ?></span>
									</a>
								</li>
								<li>
									<a href="<?php echo get_comments_link($post->ID); ?>">
										<i class="fa fa-comment-o"></i>
										<span class="font-lato"><?php echo get_comments_number(); ?> Comments
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<?php if( empty(the_author())) { ?>
										<span class="font-lato">Unknonw</span>
										<? } else { ?>
										<span class="font-lato"><?php the_author(); ?></span>
										<?php } ?>
									</a>
								</li>
			</ul>
			</p>
			<p class="dropcap">
				
						
							<?php
							the_post_thumbnail();
							?>

					<?php
						the_content();


						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
			</p>
			</div><!-- col-md-9 col-sm-9 -->
			<div class="col-md-3 col-sm-3">
				<!-- INLINE SEARCH -->
					<div class="inline-search clearfix mb-30">
						<br>
						<br>
						<br>
						<br>
						<?php get_sidebar(); ?>
					</div><!--inline-search--->
			</div> <!-- col-md-3 col-sm-3 -->

		</div><!-- row-->
	</div><!-- container -->
</section>

	
<?php
get_footer();
