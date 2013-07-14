<?php 
/**
 * Template Name: Medium Blog Page
 */
get_header(); ?>

<!-- Title Bar -->	
<?php get_template_part('framework/inc/titlebar-blog'); ?>
<!-- End: Title Bar -->

<?php 
// Get Blog Layout from Theme Options
$blogtype = 'medium';
?>

<div id="page-wrap" class="container">
	
	<div id="content" class="<?php echo $options_data['select_blogsidebar']; ?> twelve columns blog blog-medium">
		<div class="pad-right ">
			<?php
			$temp = $wp_query;
			$wp_query= null;
			$wp_query = new WP_Query();
			$wp_query->query('post_type=post&showposts=5&paged='.$paged);
			 if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php get_template_part( 'framework/inc/post-format/content', get_post_format() ); ?>
		
			<?php endwhile; ?>
			
			<?php get_template_part( 'framework/inc/nav' ); ?>
		
			<?php else : ?>
		
				<h2><?php _e('Not Found', THEME_NAME) ?></h2>
		
			<?php endif; ?>
			<?php $wp_query = null; $wp_query = $temp;?>
		</div>
	</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
