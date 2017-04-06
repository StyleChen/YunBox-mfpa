<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">
			<h4 class="breadcrumb">
				你当前的位置:
				<span>首页 / <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?></span>
			</h4>
			<aside class="col-md-3 aside">
				<?php
				wp_nav_menu( array(
						'theme_location' => 'three',
						'menu_class' => 'aside-ul text-center',
						'walker' => new kadima_nav_walker_second(),
					)
				);
				?>
			</aside>
			<section class="col-md-9">
				<!--<h3 class="text-center">
					<?php /*if(is_home()){echo "";}else{the_title();} */?>
				</h3>-->