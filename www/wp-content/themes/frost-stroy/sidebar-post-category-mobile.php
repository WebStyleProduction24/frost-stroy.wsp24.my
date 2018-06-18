	<div class="category">
		<p>Статьи по теме <a href="#" id="open-post" class="icon-angle-down"></a><a href="#" id="close-post" class="icon-angle-up"></a></p>
		<div class="ul-mobile-post">

		<?php global $category_id;

		query_posts(array('cat' => $category_id, ));
		if(have_posts()) : while(have_posts()): the_post(); { ?>
				<a class="permlinccat" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
			<?php }
		endwhile; endif;		
		wp_reset_query();
		?>
	</div>
	<a href="#" id="close-1-post" class="icon-angle-up"></a>
</div>