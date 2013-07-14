<script type="text/javascript">
	jQuery(document).ready(function($) {
		$("#flexslider-portfolio").flexslider({
			animation: "slide",
			slideshow: false,
			smoothHeight : true,
			directionNav: true,
			controlNav: false,
			itemWidth: 220,
			itemMargin: 20,
			minItems: 2,
    		maxItems: 4
		});
	});
</script>
<div id="portfolio-related-post">
				
				<h3 class="title"><span><?php _e('Related Projects', THEME_NAME); ?></span></h3>
			
				<?php
				$terms = get_the_terms( $post->ID , 'portfolio_filter', 'string');
				$term_ids = array_values( wp_list_pluck( $terms,'term_id' ) );
				$second_query = new WP_Query( array(
				      'post_type' => 'portfolio',
				      'tax_query' => array(
				                    array(
				                        'taxonomy' => 'portfolio_filter',
				                        'field' => 'id',
				                        'terms' => $term_ids,
				                        'operator'=> 'IN' //Or 'AND' or 'NOT IN'
				                     )),
				      'posts_per_page' => -1,
				      'ignore_sticky_posts' => 1,
				      'orderby' => 'date',  // 'rand' for random order
				      'post__not_in'=>array($post->ID)
				   ) );
				?>
				<div id="flexslider-portfolio" class="sixteen columns">
				<ul class="slides">
				<?php	//Loop through posts and display...
						if($second_query->have_posts()) {
							while ($second_query->have_posts() ) : $second_query->the_post(); ?>
							
							      <li><div class="portfolio-item no-margin">
						
									    <?php // Define if Lightbox Link or Not
										
										if ( has_post_thumbnail()) {
									
											$portfolio_thumbnail= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'eight-columns' );
											$terms = wp_get_object_terms($post->ID, 'portfolio_filter');
											
											echo '<div class="portfolio-pic">';
											echo '<img src="'.$portfolio_thumbnail[0].'" /></div>';
										  	echo '<div class="portfolio-title">';
										  	echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'"><h4>'. get_the_title() .'</h4></a>';	
										  		if ( $terms && !is_wp_error( $terms ) ) {
										  			echo '<span>';
							                        $out1 = array();
							                        foreach ( $terms as $term )
							                            $out1[] = ' '.$term->name;
							                        echo join( ' / ', $out1 );
							                        echo '</span>';
							                    }
										  	echo '</div>';
										  	
									} else { 
										$no_img = wp_get_attachment_image_src( 1300, 'eight-columns', true );
										echo '<div class="portfolio-pic">';
											echo '<img src="'.$no_img[0].'" /></div>';
										  	echo '<div class="portfolio-title">';
										  	echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'"><h4>'. get_the_title() .'</h4></a>';	
										  		if ( $terms && !is_wp_error( $terms ) ) {
										  			echo '<span>';
							                        $out1 = array();
							                        foreach ( $terms as $term )
							                            $out1[] = ' '.$term->name;
							                        echo join( ' / ', $out1 );
							                        echo '</span>';
							                    }
										  	echo '</div>';
									 } ?>
							      </div></li>
							   <?php endwhile; wp_reset_query(); ?>
						<?php } ?>
					</ul>
				</div>
				
			</div> <!-- end of portfolio-related-posts -->