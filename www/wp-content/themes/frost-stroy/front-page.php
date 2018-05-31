<?php get_header(); ?>
<?php get_header('index'); ?>

<main>
    <div class="content">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>
<script>

    $('.video_id').on('canplay', function () {
        $(this).attr('poster', '');
    });
    $("body").on("mouseover", "video", function(){
        this.play();
        $( this ).css( "background-color", "black" );
    });
    $("body").on("mouseleave", "video", function(){
        this.pause();
    })
</script>

<?php get_footer(); ?>