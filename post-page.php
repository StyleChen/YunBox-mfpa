<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<div class="kadima_blog_full">
    <section class="col-md-9">
        <h3 class="text-center">
            <?php if(is_home()){echo "";}else{the_title();} ?>
        </h3>
		<?php the_content( __( 'Read More' , 'kadima' ) ); ?>
    </section> 
</div>
<?php
endwhile;
endif; ?>

