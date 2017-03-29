<?php get_header(); ?>
    <div class="container">
        <div class="row kadima_blog_wrapper">
            <div class="col-md-12">
				<h4 class="breadcrumb">
					你当前的位置:
					<span>首页 / <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?></span>
				</h4>
                <aside class="col-md-3 aside">                       
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'four',
                            'menu_class' => 'aside-ul text-center',
                            'walker' => new kadima_nav_walker_second(),
                        )
                    );
                    ?>
                </aside>
                <section class="col-md-9">
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