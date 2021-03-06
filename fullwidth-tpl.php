<?php //Template Name:Full-Width-Tpl Page
get_header(); 
 ?>
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">
			<h4 class="breadcrumb">
				你当前的位置:
				<span>首页 / <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?><?php if(is_home()){echo "";}else{the_title();} ?></span>
			</h4>
			<aside class="col-md-3 aside">
				<?php
				wp_nav_menu( array(
						'theme_location' => 'second',
						'menu_class' => 'aside-ul aside-margin',
						'walker' => new kadima_nav_walker_second(),
					)
				);
				?>
			</aside>
			<?php get_template_part('post','page'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>