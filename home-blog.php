<section class="kadima_blog_area ">
<?php $theme_options = kadima_get_options();
if($theme_options['blog_title'] !='') { ?>
	<div class="container">
		<div class="row news">
			<div class="col-sm-12">
				<div class="kadima_heading_title section-header">
					<h3 class="left h3"><span><?php echo esc_attr($theme_options['blog_title']); ?></span></h3>
                    <h3 class="right"><a href="http://mfpa.hn1i2.yunclever.com/category/activity/news">更多 <span>》</span></a></h3>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
    <div class="container">
		<div class="row" id="kadima_blog_section">
	<?php
		$args = array(
			'cat' => 21,
			'posts_per_page' => 5,
		);
		query_posts($args);
		if ( have_posts()) : 
			while(have_posts()):
				the_post();
	?>
			<div class="col-md-12 col-sm-12 scrollimation scale-in d2 pull-left">
				<div class="kadima_blog_thumb_wrapper">
					<div class="news">
						<ul>
							<li>
								<a class="news-a" href="<?php the_permalink(); ?>">
									<i class="left"></i>
									<span class="left"><?php the_title(); ?></span>
									<span class="right">
										<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
											<?php the_date('F d ,Y'); ?>
										<?php else : ?>
											<?php the_date(); ?>
										<?php endif; ?>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<?php 
			endwhile;
		endif;
		?>		
		</div>
	</div>
</section>