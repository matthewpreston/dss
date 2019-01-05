<?php get_header(); ?>
<div class="container">
	<?php 
	the_post();
	get_template_part('content-single', get_post_format());
	?>
</div>
<?php get_footer(); ?>