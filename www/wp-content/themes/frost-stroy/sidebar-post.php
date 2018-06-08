	<div class="category">
		<p>Статьи по теме</p>

		<?php global $category_id;
		$current_id = $post->ID;

		query_posts(array('cat' => $category_id, ));
		if(have_posts()) : while(have_posts()): the_post(); {
			$post_id = $post->ID;
			if ($current_id == $post_id) {?>
				<a class="permlinccat current-post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
			<?php } else {?>
				<a class="permlinccat" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
			<?php }
		}
		endwhile; endif;;
		?>
	</div>

	