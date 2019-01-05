<?php get_header(); ?>
<div class="container">
	<div class="blog-post-single">
		<div class="blog-post">
			<?php if(have_posts()): ?>
				<div class="blog-post-header">
					<h1 class="blog-post-title"><?php printf(__("Search Results for: %s", "dss"), get_search_query()); ?></h1>
					<div class="divider blog-post-divider"></div>
				</div>
				<?php
				while (have_posts()):
					the_post();
					get_template_part('content', get_post_format());
				endwhile;
				?>
			<?php else: // No content found	?>
				<p>Sorry, no search results were found.</p>
			<?php	endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>