<?php $wl_theme_options = kadima_get_options(); ?>
<div class="hot container">
    
    <div class="section-header">
        <h3 class="left h3">
            <span><?php echo esc_attr($wl_theme_options['custom_title_1']); ?></span>
        </h3>
        <h3 class="right"><a href="#">更多 <span>》</span></a></h3>
    </div>
    <?php for($i=1;$i<=3;$i++){
        if(isset($wl_theme_options['custom_img_1_'.$i])){
        ?>
    <div class="">
        <div>
            <dl>
                <dt class="col-md-6 col-xs-12"><img class="img-responsive" src="<?php echo esc_url($wl_theme_options['custom_img_1_'.$i]); ?>" alt=""></dt>
                <dd class="col-md-6 col-xs-12">
                    <h3 class="text-center"><?php echo esc_attr($wl_theme_options['custom_title_1_'.$i]); ?></h3>
                    <p><?php echo esc_attr($wl_theme_options['custom_text_1_'.$i]); ?></p>
                </dd>
            </dl>
        </div>
    </div>
    <?php }} ?>
</div>