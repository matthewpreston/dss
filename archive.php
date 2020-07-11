<?php
/*
 * Template Name: Archives
 */
?>
<?php get_header(); ?>
<div class="container">
	<div class="blog-post">
    <?php the_post(); ?>
		<div class="blog-post-header">
			<h1 class="blog-post-title"><?php the_title(); ?></h1>
			<div class="divider blog-post-divider"></div>
		</div>
    <div class="blog-post-content">
      <?php the_content(); ?>
    </div>
		<div class="archives">
			<h2>Archives by Post Name:</h2>
			<ul>
				<?php wp_get_archives('type=postbypost'); ?>
			</ul>
		</div>
    <div class="search-bar">
      <?php get_search_form(); ?>
    </div>
	</div>
</div>
<?php get_footer(); ?>