<?php get_header(); ?>
<div class="blog-header">
	<div class="blog-header-welcome">
		<h1 class="blog-header-text blog-header-maintext">Dental Students Society</h3>
		<h2 class="blog-header-text blog-header-subtext">Welcomes You</h4>
		<div class="divider blog-header-divider"></div>
		<a class="button blog-header-button" href="#">Our Team</a>
	</div>													
</div>
<div class="container">
	<div id="blog-carousel" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
			<?php	while (have_posts()): ?>
				<div class="carousel-item">
					<?php
					the_post();
					get_template_part('content', get_post_format());
					?>
				</div>
			<?php endwhile; ?>
		</div>
		<a class="carousel-control-prev" href="#blog-carousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#blog-carousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<?php get_footer(); ?>
