<?php get_header(); ?>
    <div class="container">
        <div class="row kadima_blog_wrapper">
            <div class="col-md-12">			
				<h4>
					你当前的位置:
					<span>首页</span>
					—
					<span>画家简介</span>
					<?php if(!is_home()){echo "—"; } ?>
					<span><?php if(is_home()){echo "";}else{  echo single_cat_title( '', false ); } ?></span>
				</h4>
                <aside class="col-md-3 aside">
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
                    <?php
                    if ( have_posts()):
                        while ( have_posts() ): the_post();

                            get_template_part('post','content1'); ?>
                        <?php endwhile;
                    endif;
                    kadima_navigation(); ?>
                </section>
            </div>
        </div>
    </div>

<?php get_footer(); ?>