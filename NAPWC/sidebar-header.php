<?php
/**
 * Widget area in the header? Yes.
 *
 * @package ProGo
 * @subpackage Business Pro
 * @since Business Pro 1.0
 */
?>

<div class="grid_4">

<?php
/* When we call the dynamic_sidebar() function, it'll spit out
 * the widgets for that widget area. If it instead returns false,
 * then the sidebar simply doesn't exist, so we'll hard-code in
 * some default sidebar stuff just in case.
 */
if ( ! dynamic_sidebar( 'header' ) ) :
?>
	<div style="text-align:right; font-size:12px; color:#6582a0; padding-top:20px; padding-bottom:15px;"><a style="color:#6582a0;" href="<?php echo site_url(); ?>/forms/">FORMS</a> | <a style="color:#6582a0;" href="<?php echo site_url(); ?>/contact-us/">CONTACT US</a></div> 
<div class="hblock support">
    <h3 class="title"><span class="spacer"><?php _e( 'Call Today:', 'progo' ); ?></span></h3>
    <div class="inside">
        <?php
		$options = get_option('progo_options');
		
		if($options['support_email']) {
			echo '<a href="mailto:'. esc_attr($options['support']) .'">email us</a>';
		} else {
			if ( isset( $options['support'] ) ) {
			echo esc_html($options['support']);
			} else {
				echo '(858) 555-1234';
			}
		}
		?>
    </div>
</div>
<?php endif; // end primary widget area ?>
</div>