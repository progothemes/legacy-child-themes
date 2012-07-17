<?php
function napwc_sidebars() {
	register_sidebar(array(
		'name' => 'Medical',
		'id' => 'medical',
		'description' => 'Medical page sidebar',
		'before_widget' => '<div class="block %1$s %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="title"><span class="spacer">',
		'after_title' => '</span></h3><div class="inside">'
	));
	register_sidebar(array(
		'name' => 'Dental',
		'id' => 'dental',
		'description' => 'Dental page sidebar',
		'before_widget' => '<div class="block %1$s %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="title"><span class="spacer">',
		'after_title' => '</span></h3><div class="inside">'
	));
	register_sidebar(array(
		'name' => 'Vision',
		'id' => 'vision',
		'description' => 'Vision page sidebar',
		'before_widget' => '<div class="block %1$s %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="title"><span class="spacer">',
		'after_title' => '</span></h3><div class="inside">'
	));
	register_sidebar(array(
		'name' => 'Chiropractic',
		'id' => 'chiropractic',
		'description' => 'Chiropractic page sidebar',
		'before_widget' => '<div class="block %1$s %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="title"><span class="spacer">',
		'after_title' => '</span></h3><div class="inside">'
	));
}
add_action( 'widgets_init', 'napwc_sidebars' );