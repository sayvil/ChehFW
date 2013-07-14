<?php get_header(); ?>

<?php get_template_part( 'framework/inc/titlebar' ); ?>
	
<div id="page-wrap" class="container portfolio-detail">
	
	<div id="content">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php if ( get_post_meta( get_the_ID(), 'energy_portfolio-detaillayout', true ) == "wide" ) {
			get_template_part( 'framework/inc/portfolio/wide' );
		} else {
			get_template_part( 'framework/inc/portfolio/sidebyside' );
		}
		?>
		<div class="clear"></div>
		<?php if( get_post_meta( get_the_ID(), 'energy_portfolio-relatedposts', true ) == 1 ) { 
		// Show related Posts Projects specific 
			get_template_part( 'framework/inc/portfolio/related-posts' );?>
			<div class="clear"></div>
		<?php } //end related specific ?>
		
		<div class="sixteen columns portfolio-comments"><?php comments_template(); ?></div>
	
		<?php endwhile; endif; ?>
	
	</div> <!-- end of content -->
	
</div> <!-- end of page-wrap -->

<?php get_footer(); ?>