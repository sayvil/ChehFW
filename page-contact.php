<?php
/*
Template Name: Page Contact
*/
?>

<?php get_header(); ?>

	<?php get_template_part( 'framework/inc/titlebar' ); add_shortcode('map', 'energy_map');?>
	<?php if($options_data['select_map_layout'] == 'Wide') echo '<section id="map">'.do_shortcode('[map src="'.$options_data['contact_map'].'" width="100%" height="410px"]').'</section>';?>
	<div id="page-wrap" class="container">
		<?php if($options_data['select_map_layout'] == 'Boxed') echo do_shortcode('[map src="'.$options_data['contact_map'].'" width="100%" height="410px"]');?>
		<div id="content" class="sixteen columns">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
				<div class="entry">
	
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
				</div>
	
			</article>
			
			<?php if(!$options_data['check_disablecomments']) { ?>
				<?php comments_template(); ?>
			<?php } ?>
	
			<?php endwhile; endif; ?>
		</div> <!-- end content -->
	
	</div> <!-- end page-wrap -->
	
<?php get_footer(); ?>
