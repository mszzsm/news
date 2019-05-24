<?php
	// Add Shortcode
	function posts_by_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts( array( 'posts' => '5', ), $atts, 'recent-posts' );

	// Query
	$the_query = new WP_Query( array ( 'posts_per_page' => $atts['posts'] ) );
	
	// Posts
	?>
	

	<?php function output(){
				
			return $the_query;
		
		};
	?>

<?php
	// Reset post data
	wp_reset_postdata();
	
	// Return 
	return output();
}

// Declare shortcode name
add_shortcode( 'posts-by', 'posts_by_shortcode' );
?>