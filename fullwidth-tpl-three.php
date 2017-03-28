<?php //Template Name:Full-Width-Tpl-three Page
get_header(); 
 ?>



<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-12">
        <aside class="col-md-3">
            <h3 class="h3-title text-center"><?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?></h3>
            <?php
            wp_nav_menu( array(
                    'theme_location' => 'three',
                    'menu_class' => 'aside-ul text-center',
                    'walker' => new kadima_nav_walker_second(),
                )
            );
            ?>


        </aside>
        <?php get_template_part('post','page'); ?>
	</div>		
	</div>
</div>




    <script>
        jQuery(document).ready(function ($) {
            $('.aside-ul li').click(function () {
                $(this).parent().children('li').removeClass('aside-active');
                $(this).addClass('aside-active');
            });
            $('.aside-ul li.active').addClass('aside-active');

        })
    </script>


<?php get_footer(); ?>