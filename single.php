<?php get_header(); 
//get_template_part('breadcrums'); ?>
    <style>
        h4 a,h4 span{
            color:#34b6ea;
        }
        h4 a:after{
            display: inline-block;
        }
    </style>

    <?php
        $ggg = get_the_category();
        $par = get_category_parents($ggg[0]->cat_ID,false,',',true);
        $navM = '';
        $navT = '主页';
        if(strstr($par,'activity')){
            $navM = 'four';
            $navT = '协会活动';
        }else if(strstr($par,'painter')){
            $navM = 'three';
            $navT = '画家简介';
        }else if(strstr($par,'timebase')){
            $navM = 'second';
            $navT = '';
        }else if(strstr($par,'artists')){
            $navM = 'three';
            $navT = '';
        }else if(strstr($par,'artist')){
            $navM = 'three';
            $navT = '';
        }else if(strstr($par,'timeline')){
            $navM = 'second';
            $navT = '';
        }else{
            $navM = 'primary';
        };
    ?>
<div class="container">	
	<div class="row kadima_blog_wrapper">
		<h4 class="breadcrumb">
			你当前的位置:
			<span>首页 / <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?></span>
		</h4>
        <aside class="col-md-3 aside">
            <<!--div class="">
                <h3 class="h3-title text-center"><?php /*echo $navT */?></h3>
            </div>-->
            <?php
				$ggg = get_the_category();
				$par = get_category_parents($ggg[0]->cat_ID,false,',',true);
				$navM = '';
				$navT = '主页';
				if(strstr($par,'activity')){
					$navM = 'four';
					$navT = '协会活动';
				}else if(strstr($par,'painter')){
					$navM = 'three';
					$navT = '画家简介';
				}else if(strstr($par,'timebase')){
					$navM = 'second';
					$navT = '';
				}else{
					$navM = 'primary';
				};
				wp_nav_menu( array(
						'theme_location' => $navM,
						'menu_class' => 'aside-ul text-center',
						'walker' => new kadima_nav_walker_second(),
					)
				);
            ?>
        </aside>
		<div class="col-md-9">			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full'); ?>>
					<div class="post-content-wrap">
						<?php if(has_post_thumbnail()):
							$img = array('class' => 'kadima_img_responsive'); ?>
							<div class="kadima_blog_thumb_wrapper_showcase">
								<div class="kadima_blog-img">
									<?php the_post_thumbnail('large',$img); ?>
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
							<h2 class="text-center"><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
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
			<?php
				endwhile;
				else :
					get_template_part('nocontent');
				endif;
				kadima_navigation_posts();
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>