<?php
add_filter( 'nevo_inside_post_meta_item_output', 'my_custom_post_meta_prefix', 12, 2 );

/**
 * Custom post meta output for child theme.
 *
 * @param string $output The existing output.
 * @param string $item The item to target.
 */
function my_custom_post_meta_prefix( $output, $item ) {
    
    $disable = nevo_get_post_setting('display_post_avatar' );
	
	if ( 'author' === $item && ! $disable ) {
		$output = __( '	By', 'nevo' ) . ' '; // change the text or icon you want here
	}
	
	if ( 'date' === $item ) {
		$output = '<span class="nevo-icon">'. nevo_get_svg_icon( 'ui', 'bi-clock', '', 14 ) .'</span> '; // change the text or icon you want here
	}

	if ( 'tags' === $item ) {
		$output = __( 'Tags : ', 'nevo' ) . ' ';  // change the text or icon you want here . for example replace "Tags" with "tag"
	}

	if ( 'comment' === $item ) {
		$output = '<span class="nevo-icon">'. nevo_get_svg_icon( 'ui', 'bi-chat', '', 14 ) .'</span> '; // change the text or icon you want here
	}
	if ( 'views' === $item ) {
		$output = '<span class="nevo-icon">'. nevo_get_svg_icon( 'ui', 'bi-eye-fill', '', 20 ) .'</span> '; // change the text or icon you want here
	}

	return $output;
}
