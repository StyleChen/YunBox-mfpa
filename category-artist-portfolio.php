<?php
get_header(); 
get_template_part('artist-category-header');
$theme_options = kadima_get_options(); ?>
	<div class="kadima_project_section art">
		<div id="kadima_portfolio_section_link" class="kadima_photo_gallery flex text-center">
			<?php for($i=1 ; $i<=7; $i++) { ?>
			<?php if($theme_options['port_img_'.$i] !='') { ?>
					<a href="<?php echo esc_url($theme_options['port_link_'.$i]); ?>">
						<dl>
							<dt><img class="img-responsive" src="<?php echo esc_url($theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($theme_options['port_title_'.$i]); ?>"></dt>
							<dd><h4 class="left">[ <?php echo esc_attr($theme_options['port_title_'.$i]); ?> ]</h4><h4 class="right"><?php echo esc_attr($theme_options['port_description_'.$i]); ?></h4></dd>
						</dl>
					</a>
			<?php } ?>
			<?php } ?>
		</div>
	</div>
<?php 
get_template_part('artist-category-footer');
get_footer();
?>