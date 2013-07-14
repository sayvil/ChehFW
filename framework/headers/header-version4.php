<?php global $options_data; ?>
<?php if ($options_data['check_topbar'] == 1 ) {?>
<div id="top-bar">
	<div class="container">
		<?php if (!empty($options_data['call_us'])) { ?>
		<div class="eight columns">
			<div class="call-us"><?php echo $options_data['call_us']; ?></div>
		</div>
		<?php } ?>
		<div class="eight columns pull-right">
			<div class="social-icons top-icons clearfix">
				<ul class="alignright no-margin">
					<?php get_template_part('framework/inc/social-items'); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<header id="header" class="header4 clearfix">
	<div class="container">
		<div class="eight columns">
			<div class="logo">
				<?php if (!empty($options_data['media_logo'])) { ?>
					<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $options_data['media_logo']; ?>" alt="<?php bloginfo('name'); ?>" class="logo_standard" /></a>
				<?php } else { ?>
					<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
				<?php } ?>
			</div>
		</div>
		<div class="eight columns">
			<form action="<?php echo home_url('/'); ?>" id="header-searchform2" method="get">
				<input type="text" id="header-s" name="s" value="" autocomplete="off" />
				<button type="submit" id="header-searchsubmit" class="button small"><i class="icon-search"></i></button>
			</form>
		</div>
	</div>
	<div id="navigation">
		<div class="container">
			<div class="sixteen columns">
				<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_id' => 'nav')); ?>
			</div>
		</div>
	</div>
</header>