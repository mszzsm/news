<?php
	//[recent-posts posts=”5″]
	// Add Shortcode
	function recent_posts_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts( array( 'posts' => '5', ), $atts, 'recent-posts' );

	// Query
	$the_query = new WP_Query( array ( 'posts_per_page' => $atts['posts'] ) );
	
	// Posts
	// 
	?>
		


	<?php
	// Reset post data
	wp_reset_postdata();
	
	// Return 
	return $output;
}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' );
?>