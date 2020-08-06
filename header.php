<<<<<<< HEAD
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
		<?php wp_head(); ?>

	


		</head>
	<body>
		

		<body <?php body_class(); ?>>

			

			<nav class="navbar navbar-expand-lg navbar-light white fixed-top py-3" role="navigation">

			
				      <!-- Collapse -->
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

				<div class="col-3">
										
					<a class="navbar-brand" href="">
						<?php bloginfo('name'); ?>
					</a>

					</div>		
												
					<div class="col-6">
						<?php
							wp_nav_menu(
								array(
									'menu'            => 'Main',
									'theme_location'  => 'menu-1',
									'container'       =>  false,
									'container_id'    => 'navbarSupportedContent',
									'container_class' => 'collapse navbar-collapse justify-content-center',
									'menu_class'      => 'navbar-nav justify-content-center',
									'before'          => '<button class="btn btn-outline-white btn-sm" type="button">',
									'after'			  => '</button>',
										)
									  );						  
						?>
					</div>

					<div class="col-3 d-flex justify-content-end">
					<button type="button" class="btn btn-outline-primary" >Book Now!</button>
					</div>	

    </nav>
    <!--/.Navbar-->

=======
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
<!DOCTYPE html>
<html>
	<head>
        <?php wp_head(); ?>
        <title><?php wp_title(' | ',true,'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		</head>
	<body>
        <?php wp_footer(); ?>
		<div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
				
				<a href = "#" class = "navbar-brand">Farakunku Lodges</a>
				
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
				
				<div class = "collapse navbar-collapse navHeaderCollapse">
				
					<ul class = "nav navbar-nav navbar-right">
					
						<li><a href = "#">Home</a></li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Item One</a></li>
								<li><a href = "#">Item Two</a></li>
								<li><a href = "#">Item Three</a></li>
								<li><a href = "#">Item Four</a></li>
							</ul>
						
						</li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Twitter</a></li>
								<li><a href = "#">Facebook</a></li>
								<li><a href = "#">Google+</a></li>
								<li><a href = "#">Instagram</a></li>
							</ul>
						
						</li>
						<li><a href = "#">About</a></li>
						<li><a href = "#contact" data-toggle="modal">Contact</a></li>
					
					</ul>
				
				</div>
				
			</div>
		</div>
		
>>>>>>> master
