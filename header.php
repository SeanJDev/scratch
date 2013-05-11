<!doctype html>
<html>
<head>
  <meta charset="utf-8" /> 
	<title><?php bloginfo('title')?></title>  
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> 
	<?php wp_head();?> 

<header>
	<h1><a href="<?php echo home_url('/')?>"><?php bloginfo('name')?></a></h1>
</header>

<nav>
    <?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'container_class' => 'main-menu', 'theme_location'  => 'header') ); ?>
</nav>

<div id="container"> 
