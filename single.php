<?php get_header(); ?>

<!-- Title Bar -->	
<?php get_template_part('framework/inc/titlebar-blog'); ?>
<!-- End: Title Bar -->

<div id="page-wrap" class="container">
	
	<div id="content" class="<?php echo $options_data['select_blogsidebar']; ?> twelve columns single">
	
		<div class="pad-right ">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php get_template_part( 'framework/inc/post-format/single', get_post_format() ); ?>
				
				<?php if($options_data['check_sharebox'] == true) { ?>
					<?php get_template_part( 'framework/inc/sharebox' ); ?>
				<?php } ?>
				
				<?php if($options_data['check_authorinfo'] == true) { ?>
			
				<div id="author-info" class="clearfix">
						<h3 class="title"><?php _e('Author', 'energy'); ?></h3>
					    <div class="author-image">
					    	<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?></a>
					    </div>   
					    <div class="author-bio">
					    	<h4><?php echo  get_the_author();?></h4>
					        <?php echo the_author_meta('description'); ?>
					    </div>
				</div>
				<?php } ?>
					
				<?php if($options_data['check_relatedposts'] == true) { 	
					get_template_part('framework/inc/post-format/related-posts');
				 } ?>
			
			<div class="comments"><?php comments_template(); ?></div>
			
			<div class="post-navigation">
				<div class="alignleft prev"><?php previous_post_link('%link', 'Previous Post', FALSE); ?></div>
				<div class="alignright next"><?php next_post_link('%link', 'Next Post', FALSE); ?> </div>
			</div>
				
			<?php endwhile; endif; ?>
		</div>
	
	</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
