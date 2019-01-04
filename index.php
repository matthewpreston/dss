<?php get_header(); ?>
<div class="blog-welcome hidden">
	<div class="blog-welcome-tooth">
		<div class="blog-welcome-content">
			<h1 class="blog-welcome-text blog-welcome-maintext">Dental Students' Society</h1>
			<h2 class="blog-welcome-text blog-welcome-subtext">Welcomes You</h2>
			<div class="divider blog-welcome-divider"></div>
			<a class="button blog-welcome-button" href="#">Our Team</a>
		</div>
	</div>
</div>
<div class="blog-main hidden">
	<div class="blog-carousel-button blog-carousel-prev">
		<a href="#" data-target="#blog-carousel" role="button" data-slide="prev">
			<div class="blog-carousel-button-icon-wrapper flexbox-centered">
				<span class="blog-carousel-button-icon carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
			</div>
		</a>
	</div>
	<div class="blog-article">
		<div id="blog-carousel" class="carousel slide" data-ride="carousel" data-interval="0">
	  	<div class="carousel-inner">
				<?php
				$MAX_POSTS = 3;
				$post_num = 0;
				$have_posts = have_posts(); // have_posts() resets WP's 'The Loop' as side effect
				for (; $have_posts && $post_num < $MAX_POSTS; $have_posts = have_posts(), $post_num++):
				?>
					<div class="carousel-item">
						<?php
						the_post();
						get_template_part('content', get_post_format());
						?>
					</div>
				<?php endfor; ?>
			</div>
			<?php if ($have_posts && $post_num == $MAX_POSTS): ?>
				<div class="blog-see-more">
					<a class="button" href="#">More Posts</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="blog-carousel-button blog-carousel-next">
		<a href="#" data-target="#blog-carousel" role="button" data-slide="next">
			<div class="blog-carousel-button-icon-wrapper flexbox-centered">
				<span class="blog-carousel-button-icon carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
			</div>
		</a>
	</div>
</div>
<?php get_footer(); ?>
