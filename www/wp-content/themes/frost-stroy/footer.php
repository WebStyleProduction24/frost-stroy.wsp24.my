<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__left">
            <div class="footer__logo vcard">
                <div class="footer__img"><?php the_custom_logo(); ?><a href="<?php echo home_url();?>" class="logo"><?php echo get_bloginfo('name');?></a></div>
                    <div class="footer__txt">
                        <p><span class="b">Телефон:</span><a href=" tel:<?php echo tel();?>" class="phone"><?php echo get_option( 'eg_setting_name' );?></a></p>
                        <p><span class="b"> Почта:</span><a class="email" href="mailto:<?php echo get_option('email');?>"> <?php echo get_option('email');?></a></p>
                        <p class="adr"><span class="b">Адрес: </span><span class="street-address"><?php echo get_option('adress');?></span></p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/marker.png" alt="">&nbsp;<a href="<?php echo get_option( 'maps' )?>" target="_blank">карта проезда на Яндекс-картах</a></p>
                    </div>
                </div>
                <div class="footer__blog">
                    <h5>Интересно!</h5>                <?php wp_nav_menu(array(
                    	'theme_location' => 'bottom',
                    	'container'       => 'div',
                    	'container_class' => ''
                	 ));?>
                </div>
            <div class="footer__socials">
                    <a href="<?php echo get_option('vk'); ?>" target="_blank" class="soc_ic soc_ic--vk"><img src="<?php echo get_template_directory_uri(); ?>/images/vk.png" alt=""></a>
                    <a href="<?php echo get_option('fb'); ?>" target="_blank" class="soc_ic soc_ic--fb"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt=""></a>
                    <a href="<?php echo get_option('yt'); ?>" target="_blank" class="soc_ic soc_ic--yt"><img src="<?php echo get_template_directory_uri(); ?>/images/yt.png" alt=""></a>
                    <a href="<?php echo get_option('ig'); ?>" target="_blank" rel="nofollow" class="soc_ic soc_ic--ig"><img src="<?php echo get_template_directory_uri(); ?>/images/ig.png" alt=""></a>
            </div>
            </div>
                <div class="footer__right">
                    <p>Спроектировано и реализовано</p>
                    <p><a href="https://wsp24.ru/" rel="nofollow" target="_blank">Web Style Production</a></p>
                </div>
            </div>
        </footer>

		<?php wp_footer(); ?>
		
	</body>
</html>