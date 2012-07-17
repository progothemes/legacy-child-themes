<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package NAPWC
 * @since NAPWC 1.0
 */

get_header();
?>
<div id="container" class="container_12">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="pagetop">
<h1 class="page-title"><?php the_title(); ?></h1>
<?php do_action('progo_pagetop'); ?>
</div>
<div id="main" class="grid_8">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry">
<?php the_content(); ?>
</div><!-- .entry -->
</div><!-- #post-## -->
</div><!-- #main -->
<?php endwhile; ?>
<div class="grid_4 secondary">
<?php
if(is_page(180)){get_sidebar('chiropractic'); 
}elseif (is_page(171)){
 get_sidebar('dental');
}elseif (is_page(176)){
get_sidebar('medical');
}elseif (is_page(178)){
get_sidebar('vision');
}else{ get_sidebar();}
?>
</div>
</div><!-- #container -->
<?php get_footer(); ?>
