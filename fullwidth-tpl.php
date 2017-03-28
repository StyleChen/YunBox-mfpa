<?php //Template Name:Full-Width-Tpl Page
get_header(); 
 ?>



<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-12">
        <aside class="col-md-3 aside">
<!--            <h3 class="h3-title text-center">--><?php //if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?><!--</h3>-->
            <?php
            wp_nav_menu( array(
                    'theme_location' => 'second',
                    'menu_class' => 'aside-ul aside-margin',
                    'walker' => new kadima_nav_walker_second(),
                )
            );
            ?>

        </aside>
	    <?php get_template_part('post','page'); ?>
	</div>		
	</div>
</div>




<?php get_footer(); ?>