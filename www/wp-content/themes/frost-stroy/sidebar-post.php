	<div class="category">
		<p>Статьи по теме</p>

		<?php
		$cat_post = get_the_category();
		$cat_ID = $cat_post->cat_ID;
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a class="permlinccat" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<?php endwhile; else: ?>
		Статей по теме нет
	<?php endif; wp_reset_query(); ?>

</div>