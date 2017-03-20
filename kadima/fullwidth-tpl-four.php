<?php //Template Name:Full-Width-Tpl-four Page
get_header(); 
 ?>



<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-12">
        <aside class="col-md-3">
            <h3 class="h3-title text-center"><?php if(is_home()){echo "";}else{the_title();} ?></h3>
            <?php
            wp_nav_menu( array(
                    'theme_location' => 'four',
                    'menu_class' => 'aside-ul text-center',
                    'walker' => new kadima_nav_walker_second(),
                )
            );
            ?>
            <!--<ul class="aside-ul text-center">
                <li class="aside-active"><a href="#"><i></i>协会简介</a></li>
                <li><a href="#"><i></i>协会历史</a></li>
                <li><a href="#"><i></i>组织结构</a></li>
            </ul>-->
            <h3 class="text-center">商品推荐</h3>
            <dl class="text-center">
                <dt><img src="../../wp-content/themes/kadima/images/old1.jpg" alt=""></dt>
                <dd><p>￥500</p><p>国画</p></dd>
            </dl>
            <dl class="text-center">
                <dt><img src="../../wp-content/themes/kadima/images/old1.jpg" alt=""></dt>
                <dd><p>￥500</p><p>国画</p></dd>
            </dl>

        </aside>
	    <?php get_template_part('post','page'); ?>
	</div>		
	</div>
</div>











    <script>
        jQuery.ready(function ($) {
            $('.aside-ul li').click(function () {
                $(this).parent().children('li').removeClass('aside-active');
                $(this).addClass('aside-active');
            });
        })
    </script>



































<?php get_footer(); ?>