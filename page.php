<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-12">
			<?php 
				while (have_posts()):
					the_post();
					get_template_part('content-single', get_post_format());
				endwhile;
			?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
<?php get_footer(); ?>
