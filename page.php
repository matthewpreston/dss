<?php get_header(); ?>
<div class="container">
	<?php 
	the_post();
	get_template_part('content-single', get_post_format());
	?>
	<img class="blog-post-epilogue" src="<?php echo get_bloginfo('template_directory');?>/img/Tooth Framework Black.svg"></div>
</div>
<?php get_footer(); ?>