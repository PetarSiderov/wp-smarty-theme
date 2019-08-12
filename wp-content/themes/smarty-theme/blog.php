<?php 
/*
    Template Name: Blog Page 
*/
get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id ( $post->ID ) );

?>
<section class="page-header dark page-header-xs">
				<div class="container">

					<h1><?php the_title(); ?></h1>

                </div>
</section>
<section>


	<div class="container">

		<div class="row">

			<!-- LEFT -->
			<div class="col-md-9 col-sm-9">

				<!-- POST ITEM -->
				<div class="blog-post-item">
                <?php
                $lastposts = get_posts( array(
                    'posts_per_page' => 3
                ) );
                if ( $lastposts ) {
                    foreach ( $lastposts as $post ) :
                        setup_postdata( $post ); ?>

                
                <h2><a href="<?php echo get_permalink();  ?>">><?php the_title(); ?></a></h2>

                <ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">June 29, 2017</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-comment-o"></i> 
								span class="font-lato">28 Comments</span>
						</a>
							</li>
							<li>
								<i class="fa fa-folder-open-o"></i> 

								<a class="category" href="#">
									<span class="font-lato">Design</span>
								</a>
								<a class="category" href="#">
									<span class="font-lato">Photography</span>
								</a>
							</li>
						<li>
						<a href="#">
							<i class="fa fa-user"></i> 
							<span class="font-lato">John Doe</span>
						</a>
					</li>
				</ul>
                <p> <?php the_content(); ?></p>

					<a href="blog-single-default.html" class="btn btn-reveal btn-default b-0 btn-shadow-1">
						<i class="fa fa-plus"></i>
							<span>Read More</span>
					</a>
                    <?php
                    endforeach; 
                    wp_reset_postdata();
                } ?>
		

                </div><!-- blog-post-item -->
            </div><!-- col-md-9 col-sm-9 -->
        </div><!-- row -->      
    </div> <!-- container ---> 
</section> <!-- section --> 

<?php get_footer()?>