<div class="blog-post">
	<div class="blog-post-header">
		<h1 class="blog-post-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<div class="divider blog-post-divider"></div>
		<p class="blog-post-meta">
			<strong><?php the_date(); ?></strong> by 
			<strong><a href="#"><?php the_author(); ?></a></strong> • 
			<strong>
				<a href="<?php comments_link(); ?>">
					<?php
					printf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number()));
					?>
				</a>
			</strong>
		</p>
	</div>
	<div class="blog-post-content">
		<?php the_content(); ?>
	</div>
</div>