<?php


/* add_action( 'after_setup_theme', 'stargazer_bbpress_theme_setup', 11 );

function stargazer_bbpress_theme_setup() {

	add_filter( 'bbp_no_breadcrumb', '__return_true' );

} */

/* Uses the custom color set in Stargazer within BBPress */
add_action( 'wp_head', 'bbpress_custom_color' ); 

    function bbpress_custom_color() {
        
    	$style = '';
    	$hex = get_theme_mod( 'color_primary', '' );
    	$rgb = join( ', ', hybrid_hex_to_rgb( $hex ) );
    	$style .= "li.bbp-topic-title .font-headlines a.bbp-topic-permalink:hover, a.bbp-forum-title.entry-title:hover { color: #{$hex}; } ";
    	$style .= "{ background-color: rgba( {$rgb}, 0.8 ); } ";
    	$style .= "#bbpress-forums li.bbp-header, #bbpress-forums fieldset.bbp-form legend { background-color: #{$hex}; }";
    	$style .= "#bbpress-forums li.bbp-footer { border-top-color: #{$hex}; } ";
    	$style = "\n" . '<style type="text/css" id="bbpress-custom-color">' . trim( $style ) . '</style>' . "\n";
    	echo $style;
}