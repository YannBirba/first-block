<p <?php echo wp_kses_post(get_block_wrapper_attributes()); ?>>
	<?php
	if (isset($attributes['message'])) {
		esc_html_e(wp_kses_post($attributes['message']), 'first-block');
		echo wp_kses_post(' | ' . get_bloginfo('name'));
	} ?>
</p>
