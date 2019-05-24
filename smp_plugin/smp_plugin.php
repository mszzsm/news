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
<?php require('templates/post_grid.php'); ?>
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
	<?php require('templates/searchbox.php'); ?>
		<?php
			echo get_the_category_list(); 
		
			$output .= '<div class="row">';

			while ( $the_query->have_posts() ):
				
				
			/* grab the url for the full size featured image */
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

			/* link thumbnail to full size image for use with lightbox*/
			echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; 
					
				echo '</a>';
		
				$random = rand(200,300);
				$the_query->the_post();
			?> <script> var category = "<?php print_r($category[0]->term_id); ?>"; </script> <?php				
				$output .= '<div class="col-md-3">';
					$output .= '<div class="card bg-light border-primary mb-1" style="width: 18rem;  margin-top: 5px; margin-bottom: 5px;">';
						$output .= '<span class="badge badge-secondary">Category</span>';
						$output .= '<img src="'.esc_url($featured_img_url).'" class="img-cover card-img-top zoom">';
						
						$output .= '<div class="card-body" >';
							$output .= '<h5 class="card-title" style="min-height: 30px;">'. get_the_title() . '</h5>';
							$output .= '<p class="card-text" style="min-height: 5px;"><b class="text-dark">' . get_author_name() . '</b></p>';
							$output .= '<a href="'.get_permalink() .'" class="btn btn-outline-secondary">więcej...</a>';
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
	
	// Return 
	return $output;
}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' );
?>
