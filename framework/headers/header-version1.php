<?php global $options_data; ?>
<header id="header" class="clearfix">
	<div class="container">
		<div class="four columns">
			<div class="logo">
				<?php if (!empty($options_data['media_logo'])) { ?>
					<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $options_data['media_logo']; ?>" alt="<?php bloginfo('name'); ?>" class="logo_standard" /></a>
				<?php } else { ?>
					<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
				<?php } ?>
			</div>
		</div>
		<div id="navigation" class="twelve columns clearfix">
			<?php if ($options_data['check_searchform']) { ?>
				<form action="<?php echo home_url('/'); ?>" id="header-searchform" method="get">
					<input type="text" id="header-s" name="s" value="" autocomplete="off" />
					<input type="submit" id="header-searchsubmit" value="Search" />
				</form>
			<?php } ?>
			<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_id' => 'nav')); ?>
		</div>
	</div>
</header>S