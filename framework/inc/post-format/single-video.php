<div class="post clearfix">
	<h3 class="title"><?php the_title(); ?></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<div class="post-video">
		<?php echo get_post_meta($post->ID, '_format_video_embed', true); ?>
	</div>
	<div class="post-content">
		<div class="post-excerpt"><?php the_content(); ?></div>		
	</div>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
</div>

