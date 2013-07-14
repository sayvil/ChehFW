<div class="post clearfix">
	<h3 class="title"><?php the_title(); ?></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<?php if ( has_post_thumbnail() ) { ?>
	<div class="post-image">
		<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" title="<?php the_title(); ?>" rel="bookmark">
			<?php the_post_thumbnail('standard'); ?>
		</a>
	</div>
	<?php } ?>
	<div class="post-content">
		<div class="post-excerpt"><?php the_content(); ?></div>		
	</div>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
</div>

