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
                        while ( have_posts() ): the_post();
                             ?>
                            <div class="col-md-12 col-sm-12 scrollimation scale-in d2 pull-left">
                                <div class="news">
                                    <ul>
                                        <li>
                                            <a class="news-a" href="<?php the_permalink(); ?>">
                                                <i class="left"></i>
                                                <span class="left"><?php the_title(); ?></span>
                                                <span class="right">
                                    <?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
                                        <?php echo get_the_date('F d ,Y'); ?>
                                    <?php else : ?>
                                        <?php echo get_the_date(); ?>
                                    <?php endif; ?>
                                </span>
                                            </a>
                                        </li>
                                    </ul>
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