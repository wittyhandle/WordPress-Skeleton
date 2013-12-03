<?php

$splash_image_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_splash_image_meta',
	'title' => 'Splash Image',
	'template' => get_stylesheet_directory() . '/metaboxes/splash-image-meta.php',
	'init_action' => 'load_wpa_storytk_lib',
	'include_template' => array('page-homepage.php')
));