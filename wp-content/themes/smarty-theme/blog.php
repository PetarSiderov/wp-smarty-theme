<?php 
/*
    Template Name: Blog Page 
*/
get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id ( $post->ID ) );

?>
<h1> <?php the_title(); ?> </h1>
<?php get_footer()?>