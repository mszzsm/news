<?php
/*
Plugin Name: SMP Plugin
Plugin URI: system.smp
Description: This plugin created for internal using Sanden Manufacturing Poland.
Author: m.sztefanica
Author URI: http://srvsmp0025/employee/?task=employee&action=employeeCard&employee=m.sztefanica
Version: 0.0.1
Text Domain: aryo-activity-log
License: GPLv2 or later
*/
?> 

<?php
	//[recent-posts posts=”5″]
	// Add Shortcode
	function recent_posts_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts( array( 'posts' => '5', ), $atts, 'recent-posts' );

	// Query
	$the_query = new WP_Query( array ( 'posts_per_page' => $atts['posts'] ) );
	
	// Posts
	?>
		
			<?php
				$output .= '<div class="row">';

				while ( $the_query->have_posts() ) :
				$the_query->the_post();
				
				$output .= '<div class="col-3">';
				$output .= '<div class="card" style="width: 18rem;">';
				$output .= '<div class="card-body">';
				$output .= '<h3 class="card-title">'. get_the_title() . '</h3>';
				$output .= '<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>';
				$output .= '<a href="'.get_permalink() .'" class="btn btn-primary">czytaj więcej</a>';
				$output .= '</div>';
				$output .= '</div>';
				$output .= '</div>';

				get_permalink();
				endwhile;
				
				$output .= '</div>';
			?>


	<?php
	// Reset post data
	wp_reset_postdata();
	
	// Return code
	return $output;
}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' );

?>
