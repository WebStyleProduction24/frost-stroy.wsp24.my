<header class="header-land">
    <div class="content">
        <div class="left">
            <?php the_custom_logo(); ?>
            <a href="<?php echo home_url();?>" class="logo"><?php echo get_bloginfo('name');?></a>
            <?php wp_nav_menu(array(
                'theme_location' => 'land',
                'container'       => 'div',
                'container_class' => 'nav'
            ));?>
        </div>
        <div class="tel" style="float: right;">
            <p><?php echo get_option( 'eg_setting_name2' );?></p>
            <a href="tel:<?php echo tel();?>"><?php echo get_option( 'eg_setting_name' );?></a>
        </div>
    </div>
</header>