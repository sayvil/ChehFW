<div class="post clearfix">
	<h3 class="title"><?php the_title(); ?></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<div class="post-content">
		<div class="post-quote">
			<div class="quote-text"><?php the_content(); ?>
			<span class="quote-source"><a href="<?php echo get_post_meta($post->ID, '_format_quote_source_url', true); ?>" target="_blank">- <?php echo get_post_meta($post->ID, '_format_quote_source_name', true); ?></a></span>
			</div>
		</div>
		<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
	</div>

</div>

