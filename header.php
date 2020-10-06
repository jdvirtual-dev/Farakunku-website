
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
		<body  data-spy="scroll" data-target="mySidenav" data-offset="50" <?php body_class(); ?>>
			<nav class="navbar-main">
				
			
					<div class="col-3">
						<button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         					<span class="navbar-toggler-icon"></span>
        				</button> 
						<div class="navbar-logo">					
							<a class="navbar-logo-text">
								<?php bloginfo('name'); ?>
							</a>
						</div>
					</div>								
					<div class="col-6">
						<?php
							wp_nav_menu(
								array(
									'menu'            => 'Main',
									'theme_location'  => 'menu-1',
									'container'       =>  false,
									'container_id'    => 'navbarSupportedContent navbar-collapse',
									'container_class' => 'navbar-collapse justify-content-center',
									'menu_class'      => 'navbar-menu justify-content-center',
									'before'          => '<button class="navbar-button" type="button">',
									'after'			  => '</button>',
								
										)
									);						  
					?>
			</div>
			<div class="col-3 d-flex justify-content-end">
				<button type="button" class="navbar-button" >Book Now!</button>
			</div>
    </nav>


