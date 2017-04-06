<?php
get_header();
get_template_part('artist-category-header');

	$i = 0;
	if ( have_posts()):
		while ( have_posts() ): the_post();
		$i++;
	?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full col-md-6 col-sm-12'); ?>>
				<div class="post-content-wrap" style="min-height: 3rem;">
					<div class="post-content-wrap-thank"><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><span><?php echo $i.'、' ?><?php the_title(); ?><i class="glyphicon glyphicon-arrow-right"></i></span></a></div>
				</div>
			</div>
		<?php endwhile;
	endif;
	kadima_navigation();

get_template_part('artist-category-footer');
get_footer();
?>