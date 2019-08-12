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
<section class="page-header dark">
				<div class="container">

					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'newstoday24' ); ?></h1>

				</div>
			</section>
		
			<section class="section-xlg">
				<div class="container">
					
					<div class="row">

						<div class="col-md-6 col-sm-6 hidden-xs-down">
							
							<div class="error-404">
								404
							</div>
						
						</div>

						<div class="col-md-6 col-sm-6">
						
							<h3 class="m-0">Sorry, <strong>The page you requested can not be found!</strong></h3>
							<p class="mt-0 fs-20 font-lato text-muted">Please, search again using more specific keywords.</p>

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix mb-60">
								<form action="" method="get" class="widget_search">
									<input type="search" placeholder="Search..." id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
									<div class="clear"></div>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<div class="divider mb-0"><!-- divider --></div>

							<a class="fs-16 font-lato" href="/index.php"><i class="glyphicon glyphicon-menu-left mr-10 fs-12"></i></a>

						</div>

					</div>
					
				</div>
			</section>
	


<?php
get_footer();
