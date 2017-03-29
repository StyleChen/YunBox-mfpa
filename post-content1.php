<div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full'); ?> style="float:left;">
	<div class="post-content-wrap">
		<?php if(has_post_thumbnail()): 
		$img = array('class' => 'kadima_img_responsive'); ?>
		<div class="kadima_blog_thumb_wrapper_showcase">						
			<div class="kadima_blog-img">
			<?php the_post_thumbnail('blog_2c_thumb',$img); ?>						
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
		<div class="kadima_fuul_blog_detail_padding">
		<?php the_content( __( 'Read More' , 'kadima' ) ); 
		$defaults = array(
              'before'           => '<div class="kadima_blog_pagination"><div class="kadima_blog_pagi">' . __( 'Pages:','kadima'  ),
              'after'            => '</div></div>',
	          'link_before'      => '',
	          'link_after'       => '',
	          'next_or_number'   => 'number',
	          'separator'        => ' ',
	          'nextpagelink'     => __( 'Next page'  ,'kadima' ),
	          'previouspagelink' => __( 'Previous page' ,'kadima'),
	          'pagelink'         => '%',
	          'echo'             => 1
	          );
	          wp_link_pages( $defaults ); ?>
		</div>
	</div>
</div>	
