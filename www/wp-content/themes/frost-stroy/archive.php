<?php
foreach( get_the_category() as $category_id ){
	get_the_category($post->ID);
	$category_id = $category_id->cat_ID;
}

get_header();
get_header('blog');
?>

<main class="main-blog">
	<div class="tablet mobile">
		<?php
		echo get_sidebar('category-mobile');
		echo get_sidebar('post-category-mobile');
		?>
	</div>
	<div class="content tablet-content" id="parent-line">		
		<div class="content-blog" id="vertical-line">
			<div>
				<h1 class="title-category-blog"><?php foreach( get_the_category() as $category ){get_the_category(); echo $category->cat_name; }?></h1>
				<?php
				if (have_posts()):
					while (have_posts()): the_post();
						get_template_part( 'single', 'archive' );
					endwhile;
				endif;
				?>
			</div>
		</div>
		<div class="sidebar">
			<?php echo get_sidebar('category'); ?>
			<?php echo get_sidebar('post-category'); ?>
			<?php echo get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>