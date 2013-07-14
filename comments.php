<div id="comments">
	<?php
	
		if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
			die ('Please do not load this page directly. Thanks!');
	
		if ( post_password_required() ) { ?>
			<?php _e('This post is password protected. Enter the password to view comments.', 'energy'); ?>
		<?php
			return;
		}
	?>
	
	<?php if ( have_comments() ) : ?>
		
		
		<h3 id="comments" class="title"><span><?php comments_number(__('comments', 'energy'), __('<span>1</span> comment', 'energy'), __('<span>%</span> comments', 'energy') );?></span></h3>
	
		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>
	
		<ol class="commentlist clearfix">
			 <?php wp_list_comments(array('callback' => 'energy_comment' )); ?>
		</ol>
	
		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<?php paginate_comments_links(); ?> 
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>
		
	 <?php else : // this is displayed if there are no comments so far ?>
	
		<?php if ( comments_open() ) : ?>
			<!-- If comments are open, but there are no comments. -->
	
		 <?php else : // comments are closed ?>
			<p class="hidden"><?php _e('Comments are closed.', 'energy'); ?></p>
	
		<?php endif; ?>
		
	<?php endif; ?>
		
		
<?php if ( comments_open() ) : ?>

	<?php
	
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		//Custom Fields
		$fields =  array(
			'author'=> '<div id="respond-inputs" class="clearfix"><p><label for="author">' . __('Name (required)', 'energy') . '</label><input id="author" name="author" type="text" value="" size="30"' . $aria_req . ' /></p>',
			
			'email' => '<p><label for="email">' . __('E-Mail (required)', 'energy') . '</label><input id="email" name="email" type="text" value="" size="30"' . $aria_req . ' /></p>',
			
			'url' 	=> '<p><label for="url">' . __('Website', 'energy') . '</label><input id="url" name="url" type="text" value="" size="30" /></p></div>',
		);

		//Comment Form Args
        $comments_args = array(
			'fields' => $fields,
			'title_reply'=>'<h3 class="title"><span>'. __('Leave A Comment', 'energy') .'</span></h4>',
			'comment_field' => '<div id="respond-textarea"><p><label for="comment">' . __('Comment', 'energy') . '</label><textarea id="comment" name="comment" aria-required="true" cols="58" rows="10" tabindex="4"></textarea></p></div>',
			'comment_notes_after' => '',
			'label_submit' => __('Post comment','energy')
		);
		
		// Show Comment Form
		comment_form($comments_args); 
	?>


<?php endif; // if you delete this the sky will fall on your head ?>

</div>