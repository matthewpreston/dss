<?php get_header(); ?>
<div class="container">
	<?php 
	the_post();
	get_template_part('content-single', get_post_format());
	// TODO: See if adding a commenting system is necessary; would need to block from bots
	/*
	if (comments_open() || get_comments_number()):
	  comments_template();
	endif;
	*/
	?>
	<img class="blog-post-epilogue" src="<?php echo get_bloginfo('template_directory');?>/img/Tooth Framework Black.svg"></div>
</div>
<?php get_footer(); ?>
