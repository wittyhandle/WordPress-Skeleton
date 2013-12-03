<?php

$splash_email_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_splash_email_meta',
	'title' => 'Email',
	'template' => get_stylesheet_directory() . '/metaboxes/splash-email-meta.php',
	'include_template' => array('page-homepage.php')
));