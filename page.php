<?php get_header(); ?>
<div class="container">
	<?php the_post(); ?>
	<div class="blog-post">
		<div class="blog-post-header">
			<h1 class="blog-post-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
			<div class="divider blog-post-divider"></div>
		</div>
		<div class="blog-post-content">
			<?php the_content(); ?>
		</div>
	</div>
	<img class="blog-post-epilogue" src="<?php echo get_bloginfo('template_directory');?>/img/Tooth Framework Black.svg">
</div>
<?php get_footer(); ?>