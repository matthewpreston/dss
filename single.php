<?php get_header(); ?>
<div class="container">
	<?php 
	the_post();
	get_template_part('content-single', get_post_format());
	if (comments_open() || get_comments_number()):
	  comments_template();
	endif;
	?>
</div>
<?php get_footer(); ?>
