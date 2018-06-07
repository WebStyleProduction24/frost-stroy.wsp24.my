	<div class="category">
		<p>Категории статей</p>

		<?php wp_list_categories( array(
			'style'              => 'none',
			'exclude'            => '1',
			// 'show_count'         => 1,
		) ); ?>

	</div>