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
	<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'energy'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta' ); ?></div>
	<div class="post-gallery flexslider">
		<?php if ( $images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image' ))){ ?>
		<ul class="slides">
			<?php foreach( $images as $image ) :  ?>
				<li><?php echo wp_get_attachment_link($image->ID, 'standard'); ?></li>
			<?php endforeach; ?>
		</ul>
		<?php } ?>
	</div>	
	<div class="post-content">
		<div class="post-excerpt"><?php the_content(); ?></div>		
	</div>
	<div class="post-meta"><?php get_template_part( 'framework/inc/meta-tags-categories' ); ?></div>
</div>

