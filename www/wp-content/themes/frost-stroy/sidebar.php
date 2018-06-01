	<div class="category">
		<p>Категории</p>

		<?php wp_list_categories( array(
			'style'              => 'none',
			'exclude'            => '1',
		) ); ?>

	</div>

	<?php

	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('section-sidebar');
	?>