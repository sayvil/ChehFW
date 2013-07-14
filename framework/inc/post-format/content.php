<?php 
	global $options_data;
	global $blogtype;
	if ($blogtype == 'medium') {
		$thumbnail_size = 'blog-medium';
	}
	if ($blogtype == 'large') {
		$thumbnail_size = 'standard';
	}
?>

<div class="post clearfix">
	<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<?php if ( has_post_thumbnail() ) { ?>
	<div class="post-image">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
			<?php the_post_thumbnail($thumbnail_size); ?>
		</a>
	</div>
	<?php }?>
	<div class="post-content">
		<div class="post-excerpt"><?php the_excerpt(); ?></div>
		<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
		<?php if($options_data['check_readmore'] != "0") { ?>
			<div class="post-more"><a href="<?php the_permalink(); ?>" class="more" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php printf( esc_attr__('Learn more', 'energy'), the_title_attribute('echo=0') ); ?></a></div>
		<?php }?>
	</div>
	<div class="clear"></div>

</div>

