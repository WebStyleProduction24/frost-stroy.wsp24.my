<a href="<?php the_permalink(); ?>" class="post-blog">
	<div class="post-excerpt">
		<?php the_post_thumbnail('post-img-blog');?>
		<div class="post-hover">
			<div class="text-post-hover">
				<h1><?php the_title();?></h1>
				<div class="post-excerpt-hover"><?php the_excerpt(); ?></div>
			</div>
		</div>
		<div class="post-background"></div>
		<div class="title-post-nohover"><h1><?php the_title();?></h1>
			<h6><?php foreach( get_the_category() as $category ){get_the_category(); echo $category->cat_name; }	?></h6>
		</div>
	</div>
</a>