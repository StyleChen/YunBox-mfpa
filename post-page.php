<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<div class="kadima_blog_full">


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


</div>
<?php //comments_template( '', true ); ?>
<?php
endwhile;
endif; ?>

