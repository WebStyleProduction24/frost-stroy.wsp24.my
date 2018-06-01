<?php get_header(); ?>
<?php get_header('blog'); ?>

<main class="main-blog">
	<div class="content">
		<div class="content-blog">
			<?php
			if (have_posts()):
				while (have_posts()): the_post();
					get_template_part( 'single', 'post' );
				endwhile;
			endif;
			?>
		</div>
		<div class="sidebar"><?php echo get_sidebar(); ?></div>
	</div>
</main>
<?php get_footer(); ?>