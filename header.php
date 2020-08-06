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

