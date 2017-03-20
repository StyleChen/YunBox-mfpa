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

<?php /* if(has_post_thumbnail()):
		$defalt_arg = array('class' => "kadima_img_responsive"); 
		*/?>
		<!--<div class="kadima_blog_thumb_wrapper_showcase">
			<div class="kadima_blog-img">
			<?php /*the_post_thumbnail('wl_page_thumb',$defalt_arg); */?>
			</div>						
		</div>-->
<!--		--><?php //endif; ?>
		<!--<div class="kadima_blog_post_content">
			<?php /*the_content( __( 'Read More' , 'kadima' ) ); */?>
		</div>-->
<!--</div>
<div class="push-right">
	<hr class="blog-sep header-sep">
</div>-->

<?php //comments_template( '', true ); ?>
<?php
endwhile;
endif; ?>