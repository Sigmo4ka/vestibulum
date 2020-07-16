<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>"><span>MODUS</span>versus</a>
				</div>
				<div class="header-menu">
					<nav class="main-navigation">
						<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
						<div data-click-state="0" class="toggleMenu">  
                            <span class="hamburger hamburger--spin sandwich"><div class="hamburger-box"><div class="hamburger-inner"></div></div>
                            </span>
                        </div>
					</nav>
				</div>
				<div class="search-form">
					<?php get_search_form(); ?> 
				</div>
			</div>
		</header>