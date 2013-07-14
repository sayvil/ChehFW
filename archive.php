<?php get_header(); ?>

<!-- Title Bar -->	
<?php get_template_part('framework/inc/titlebar-blog'); ?>
<!-- End: Title Bar -->

<?php 
// Get Blog Layout from Theme Options
if($options_data['select_bloglayout'] == 'Blog Medium') { 
	$blogclass = 'blog-medium';
	$blogtype = 'medium';
} else {
	$blogclass = 'blog-large';
	$blogtype = 'large';
}
?>

<div id="page-wrap" class="container">
	
	<div id="content" class="<?php echo $options_data['select_blogsidebar']; ?> twelve columns blog <?php echo $blogclass; ?>">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php get_template_part( 'framework/inc/post-format/content', get_post_format() ); ?>
	
		<?php endwhile; ?>
		
	
		<?php get_template_part( 'framework/inc/nav' ); ?>
	
		<?php else : ?>
	
			<h2><?php _e('Not Found', THEME_NAME) ?></h2>
	
		<?php endif; ?>
	
	</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
