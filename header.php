<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>
<body>
	<div class="blog-masthead">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<img class="blog-logo" src="<?php echo get_bloginfo('template_directory');?>/img/dss-logo.jpg">
				</div>
				<div class="col-sm-9">
					<nav class="blog-nav">
						<a class="blog-nav-item" href="<?php echo get_bloginfo('wpurl'); ?>">Home</a>
						<a class="blog-nav-item" href="#">About</a>
						<a class="blog-nav-item" href="#">Archive</a>
						<a class="blog-nav-item" href="#">Calendar</a>
						<a class="blog-nav-item" href="#">Clubs</a>
						<a class="blog-nav-item" href="#">Opportunities</a>
						<a class="blog-nav-item" href="#">Search</a>
					</nav>
				</div>
			</div>
		</div>
	</div>
