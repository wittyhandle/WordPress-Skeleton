<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
	<?php $mb->the_field('splash'); ?>
	<?php $wpalchemy_media_access->setGroupName('main')->setInsertButtonLabel('Insert into Page'); ?>
	
	<div class="single-media">
	
		<div class="fields-block">
			<?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Splash Image')); ?>

			<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value(), 'type' => 'hidden', 'class' => 'image_holder')); ?>

			<p class="image-label"><?php 
				$image_path = $mb->get_the_value();
				if (empty($image_path))
				{
					echo 'No Image Selected';
				}
				else
				{
					$last_slash = strrpos($image_path, '/');
					$image = substr($image_path, $last_slash + 1);
					echo $image;
				}

			?></p>
		</div>

		<?php $mb->the_field('attachment_id'); ?>
		<?php echo $wpalchemy_media_access->getIdField(array(
			'class' => 'storytk-media-id-field', 
			'name' => $mb->get_the_name(), 
			'value' => $mb->get_the_value())); ?>

		<div class="thumbnail-block">
			<?php
				$attachment_id = $mb->get_the_value();
				if ( isset($attachment_id) )
				{
					echo wp_get_attachment_image($attachment_id, array(75, 75), false, array('class' => 'storytk-selected-thumbnail', 'style' => 'display: block') );
				}
				else
				{?>
					<img class="storytk-selected-thumbnail">
				<?php }
			?>
		</div>
	
	</div>
	
</div>