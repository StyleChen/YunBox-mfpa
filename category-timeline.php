<?php get_header(); ?>
    <div class="container">
        <div class="row kadima_blog_wrapper">
            <div class="col-md-12">
				<h4>
					你当前的位置:
					<span>首页 / <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?></span>
				</h4>
                <aside class="col-md-3 aside">
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'second',
                            'menu_class' => 'aside-ul text-center',
                            'walker' => new kadima_nav_walker_second(),
                        )
                    );
                    ?>
                </aside>
                <section class="col-md-9 ">                    
                    <h3 class="text-center">
                        <?php if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } ?>
                    </h3>
                    <div class="timeBase">
					<?php
						if ( have_posts()):
							while ( have_posts() ): the_post(); ?>
                        <div class="timeBaseItem">
                            <p class="timeBaseItemP left">
                                <?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
                                <span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
                                <?php else : ?>
                                    <?php echo get_the_date("Y-m-d"); ?>
                                <?php endif; ?>
                            </p>
                            <div class="left timeBaseItemD">
                                <div class="timeBaseItemAddress">
                                    <?php if(get_the_tag_list() != '') { ?>
                                        <p class="kadima_tags"><?php the_tags( __('','kadima'), '', '<br />'); ?></p>
                                    <?php } ?>
                                        <?php if(has_post_thumbnail()):
                                            $img = array('class' => 'kadima_img_responsive'); ?>
                                            <?php the_post_thumbnail('blog_2c_thumb',$img); ?>
                                        <?php endif; ?>
                                </div>
                                <div class="timeBaseItemText">
                                    <h3 class="text-center" style="margin: 15px auto;"><?php the_title(); ?></h3>
                                    <p>
                                        <?php the_content( __( 'Read More' , 'kadima' ) );
                                        $defaults = array(
                                            'before'           => '<div class="kadima_blog_pagination"><div class="kadima_blog_pagi">' . __( 'Pages:','kadima'  ),
                                            'after'            => '</div></div>',
                                            'link_before'      => '',
                                            'link_after'       => '',
                                            'next_or_number'   => 'number',
                                            'separator'        => ' ',
                                            'nextpagelink'     => __( 'Next page'  ,'kadima' ),
                                            'previouspagelink' => __( 'Previous page' ,'kadima'),
                                            'pagelink'         => '%',
                                            'echo'             => 1
                                        );
                                        wp_link_pages( $defaults ); ?>
                                    </p>

                                </div>
                                <a href="<?php the_permalink(); ?>" class="right timeBaseItemTextA">详情内容 <i></i> </a>
                            </div>
                        </div>
                                    <?php endwhile;
                                endif;
                        kadima_navigation(); ?>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php get_footer(); ?>