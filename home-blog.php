<link rel="stylesheet" href="">
<section class="kadima_blog_area ">
<?php $wl_theme_options = kadima_get_options();
if($wl_theme_options['blog_title'] !='') { ?>
	<div class="container">
		<div class="row news">
			<div class="col-sm-12">
				<div class="kadima_heading_title section-header">
					<h3 class="left h3"><span><?php echo esc_attr($wl_theme_options['blog_title']); ?></span></h3>
                    <h3 class="right"><a href="#">更多 <span>》</span></a></h3>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

    <?php
    // 将以下category-name改成你的分类别名即可
   // var_dump(get_category_by_slug('news'));
    $args = array(
        'category' => 8,
        'numberposts' => -1
    );
    $audio_posts = get_posts( $args );


    ?>
    <div class="container">
	<div class="row" id="kadima_blog_section">
	<?php 	if ( have_posts()) :
                    $indexP = 0;
                foreach( $audio_posts as $post ) {
                    //var_dump($post);
                  //  echo $post->post_date.'<br/>';
                  //  echo $post->post_title.'<br/>';
                  //  echo $post->guid.'<br/>';
                    //var_dump($post);
//                    var_dump(get_post($post->ID));
                   // echo get_permalink($post->ID);
                    $indexP++;
                    if($indexP > 5){
                        continue;
                    }
			 ?>
			<div class="col-md-12 col-sm-12 scrollimation scale-in d2 pull-left">
			<div class="kadima_blog_thumb_wrapper">
                <div class="news">
                    <ul>
                        <li>
                            <a class="news-a" href="<?php echo get_permalink($post->ID); ?>">
                                <i class="left"></i>
                                <span class="left"><?php echo $post->post_title; ?></span>
                                <span class="right">
                                    <?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
                                        <?php echo get_the_date('F d ,Y'); ?>
                                    <?php else : ?>
                                        <?php echo get_the_date(); ?>
                                    <?php endif; ?>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
			</div>
			</div>
			<?php    }
			else : ?>
			<div class="col-md-4 col-sm-12 scrollimation scale-in d2 pull-left">
			<div class="kadima_blog_thumb_wrapper">
				<div class="kadima_blog_thumb_wrapper_showcase">
					<img  alt="Kadima" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/wall/img(11).jpg">
					<div class="kadima_blog_thumb_wrapper_showcase_overlay">
						<div class="kadima_blog_thumb_wrapper_showcase_overlay_inner ">
							<div class="kadima_blog_thumb_wrapper_showcase_icons">
								<a title="Kadima" href="#"><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
				<h2><a href="#"><?php _e('NO Post','kadima'); ?></a></h2>
				
				<div class="kadima_tags">
					<?php _e('Tags :&nbsp;','kadima'); ?>
					<a href="#"><?php _e('Bootstrap','kadima'); ?></a>
					<a href="#"><?php _e('HTML5','kadima'); ?></a>
				   
				</div>
				<p><?php _e('Add You Post To show post here..','kadima'); ?></p>
				<a href="#" class="kadima_blog_read_btn"><i class="fa fa-plus-circle"></i><?php _e('Read More','kadima'); ?></a>
				<div class="kadima_blog_thumb_footer">
					<ul class="kadima_blog_thumb_date">
						<li><i class="fa fa-user"></i><a href="#"><?php _e('By Admin','kadima'); ?></a></li>
						<li><i class="fa fa-clock-o"></i><?php _e(' November 9 2013','kadima'); ?></li>
						<li><i class="fa fa-comments-o"></i><a href="#"><?php _e('10','kadima'); ?></a></li>
					</ul>
				</div>
			</div>
			</div>
		<?php endif; ?>
		
	</div>
	<!--<div class="kadima_carousel-navi">
				<div id="port-next" class="kadima_carousel-prev" ><i class="fa fa-arrow-left"></i></div>
				<div id="port-prev" class="kadima_carousel-next" ><i class="fa fa-arrow-right"></i></div>
	</div>-->
	</div>
</section>