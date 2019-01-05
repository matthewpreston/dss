<?php
/*
 * Template Name: Archives
 */
?>
<?php get_header(); ?>
<div class="container">
	<div class="blog-post-single">
		<div class="blog-post">
			<div class="blog-post-header">
				<!--<?php the_post(); ?>-->
				<h1 class="blog-post-title"><?php the_title(); ?></h1>
				<div class="divider blog-post-divider"></div>
			</div>
			<div class="search-bar">
				<?php get_search_form(); ?>
			</div>
			<div class="archives">
				<h2>Archives by Post Name:</h2>
				<ul>
					<?php wp_get_archives('type=postbypost'); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>