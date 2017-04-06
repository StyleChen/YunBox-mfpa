<?php $theme_options = kadima_get_options(); ?>
<div class="hot container">
    <div class="section-header">
        <h3 class="left h3">
            <span><?php echo esc_attr($theme_options['custom_title_1']); ?></span>
        </h3>
        <h3 class="right"><a href="http://mfpa.hn1i2.yunclever.com/category/artists/artist-portfolio">更多 <span>》</span></a></h3>
    </div>
    <?php for($i=1;$i<=3;$i++){
        if(isset($theme_options['custom_img_1_'.$i])){
        ?>
    <div class="articles">
        <div>
            <dl>
				<a href="<?php echo esc_url($theme_options['custom_link_1_'.$i]); ?>" target="_blank">
					<dt class="col-md-6 col-xs-12"><img class="img-responsive" src="<?php echo esc_url($theme_options['custom_img_1_'.$i]); ?>" alt=""></dt>
					<dd class="col-md-6 col-xs-12">
						<h3 class="text-center"><?php echo esc_attr($theme_options['custom_title_1_'.$i]); ?></h3>
						<p><?php echo esc_attr($theme_options['custom_text_1_'.$i]); ?></p>
					</dd>
				</a>
            </dl>
        </div>
    </div>
    <?php }} ?>
</div>