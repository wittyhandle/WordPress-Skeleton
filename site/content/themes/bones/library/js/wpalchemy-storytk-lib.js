jQuery(function($)
{		
	jQuery('body').on('change', 'input.storytk-media-id-field', function()
	{
		var that = jQuery(this);
		jQuery.post(
			'/wp/wp-admin/admin-ajax.php',
			{
				action: 'storytk-thumbnail-spec',
				media_id: that.val(),
				dimension: 75
			},
			function( response ) {
				
				url = response[0];
				// render the img tag
				that.parent().find('img')
					.attr('src', url)
					.attr('width', response[1])
					.attr('height', response[2])
					.fadeIn(300);
				
				orig_url = that.parent().find('input.image_holder').val();
				var lastSlash = orig_url.lastIndexOf('/');
				var imageName = orig_url.substring(lastSlash + 1);
				
				that.parent().find('p.image-label')
					.html(imageName);
				
			}, 'json');
		
	});
	
});