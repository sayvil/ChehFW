<div id="filters" class="sixteen columns">
<?php	$portfolio_filters = get_terms('portfolio_filter');
		if($portfolio_filters): ?>
			<h3 class="alignleft"><?php _e('Portfolio', THEME_NAME); ?></h3>
			<ul class="filters-list alignright clearfix">
				<li><a href="#" data-filter="*" class="active"><?php _e('All Projects', THEME_NAME); ?></a></li>	
				<?php foreach($portfolio_filters as $portfolio_filter): ?>
					<?php if(get_post_meta(get_the_ID(), 'energy_portfoliofilter', false)  && !in_array('0', get_post_meta(get_the_ID(), 'energy_portfoliofilter', false))): ?>
						<?php if(in_array($portfolio_filter->term_id, get_post_meta(get_the_ID(), 'energy_portfoliofilter', false))): ?>
							<li><a href="#" data-filter=".term-<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
						<?php endif; ?>
					<?php else: ?>
						<li><a href="#" data-filter=".term-<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
					<?php endif; ?>
				<?php endforeach; ?>

			</ul>
		<?php endif; ?>
</div>