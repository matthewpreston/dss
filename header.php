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
	<?php wp_head(); ?>
</head>
<body>
	<div class="blog-masthead">
		<nav class="navbar navbar-expand-lg">
			<a href="<?php echo get_bloginfo('wpurl'); ?>" title="Home">
				<img class="blog-logo" src="<?php echo get_bloginfo('template_directory');?>/img/DSS Logo Navbar.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenuItems" aria-controls="navbarMenuItems" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenuItems">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbar-about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
						<div class="dropdown-menu" aria-labelledby="navbar-about">
							<a class="dropdown-item" href="/about">DSS Members</a>
							<a class="dropdown-item" href="/class-council">Class Council</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbar-activities" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activities</a>
						<div class="dropdown-menu" aria-labelledby="navbar-activities">
							<a class="dropdown-item" href="/events">Events Calendar</a>
							<a class="dropdown-item" href="/student-clubs">Student Clubs</a>
							<a class="dropdown-item" href="/intramural-sports">Intramural Sports</a>
							<a class="dropdown-item" href="/fundraisers">Charitable Recognition Initiative</a>
							<!-- Future implementation
							<a class="dropdown-item" href="#">Club Funding Forms</a>
							-->
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link dropdown-toggle" id="navbar-archive" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Archive</a>
						<div class="dropdown-menu" aria-labelledby="navbar-about">
							<a class="dropdown-item" href="/archive">Posts</a>
							<a class="dropdown-item" href="https://www.flickr.com/photos/154578217@N08/albums">Pictures</a>
							<a class="dropdown-item" href="/monthly-newsletter">Newsletter</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbar-opportunities" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opportunities</a>
						<div class="dropdown-menu" aria-labelledby="navbar-opportunities">
							<a class="dropdown-item" href="/externships">Externships</a>
							<!-- Future implementation
							<a class="dropdown-item" href="#">How to Guides</a>
							-->
						</div>
					</li>
			</div>
			<form id="searchform" class="searchform form-inline my-2 my-lg-0" role="search" method="get" action="<?php echo get_bloginfo('wpurl'); ?>">
				<input id="s" class="form-control mr-sm-2" type="text" name="s" placeholder="Search" aria-label="Search">
				<button id="searchsubmit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</nav>
	</div>
