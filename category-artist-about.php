<?php
get_header();
get_template_part('artist-category-header');

	if ( have_posts()):
		while ( have_posts() ): the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full col-md-6 col-sm-12'); ?>>

				<div class="post-content-wrap orange">
					<?php if(has_post_thumbnail()):
						$img = array('class' => 'kadima_img_responsive img-responsive'); ?>
						<div class="kadima_blog_thumb_wrapper_showcase">
							<div class="kadima_blog-img">
								<?php the_post_thumbnail('more',$img); ?>
							</div>
							<?php if (is_home()) : ?>
								<div class="kadima_blog_thumb_wrapper_showcase_overlay">
									<div class="kadima_blog_thumb_wrapper_showcase_overlay_inner ">
										<div class="kadima_blog_thumb_wrapper_showcase_icons">
											<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="post-content-wrap-title"><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></div>
				</div>
			</div>

		<?php endwhile;
	endif;
	kadima_navigation(); 
					
get_template_part('artist-category-footer');
get_footer();?>