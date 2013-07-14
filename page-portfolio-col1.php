<?php
/*
Template Name: Portfolio 1 Column
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'framework/inc/titlebar' ); ?>
	
<div id="page-wrap" class="container portfolio">

	<!-- Content -->
	<div id="content" class="sixteen columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>
	</div>
	<!-- End: content -->
	
<?php get_template_part('framework/inc/portfolio/folio-filter')?>

	<div id="portfolio-wrap">
	
		<?php
			global $wp_query;
			$portfolioitems = $options_data['text_portfolioitems_1']; // Get Items per Page Value
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$args = array(
				'post_type' 		=> 'portfolio',
				'posts_per_page' 	=> $portfolioitems,
				'post_status' 		=> 'publish',
				'orderby' 			=> 'date',
				'order' 			=> 'DESC',
				'paged' 			=> $paged
			);
			
			// Only pull from selected Filters if chosen
			$selectedfilters = get_post_meta(get_the_ID(), 'energy_portfoliofilter', false);
			if($selectedfilters && $selectedfilters[0] == 0) {
				unset($selectedfilters[0]);
			}
			if($selectedfilters){
				$args['tax_query'][] = array(
					'taxonomy' 	=> 'portfolio_filter',
					'field' 	=> 'ID',
					'terms' 	=> $selectedfilters
				);
			}
			
			$wp_query = new WP_Query($args);
			
			while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

			<?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>              	
			<div class="<?php if($terms) : foreach ($terms as $term) { echo 'term-'.$term->slug.' '; } endif; ?>portfolio-item-one sixteen columns">
				
				<?php // Define if Lightbox Link or Not
				
				$embedd = '';
				$link_video = '';
				$link_img = '';
				$overlay_link ='';
				$overlay_lightbox ='';
				$overlay_lightbox_img ='';

				if( get_post_meta( get_the_ID(), 'energy_portfolio-lightbox', true ) == "true") { 
					if( get_post_meta( get_the_ID(), 'energy_embed', true ) != "") {
							$overlay_lightbox = '<span class="overlay-lightbox"></span>';
							if ( get_post_meta( get_the_ID(), 'energy_source', true ) == 'youtube' ) {
								$link_video = '<a href="http://www.youtube.com/watch?v='.get_post_meta( get_the_ID(), 'energy_embed', true ).'" class="prettyPhoto" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
		    				} else if ( get_post_meta( get_the_ID(), 'energy_source', true ) == 'vimeo' ) {
		    					$link_video = '<a href="http://vimeo.com/'. get_post_meta( get_the_ID(), 'energy_embed', true ) .'" class="prettyPhoto" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
		    				} else if ( get_post_meta( get_the_ID(), 'energy_source', true ) == 'own' ) {
		    					$randomid = rand();
		    					$link_video = '<a href="#embedd-video-'.$randomid.'" class="prettyPhoto" title="'. get_the_title() .'" rel="prettyPhoto[portfolio]">';
		    					$embedd = '<div id="embedd-video-'.$randomid.'" class="embedd-video"><p>'. get_post_meta( get_the_ID(), 'energy_embed', true ) .'</p></div>';
							}
					}
		    	}
		    	if( has_post_thumbnail() && get_post_meta( get_the_ID(), 'energy_portfolio-lightbox', true ) == "true") {
						$overlay_lightbox_img = '<span class="overlay-lightbox-img"></span>';
						$link_img = '<a href="'. wp_get_attachment_url( get_post_thumbnail_id() ) .'" class="prettyPhoto" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
		    		}
					$overlay_link = '<span class="overlay-link"></span>';
					$link = '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
					
				///// ?>
			
				<?php if ( has_post_thumbnail()) { ?> 
					
					<h4 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
					
					<div class="portfolio-picwrap portfolio-page-item">
						<span class="portfolio-pic"><?php the_post_thumbnail('eight-columns'); ?>
				  			<div class="portfolio-overlay">
				  				<?php if($overlay_lightbox != '') echo $link_video.$overlay_lightbox.'</a>'; ?>
				  				<?php if($overlay_link != '') echo $link.$overlay_link.'</a>'; ?>
				  				<?php if($overlay_lightbox_img != '') echo $link_img.$overlay_lightbox_img.'</a>'; ?>
				  			</div>
				  		</span>
				  		<h4 class="portfolio-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4><div class="clear"></div>
					</div>
					<div class="portfolio-desc">
				  		<?php the_excerpt(); ?>
				  		<div class="portfolio-tags"><strong><?php _e('Tags', 'energy'); ?>: </strong><?php $taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_filter', '', ', ', '') ); echo $taxonomy; ?></div>
				  		<a href="<?php the_permalink() ?>" class="button"><?php _e('View Details', 'energy'); ?></a>
						<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-link', true ) != "") { ?>
						<a href="<?php echo get_post_meta( get_the_ID(), 'energy_portfolio-link', true ); ?>" target="_blank" class="button"><?php _e('Launch Project', 'energy'); ?></a>
						<?php } ?>	
				  	</div>
				  	<?php echo $embedd; ?>
				<?php } else {
					$no_img = wp_get_attachment_image_src( 1300, 'eight-columns', true );
					?>
					<h4 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
					
					<div class="portfolio-picwrap portfolio-page-item">
						<span class="portfolio-pic"><img src="<?php echo $no_img[0]; ?>" alt="" />
				  			<div class="portfolio-overlay">
				  				<?php if($overlay_lightbox != '') echo $link_video.$overlay_lightbox.'</a>'; ?>
				  				<?php if($overlay_link != '') echo $link.$overlay_link.'</a>'; ?>
				  				<?php if($overlay_lightbox_img != '') echo $link_img.$overlay_lightbox_img.'</a>'; ?>
				  			</div>
				  		</span>
				  		<h4 class="portfolio-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4><div class="clear"></div>
					</div>
					<div class="portfolio-desc">
				  		<?php the_excerpt(); ?>
				  		<div class="portfolio-tags"><strong><?php _e('Tags', 'energy'); ?>: </strong><?php $taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_filter', '', ', ', '') ); echo $taxonomy; ?></div>
				  		<a href="<?php the_permalink() ?>" class="button"><?php _e('View Details', 'energy'); ?></a>
						<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-link', true ) != "") { ?>
						<a href="<?php echo get_post_meta( get_the_ID(), 'energy_portfolio-link', true ); ?>" target="_blank" class="button"><?php _e('Launch Project', 'energy'); ?></a>
						<?php } ?>	
				  	</div>
				  	<?php echo $embedd; ?>
					<?php } ?>		
			</div> <!-- end of terms -->	
			
		<?php endwhile; ?>
		
	</div>
	
	<div class="sixteen columns">
		<?php get_template_part( 'framework/inc/nav' ); ?>
	</div>
	
</div>


<?php get_footer(); ?>