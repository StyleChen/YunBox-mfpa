<?php get_header(); ?>

    <div class="container">
        <div class="row kadima_blog_wrapper">
            <div class="col-md-12">
                <aside class="col-md-3 aside">
                    <!--<div class="">
                        <h3 class="h3-title text-center">协会活动</h3>
                    </div>-->
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'four',
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
                        <span>协会活动</span>
                        <?php if(!is_home()){echo "—"; } ?>
                        <span><?php if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } ?></span>
                    </h4>
                    <h3 class="text-center">
                        <?php if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } ?>
                    </h3>
                    <?php
                    if ( have_posts()):
                        while ( have_posts() ): the_post(); ?>

                            <div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full col-md-6 col-sm-12'); ?>>

                                <div class="post-content-wrap orange">
                                    <?php if(has_post_thumbnail()):
                                        $img = array('class' => 'kadima_img_responsive img-responsive'); ?>
                                        <div class="kadima_blog_thumb_wrapper_showcase">
                                            <div class="kadima_blog-img">
                                                <?php the_post_thumbnail('blog_2c_thumb',$img); ?>
                                            </div>
                                            <?php if (is_home()) : ?>
                                                <div class="kadima_blog_thumb_wrapper_showcase_overlay">
                                                    <div class="kadima_blog_thumb_wrapper_showcase_overlay_inner ">
                                                        <div class="kadima_blog_thumb_wrapper_showcase_icons">
                                                            <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="post-content-wrap-title"><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></div>
                                </div>
                            </div>

                        <?php endwhile;
                    endif;
                    kadima_navigation(); ?>
                </section>
            </div>
        </div>
    </div>

<?php get_footer(); ?>