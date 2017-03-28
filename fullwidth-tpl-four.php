<?php //Template Name:Full-Width-Tpl-four Page
get_header(); 
 ?>



<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-12">
        <aside class="col-md-3 aside">
<!--            <h3 class="h3-title text-center">--><?php //if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?><!--</h3>-->
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
            <h4 class="text-center">
                你当前的位置:
                <span>首页</span>
                —
                <span><?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?></span>
                —
                <span><?php if(is_home()){echo "";}else{the_title();} ?></span>
            </h4>
            <h3 class="text-center">
                <?php if(is_home()){echo "";}else{the_title();} ?>
            </h3>

            <?php the_content( __( 'Read More' , 'kadima' ) ); ?>
        </section>
        <?php get_template_part('home','blog'); ?>
	</div>		
	</div>
</div>










    <script>
        jQuery(document).ready(function ($) {
            $('section .container').addClass('col-md-9');
            $('.news .section-header').addClass('hide');
        })
    </script>



































<?php get_footer(); ?>