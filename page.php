<?php get_header(); 
get_template_part('breadcrumsd'); ?>
<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-8">
	<?php get_template_part('post','page'); ?>	
	</div>
	<?php get_sidebar(); ?>
	</div>
</div>	
<?php get_footer(); ?>