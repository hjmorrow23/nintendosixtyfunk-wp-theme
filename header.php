<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="UTF-8">
    
    <!-- Information that will display with description> -->
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Stylesheets and Resets -->
    
    <?php wp_head(); ?>
    
</head>
<body>
	<!-- Site Wrapper -->
	<div class="page-container hide-mobile">
		<div class="site-wrap">
		
			<!-- Header -->
			<div class="main-header">
					<div class="nav-bar">
						<div class="logo"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></div>
						<nav class="main-nav">
							<?php 
								
								$defaults = array(
									'container' => false,
									'theme_location' => 'primary-menu',
								);
								
								wp_nav_menu($defaults);
								
							?>
						</nav>
						<a href="#" class="menu-icon">&#9776;</a>
					</div>
				

