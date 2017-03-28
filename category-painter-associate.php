<?php get_header(); ?>

    <div class="container">
        <div class="row kadima_blog_wrapper">
            <div class="col-md-12">
                <aside class="col-md-3 aside">
                        <!--<div class="">
                            <h3 class="h3-title text-center">画家简介</h3>
                        </div>-->
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'three',
                            'menu_class' => 'aside-ul text-center',
                            'walker' => new kadima_nav_walker_second(),
                        )
                    );
                    ?>
                </aside>

                <section class="col-md-9 ">
                    <h4 class="text-center">
                        你当前的位置:
                        <span>首页</span>
                        —
                        <span>画家简介</span>
                        <?php if(!is_home()){echo "—"; } ?>
                        <span><?php if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } ?></span>
                    </h4>
                    <h3 class="text-center">
                        <?php if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } ?>
                    </h3>
                    <?php $wl_theme_options = kadima_get_options(); ?>
                    <div class="kadima_project_section art">
                        <div id="kadima_portfolio_section_link" class="kadima_photo_gallery flex text-center">
                            <?php for($i=1 ; $i<=7; $i++) { ?>
                            <?php if($wl_theme_options['port_img_'.$i] !='') { ?>
                                    <a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>">
                                        <dl>
                                            <dt><img class="img-responsive" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>"></dt>
                                            <dd><h4 class="left">[ <?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?> ]</h4><h4 class="right"><?php echo esc_attr($wl_theme_options['port_description_'.$i]); ?></h4></dd>
                                        </dl>
                                    </a>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /portfolio section -->

                </section>
            </div>
        </div>
    </div>

<?php get_footer(); ?>