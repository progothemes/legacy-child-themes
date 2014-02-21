<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ProGo
 * @subpackage Business Pro
 * @since Business Pro 1.0
 */

get_header(); ?>
	<div id="bg">
    <div id="container" class="container_12">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="pagewrap">
            <div id="main" class="grid_8">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                    }
                    the_content();
                    ?>
                    </div><!-- .entry -->
                </div><!-- #post-## -->
            </div><!-- #main -->
            <?php endwhile; ?>
            <div class="grid_4 secondary">
                <?php get_sidebar(); ?>
            </div>
        </div><!-- #pagewrap -->
    </div><!-- #container -->
	</div><!-- #bg -->
<?php get_footer(); ?>
