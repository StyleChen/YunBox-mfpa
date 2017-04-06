<?php get_template_part('headerShop'); ?>

    <div class="container">
        <div class="row kadima_blog_wrapper">
            <div class="col-md-12">
                <section class="col-md-12 ">
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