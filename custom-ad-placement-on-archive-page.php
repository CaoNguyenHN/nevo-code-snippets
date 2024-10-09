<?php
// custom ad placement on archive page.
// $current_post is ad placement after post order.
add_action( 'nevo_after_article', 'nevo_custom_ad_placement_on_archive_page', 10, 1 );
function nevo_custom_ad_placement_on_archive_page( $current_post ) {
    if ( $current_post === 3 ) { // after 3rd post
		?>
		<article class="nevo-postads cv-col-12"><div class="cm-advertisement-content">
			<a href="#" class="single_ad_728x90" target="_blank" rel="nofollow">
				<img fetchpriority="high" decoding="async" src="https://domain.com/wp-content/uploads/2022/08/banner-home.jpg" width="820" height="90" alt="">
			</a>
		</div></article>
		<?php
	}
}