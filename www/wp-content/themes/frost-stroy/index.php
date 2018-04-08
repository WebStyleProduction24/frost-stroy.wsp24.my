<?php get_header(); ?>
   
   <header class="header-land">
        <div class="content">
            <div class="left">
                <?php the_custom_logo(); ?><a href="<?php echo home_url();?>" class="logo"><?php echo get_bloginfo('name');?></a>

                <?php wp_nav_menu(array(
                    'theme_location' => 'land',
                    'container'       => 'div',
                    'container_class' => 'nav'
                     ));?>
            </div>
            <div class="tel" style="float: right;">
                <p> ПН—ПТ, с 9 до 22</p>
                <a href="tel:+74993720682">+7 499 372-06-82</a>
            </div>
        </div>
    </header>

        <main>
            <div class="content">
                <h1>Гараж из сэндвич-панелей — это круто и современно</h1>
                <div>
                    <div class="item">
                        <div class="img" style="background-color: transparent; overflow: visible;"><img src="<?php echo get_template_directory_uri(); ?>/images/1_teplo.png" alt=""></div>
                        <div class="second__txt">
                            <p><span class="b">Удобно</span></p>
                            <p>В гараже с утеплением из пенополистирола машина легко заводится зимой</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-color: transparent; overflow: visible;"><img src="<?php echo get_template_directory_uri(); ?>/images/2_ekonomno.png" alt=""></div>
                            <div class="second__txt">
                                <p><span class="b">Экономно</span></p>
                                <p>Гараж из сэндвич-панелей обходится дешевле других материалов</p></div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-color: transparent; overflow: visible;"><img src="<?php echo get_template_directory_uri(); ?>/images/3_bistro.png" alt=""></div>
                        <div class="second__txt">
                            <p><span class="b">Быстро</span></p>
                            <p>Строительство гаража и уборка участка занимают в среднем от 4 до 6 дней</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-color: transparent; overflow: visible;"><img src="<?php echo get_template_directory_uri(); ?>/images/4_nadezhno.png" alt=""></div>
                        <div class="second__txt">
                            <p><span class="b">Надежно</span></p>
                            <p>Каркас гаража выдерживает нагрузку минимум 180 кг на квадратный метр</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-color: transparent; overflow: visible;"><img src="<?php echo get_template_directory_uri(); ?>/images/5_bez_nervov.png" alt=""></div>
                        <div class="second__txt">
                            <p><span class="b">Без нервов</span></p>
                            <p>Ваше присутствие на стройке не требуется, мы сами организуем работы и доставку материалов</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-color: transparent; overflow: visible;"><img src="<?php echo get_template_directory_uri(); ?>/images/6_krasivo.png" alt=""></div>
                        <div class="second__txt">
                            <p><span class="b">Красиво</span></p>
                            <p>Широкий выбор отделки гаража: 15 стандартных цветов, фактура под дерево, камень или кирпич</p>
                        </div>
                    </div>
                </div>
            </div>
            </main>






    <?php /*<section>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>*/?>
<?php get_footer(); ?>