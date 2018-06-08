	<div class="category">
		<p>Статьи по теме</p>

		<?php global $category_id;

		query_posts(array('cat' => $category_id, ));
		if(have_posts()) : while(have_posts()): the_post(); { ?>
				<a class="permlinccat" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
			<?php }
		endwhile; endif;
		?>
	</div>

	