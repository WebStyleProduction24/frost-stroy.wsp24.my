<header class="header-land header-blog">
    <div class="content">
        <div class="left">
            <?php the_custom_logo(); ?>
            <a href="<?php echo home_url();?>" class="logo logo-blog"><?php echo get_bloginfo('name');?></a>
            <div class="description"><a href="<?php echo home_url();?>/blog"><?php echo get_bloginfo('description');?></a></div>
        </div>
        <div class="tel" style="float: right;">
            <p><?php echo get_option( 'eg_setting_name2' );?></p>
            <a href="tel:<?php echo tel();?>"><?php echo get_option( 'eg_setting_name' );?></a>
        </div>
    </div>
</header>