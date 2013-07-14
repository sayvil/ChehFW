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
<script type="text/javascript">
	jQuery(window).load(function() {
		jQuery(".post-gallery").flexslider({
			animation: "slide",
			slideshow: true,
			smoothHeight : true,
			directionNav: true,
			controlNav: false,
		});
	});
</script>
<div class="post clearfix">
	<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', THEME_NAME), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<div class="post-gallery flexslider">
		<?php if ( $images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image' ))){ ?>
		<ul class="slides">
			<?php foreach( $images as $image ) :  
			$src = wp_get_attachment_image_src( $image->ID, 'sixteen-columns' ); ?>
				<li><a href="<?php echo $src[0]; ?>" rel='prettyPhoto[slides]' class='prettyPhoto'><?php echo wp_get_attachment_image($image->ID, $thumbnail_size); ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php } ?>
	</div>
	<div class="post-content">
		<div class="post-excerpt"><?php the_excerpt(); ?></div>
		<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
		<?php if($options_data['check_readmore'] != "0") { ?>
			<div class="post-more"><a href="<?php the_permalink(); ?>" class="more" title="<?php printf( esc_attr__('Permalink to %s', THEME_NAME), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php printf( esc_attr__('Learn more', THEME_NAME), the_title_attribute('echo=0') ); ?></a></div>
		<?php }?>
	</div>
	<div class="clear"></div>
</div>

