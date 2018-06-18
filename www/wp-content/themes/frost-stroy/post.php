<?php
/*
  Template name: post
  Template Post Type: page, post
*/
  
  if (have_posts()): while (have_posts()): the_post();
    foreach( get_the_category() as $category_id ){
      get_the_category($post->ID);
      $category_id = $category_id->cat_ID;
    }
  endwhile; endif; 
  wp_reset_postdata();

  get_header();
  get_header('blog'); ?>

  <main class="main-blog">
    <div class="tablet mobile">
      <?php
      echo get_sidebar('category-mobile');
      echo get_sidebar('post-mobile');
      ?>
    </div>
    <div class="content tablet-content">
      <h1 class="title-category-blog"><?php the_title();?></h1>
      <div class="content-blog content-blog-post">
       <?php if (have_posts()): while (have_posts()): the_post();
         the_content();
       endwhile; endif; 
       wp_reset_postdata();?>
     </div>
     <div class="sidebar">
      <?php echo get_sidebar('category'); ?>
      <?php echo get_sidebar('post'); ?>
      <?php echo get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>