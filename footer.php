	<footer class="blog-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 col-sm-offset-1 blog-uoft-logo">
					<img src="<?php echo get_bloginfo('template_directory');?>/img/UofT Logo.png">
				</div>
				<div class="col-sm-4 col-sm-offset-1 blog-links">
					<a href="<?php echo get_option('facebook')?>" title="DSS - Facebook"><img class="blog-icon" src="<?php echo get_bloginfo('template_directory');?>/img/facebook logo.svg"></a>
					<a href="<?php echo get_option('flickr')?>" title="DSS - Flickr"><img class="blog-icon" src="<?php echo get_bloginfo('template_directory');?>/img/flickr logo.svg"></a>
					<a href="<?php echo get_option('instagram')?>" title="DSS - Instagram"><img class="blog-icon" src="<?php echo get_bloginfo('template_directory');?>/img/instagram logo.svg"></a>
				</div>
				<div class="col-sm-2 col-sm-offset-1 blog-copyright">
					<a href="/about">DSS <?php echo date("Y"); ?></a>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?> 
</body>
</html>
