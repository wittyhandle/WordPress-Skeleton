<?php
/*
Template Name: Home Page
*/
?>

<? get_header(); ?>
	
	<? $splash_image_metabox->the_meta(); ?>
	<?= sprintf('<img src="%s" usemap="#contact"/>', $splash_image_metabox->get_the_value('splash')); ?>

	<map name="contact">
		<area shape="rect" coords="710,750,575,730" href="mailto:carl@storytk.com" alt="Contact">
	</map>
	<div class="blue"></div>
	
	<div class="incognito">
		Everyone has a story
		Some stories center on innovative products...that are imagined, designed, and built by brilliant characters.
		Some involve groundbreaking research...that’s enabled by vision, intelligence, and toil.
		Some stories light the way toward...exploiting new opportunities, or solving intractable problems, or dethroning the status quo.
		Some stories demonstrate leadership, longevity, or perseverance.
		Some stories are just big old hairballs waiting to be figured out.
		What’s your story?
	</div>
<? get_footer(); ?>

