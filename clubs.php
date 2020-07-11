<?php
/*
 * Template Name: Clubs
 */
?>
<?php get_header(); ?>
<div class="blog-post">
  <?php the_post(); ?>
  <div class="blog-post-content">
    <?php the_content(); ?>
  </div>
</div>
<?php get_footer(); ?>
<script>
	// When we hover over a club, highlight the div and turn on the carousel
	$(".wp-block-getwid-section").hover(
		function() { // Hover over
			var object = $(this).find(".wp-block-columns").first();
			object.css("background-image", "radial-gradient(#E2E2E269, #E2E2E200");
			object.find(".flickity-enabled").flickity("playPlayer");
		}, function() { // Hover off
			var object = $(this).find(".wp-block-columns").first();
			object.css("background-image", "none");
			object.find(".flickity-enabled").flickity("stopPlayer");
		}
	);
</script>