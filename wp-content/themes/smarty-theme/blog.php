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
        // the query to set the posts per page to 3
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('posts_per_page' => 2, 'paged' => $paged );
        query_posts($args); ?>
        <!-- the loop -->
        <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
		<!-- rest of the loop -->
        <!-- the title, the content etc.. -->
        <figure class="mb-20">
                <img src=" <?php  echo get_the_post_thumbnail_url( $post->ID ); ?>" class="img-fluid" ?> 
				</figure>
                
                <h2><a href="<?php echo get_permalink();  ?>"><?php the_title(); ?></a></h2>

                <ul class="blog-post-info list-inline">
					<li>
						
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato"><?php echo date('Y D M') ?></span>
						
					</li>
					<li>
						<a href="<?php echo get_comments_link($post->ID); ?>">
							<i class="fa fa-comment-o"></i> 
								<span class="font-lato"><?php echo get_comments_number(); ?> Comments</span>
						</a>
							</li>
							
						
							<i class="fa fa-user"></i> 
							<span class="font-lato"><?php the_author(); ?></span>
						
					</li>
				</ul>
                <p> <?php echo wp_trim_words( get_the_content(), 80 ) ?></p>

					<a href="blog-single-default.html" class="btn btn-reveal btn-default b-0 btn-shadow-1">
						<i class="fa fa-plus"></i>
							<a href="<?php echo get_permalink(); ?> " ><span>Read More</span></a>
                    </a>
                    <!-- Add the pagination functions here. -->

                <?php endwhile; ?>
                <!-- pagination -->
              
                <?php else : ?>
                <!-- No posts found -->
                <?php endif; ?>

                </div><!-- blog-post-item -->
                <div class="text-left">
								
                                <?php   the_posts_pagination( array(
                                   'mid_size'  => 2,
                                   'prev_text' => __( 'Back', 'textdomain' ),
                                   'next_text' => __( 'Onward', 'textdomain' ),
                                   ) ); ?>
                </div>
            </div><!-- col-md-9 col-sm-9 -->
            <div class="col-md-3 col-sm-3">

				<!-- INLINE SEARCH -->
				<div class="inline-search clearfix mb-30">
                          <?php get_sidebar(); ?>          
                </div><!-- inline-search clearfix mb-30 -->
            </div><!-- col-md-3 col-sm-3 -->
        </div><!-- row -->      
    </div> <!-- container ---> 
</section> <!-- section --> 

<?php get_footer()?>