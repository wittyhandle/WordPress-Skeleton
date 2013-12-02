<?php

$splash_image_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_spalsh_image_meta',
	'title' => 'Splash Image',
	'template' => get_stylesheet_directory() . '/metaboxes/splash-image-meta.php',
	'include_template' => array('page-homepage.php')
));