<!-- portfolio section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_project_section art">
<?php if($wl_theme_options['port_heading'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="kadima_heading_title section-header">

                        <h3 class="left h3">
                            <span><?php echo esc_attr($wl_theme_options['port_heading']); ?></span>
                        </h3>
                        <h3 class="right"><a href="#">更多 <span>》</span></a></h3>

				</div>
			</div>
		</div>
	</div>
<?php } ?>	
<div class="container">
		<div class="row" >
			<div id="kadima_portfolio_section" class="kadima_photo_gallery flex text-center">
				<?php for($i=1 ; $i<=7; $i++) { ?>
				<?php if($wl_theme_options['port_img_'.$i] !='') { ?>
				<!--<div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-right d1">
					<div class="img-wrapper">
					
						<div class="kadima_home_portfolio_showcase">
							<img class="kadima_img_responsive" alt="<?php /*the_title_attribute(); */?>" src="<?php /*echo esc_url($wl_theme_options['port_img_'.$i]); */?>">
							<div class="kadima_home_portfolio_showcase_overlay">
								<div class="kadima_home_portfolio_showcase_overlay_inner ">
									<div class="kadima_home_portfolio_showcase_icons">
										<a title="<?php /*echo esc_attr($wl_theme_options['port_title_'.$i]); */?>" href="<?php /*echo esc_url($wl_theme_options['port_link_'.$i]); */?>"><i class="fa fa-link"></i></a>
										<a class="photobox_a" href="<?php /*echo esc_url($wl_theme_options['port_img_'.$i]); */?>"><i class="fa fa-search-plus"></i><img src="<?php /*echo esc_url($wl_theme_options['port_img_'.$i]); */?>" alt="<?php /*echo esc_attr($wl_theme_options['port_title_'.$i]); */?>" style="display:none !important;visibility:hidden"></a>
									</div>
								</div>
							</div>
						</div>
					
					<?php /*if($wl_theme_options['port_title_'.$i] !='') { */?>
					<div class="kadima_home_portfolio_caption">
					<h3><a href="<?php /*echo esc_url($wl_theme_options['port_link_'.$i]); */?>"><?php /*echo esc_attr($wl_theme_options['port_title_'.$i]); */?></a></h3>
					</div>
					<?php /*} */?>
					</div>
				</div>-->
                        <dl>
                            <dt><img class="img-responsive" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>"></dt>
                            <dd><h4 class="left">[ <?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?> ]</h4><h4 class="right"><?php echo esc_attr($wl_theme_options['port_description_'.$i]); ?></h4></dd>
                        </dl>

				<?php } ?>
				<?php } ?>
			</div>
			</div>
						
		</div>
	</div>
<!-- /portfolio section -->