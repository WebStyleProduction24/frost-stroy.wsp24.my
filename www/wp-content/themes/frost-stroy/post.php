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
  			<?php if (have_posts()): while (have_posts()): the_post();{
          foreach( get_the_category() as $category_id ){
            get_the_category($post->ID);
            $category_id = $category_id->cat_ID;
          }
          the_content(); 
        }
      endwhile; endif; ?>
    </div>
    <div class="sidebar">
      <?php echo get_sidebar('category'); ?>
      <?php echo get_sidebar('post'); ?>
      <?php echo get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>