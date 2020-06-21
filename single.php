<?php get_header(); ?>
<div class="container">
	<?php the_post(); ?>
	<div class="blog-post-single">
		<div class="blog-post">
			<div class="blog-post-header">
				<h1 class="blog-post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
				<div class="divider blog-post-divider"></div>
				<p class="blog-post-meta">
					<strong><?php the_date(); ?></strong> by 
					<strong><?php the_author(); ?></strong><!-- • 
					<strong>
						<a href="<?php //comments_link(); ?>">
							<?php
							/*
							printf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number()));
							*/
							?>
						</a>
					</strong>-->
				</p>
			</div>
			<div class="blog-post-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<img class="blog-post-epilogue" src="<?php echo get_bloginfo('template_directory');?>/img/Tooth Framework Black.svg"></div>
	<?php
	// TODO: See if adding a commenting system is necessary; would need to block from bots
	/*
	if (comments_open() || get_comments_number()):
	  comments_template();
	endif;
	*/
	?>
</div>
<?php get_footer(); ?>
