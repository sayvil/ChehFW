<?php global $options_data;?>
<?php if (!is_singular('portfolio')) { ?>
	<!-- Title Bar -->
	<?php if (get_post_meta( get_the_ID(), 'energy_revolutionslider', true ) == '0') { ?>
		
		<?php if ( has_post_thumbnail() && get_post_meta( get_the_ID(), 'energy_titlebar', true ) == 'featuredimage' ) { ?>
	
			<div id="alt-title" class="post-thumbnail" style="background-image: url( <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); echo $src[0]; ?> );">
				<div class="grid">
					<div class="container">
						<div class="nine columns">
							<h1><?php the_title(); ?></h1>
							<?php if ( get_post_meta( get_the_ID(), 'energy_featuredimage-breadcrumbs', true ) == true ) { ?>
							<div id="breadcrumbs" class="<?php if (get_post_meta( get_the_ID(), 'energy_subtitle', true )) { echo 'breadrcumbpadding'; } /* to align middle */ ?>">
								<?php energy_breadcrumbs(); ?>
							</div>
							<?php } else {?>
								<?php if (get_post_meta( get_the_ID(), 'energy_subtitle', true )) { echo '<h2>'.get_post_meta( get_the_ID(), 'energy_subtitle', true ).'</h2>'; } ?>
							<?php }?>
						</div>
						<?php if ($options_data['check_social_titlebar']) { ?>
						<div class="seven columns">
							<div class="social-icons top-icons clearfix">
								<ul class="alignright no-margin">
									<?php get_template_part('framework/inc/social-items'); ?>
								</ul>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } elseif (get_post_meta( get_the_ID(), 'energy_titlebar', true ) == 'notitlebar') { ?>
				<div id="no-title"></div>
		<?php } else { ?>
			<div id="title">
				<div class="inner">
					<div class="container">
						<div class="nine columns">
							<h1><?php the_title(); ?></h1>
							<?php if (get_post_meta( get_the_ID(), 'energy_featuredimage-breadcrumbs', true ) == true) { ?>
							<div id="breadcrumbs" class="<?php if (get_post_meta( get_the_ID(), 'energy_subtitle', true )) { echo 'breadrcumbpadding'; } /* to align middle */ ?>">
								<?php energy_breadcrumbs(); ?>
							</div>
						<?php } else {?>
							<?php if (get_post_meta( get_the_ID(), 'energy_subtitle', true )) { echo '<h2>'.get_post_meta( get_the_ID(), 'energy_subtitle', true ).'</h2>'; } ?>
						<?php }?>
						</div>
						<?php if ($options_data['check_social_titlebar']) { ?>
						<div class="seven columns">
							<div class="social-icons top-icons clearfix">
								<ul class="alignright no-margin">
									<?php get_template_part('framework/inc/social-items'); ?>
								</ul>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php } // end slidertype = noslider ?>

	<?php if (get_post_meta( get_the_ID(), 'energy_revolutionslider', true ) != '0') { ?>
	
		<?php if (class_exists('RevSlider')) { 
			$slider = new RevSlider();
			$response = $slider->importSliderFromPost();
			$sliderID = $response["sliderID"];
			if (!empty($sliderID)) {
				putRevSlider(get_post_meta( get_the_ID(), 'energy_revolutionslider', true )); 
			}
		}
	} /* end slidertype = revslider */ ?>
	<!-- End: Title Bar -->

<?php } else { ?>

	<?php if (get_post_meta( get_the_ID(), 'energy_titlebar', true ) == 'notitlebar') { ?>
		<div id="no-title"></div>
	<?php } else { ?>
		<div id="title">
				<div class="inner">
					<div class="container">
						<div class="nine columns">
							<h1><?php the_title(); ?></h1>
							<?php if (get_post_meta( get_the_ID(), 'energy_subtitle', true ) != '') { 
								echo '<h2>'.get_post_meta( get_the_ID(), 'energy_subtitle', true ).'</h2>';
						} else {?>
							<div id="breadcrumbs" class="<?php if (get_post_meta( get_the_ID(), 'energy_subtitle', true )) { echo 'breadrcumbpadding'; } /* to align middle */ ?>">
								<?php energy_breadcrumbs(); ?>
							</div>
						<?php }?>
						</div>
						<?php if ($options_data['check_social_titlebar']) { ?>
						<div class="seven columns">
							<div class="social-icons top-icons clearfix">
								<ul class="alignright no-margin">
									<?php get_template_part('framework/inc/social-items'); ?>
								</ul>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
	<?php } ?>
	<!-- End: Projects Title Bar -->
<?php } ?>