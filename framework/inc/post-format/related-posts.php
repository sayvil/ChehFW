<script type="text/javascript">
	jQuery(window).load(function() {
		jQuery("#related-posts").flexslider({
			animation: "slide",
			slideshow: false,
			smoothHeight : false,
			directionNav: true,
			controlNav: false,
			itemWidth:214,
			itemMargin: 20,
			minItems: 1,
			maxItems: 3
		});
	});
</script>
<h3 class="title"><span><?php _e('Related Posts', 'energy'); ?></span></h3>
<div id="related-posts">
	
		<?php
		//for use in the loop, list 5 post titles related to first tag on current post
		$tags = wp_get_post_tags($post->ID);
		if ($tags) {
		?>
		  
		  <ul class="slides">
		<?php  $first_tag = $tags[0]->term_id;

		  $args=array(
		    'tag__in' => array($first_tag),
		    'post__not_in' => array($post->ID),
		    'showposts'=>-1
		   );
		  $my_query = new WP_Query($args);
		  if( $my_query->have_posts() ) {
		    while ($my_query->have_posts()) : $my_query->the_post(); ?>
		      <li class="four columns no-margin">
		      	<?php if ( has_post_thumbnail()) {
					$thumbnail= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'eight-columns' );
					
					echo '<div class="item-pic">';
					echo '<img src="'.$thumbnail[0].'" /></div>';
				} 	
				  	echo '<h5><a href="'. get_permalink() .'" title="'. get_the_title() .'">'. get_the_title() .'</a></h5>';	
				  	echo '<span class="date">';
				  	the_time('F j, Y');
				  	echo '</span>';
				  	echo strip_tags(limit_words(get_the_excerpt(), 12));
				?>
		      </li>
		      <?php
		    endwhile;
		    wp_reset_query();
		  }
		}
		?>
		 </ul>
</div>