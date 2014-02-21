<?php
add_action( 'after_setup_theme', 'rjt_setup', 11 );
function rjt_setup() {
	// no poweredby
	remove_action( 'progo_poweredby', 'progo_powered_by' );
}

add_action('pre_option_image_default_link_type', 'always_link_images_to_none');
function always_link_images_to_none() {
  return 'none';
}

/*
 * tweak Customer Testimonials a little :
 *
 *$postquote = '&rdquo;<br /><br />';
 *$postquote = apply_filters( 'progo_testimonials_post_quote', $postquote, $testimonial, $fromwhere );
 *
 *$auth = '<div class="by">'. wp_kses($author['auth'],array()) .'<br />'. wp_kses($author['loc'],array()) .'</div>';
 *$auth = apply_filters( 'progo_testimonials_byline', $auth, $testimonial, $author, $fromwhere );
 */
function rjt_test_postquote( $postquote ) {
	return '&rdquo; ';
}
add_filter('progo_testimonials_post_quote', 'rjt_test_postquote');

function rjt_test_by( $auth, $testimonial, $author, $fromewhere ) {
	return '<strong class="by">'. wp_kses($author['auth'],array()) .' | '. wp_kses($author['loc'],array()) .'</strong>';
}
add_filter('progo_testimonials_byline', 'rjt_test_by', 10, 4);

function rjt_test_start( $start ) {
	return '<hr />'. $start;
}
add_filter('progo_testimonials_open_tag', 'rjt_test_start');