<?php

register_sidebar(array(
  'name' => __('Right Sidebar one'),
	'id' => ('first-right-sidebar'),
	'description' => __('The top sidebar'),
	'before_widget' => '<div>',
	'after_widget' => '</div'
));

register_sidebar(array(
	'name' => __('Right Sidebar two'),
	'id' => ('second-right-sidebar'),
	'description' => ('The middle sidebar'),
	'before_widget' => '<div>',
	'after_widget' => '</div'
));

register_sidebar(array(
	'name' => __('Right Sidebar three'),
	'id' => ('third-right-sidebar'),
	'description' => ('The bottom sidebar'),
	'before_widget' => '<div>',
	'after_widget' => '</div'
));
?>
