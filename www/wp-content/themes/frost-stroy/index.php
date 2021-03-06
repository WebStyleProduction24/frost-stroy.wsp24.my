<?php get_header(); ?>
<?php get_header('blog'); ?>

<main class="main-blog">
	<div class="tablet category-mobile fix-table">
		<div>
			<?php echo get_sidebar('category-mobile'); ?>
		</div>
	</div>
	<div class="content tablet-content" id="parent-line">
		<div class="content-blog" id="vertical-line">
			<div>
				<?php
				if (have_posts()):
					while (have_posts()): the_post();
						get_template_part( 'single', 'post' );
					endwhile;
				endif;
				?>
			</div>
		</div>
		<div class="sidebar">
			<?php echo get_sidebar('category'); ?>			
			<?php echo get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>