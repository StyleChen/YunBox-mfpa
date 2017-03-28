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
               <!-- <section class="col-md-9 ">
                    <h4 class="text-center">
                        你当前的位置:
                        <span>首页</span>
                        —
                        <span>画家简介</span>
                        <?php /*if(!is_home()){echo "—"; } */?>
                        <span><?php /*if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } */?></span>
                    </h4>
                    <h3 class="text-center">
                        <?php /*if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } */?>
                    </h3>
                    <?php
/*                    if ( have_posts()):
                        while ( have_posts() ): the_post();

                            get_template_part('post','content1'); */?>
                        <?php /*endwhile;
                    endif;
                    kadima_navigation(); */?>
                </section>-->
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
                    <?php
                    $i = 0;
                    if ( have_posts()):
                        while ( have_posts() ): the_post();
                        $i++;
                    ?>

                            <div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full col-md-6 col-sm-12'); ?>>

                                <div class="post-content-wrap" style="min-height: 3rem;">
                                    <div class="post-content-wrap-thank"><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><span><?php echo $i.'、' ?><?php the_title(); ?><i class="glyphicon glyphicon-arrow-right"></i></span></a></div>
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