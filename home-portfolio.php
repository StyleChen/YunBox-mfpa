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
                        <dl>
                            <dt><img class="img-responsive" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>"></dt>
                            <dd><h4 class="left">[ <?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?> ]</h4><h4 class="right"><?php echo esc_attr($wl_theme_options['port_description_'.$i]); ?></h4></dd>
                        </dl>
				<?php } ?>
				<?php } ?>
			</div>
            <div id="product" class="hide">
                <div id="carousel-example-generic-1" class="carousel slide container" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php for($i=1 ; $i<=7; $i++) { ?>
                            <?php if($wl_theme_options['port_img_'.$i] !='') { ?>
                                <div class="item">
                                    <img class="img-responsive" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="...">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic-1" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic-1" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- colse-->
                    <div id="colse">X</div>
                </div>
            </div>
			</div>
						
		</div>
	</div>
<!-- /portfolio section -->