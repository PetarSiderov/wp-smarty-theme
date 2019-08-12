<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package News_Today_24
 */

get_header();
?>

		
		
<section>
		<div class="row">
		<div class="col-md-8">
		<h1 class="page-header fw-300 text-center">
				<strong class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'newstoday24' ); ?></strong>
		</h1>	
		</div>
		<div class="col-md-3">
			<?php 
				get_sidebar();
			?>
		</div>

		</div>
	
</section>		


<?php
get_footer();
