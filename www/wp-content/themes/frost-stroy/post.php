<?php
/*
  Template name: post
  Template Post Type: page, post
*/


  get_header();
  get_header('blog'); ?>

  <main class="main-blog">
  	<div class="content">
  		<h1 class="title-category-blog"><?php the_title();?></h1>
  		<div class="content-blog content-blog-post">
  			<?php if (have_posts()): while (have_posts()): the_post(); ?>
  				<?php the_content(); ?>
  			<?php endwhile; endif; ?>
  		</div>
  		<div class="sidebar">
  			<?php echo get_sidebar(); ?>
  			</div>
  	</div>
  </main>
  <?php get_footer(); ?>