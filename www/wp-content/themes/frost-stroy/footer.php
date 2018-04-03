		    <footer class="footer">
        <div class="footer__wrap">
            <div class="footer__left">
                <div class="footer__logo vcard">
                    <a class="url fn org" href="http://stroy-frost.ru" style="display:none">Stroy Frost</a>
                    <div class="footer__img"><img src="<?php echo get_template_directory_uri(); ?>/images/footlogo.png" alt=""></div>
                    <div class="footer__txt">
                        <p><span class="b">Телефон:</span><a href=" tel:+74993720682" class="phone">+7 499 372-06-82</a></p>
                        <p><span class="b"> Почта:</span><a class="email" href="mailto:sales@stroy-frost.ru"> sales@stroy-frost.ru</a></p>
                        <p class="adr"><span class="b">Адрес: </span><span class="street-address">МО, г. Фрязино, ул. Пионерская, д.4, к.1, 5й этаж, офис 550</span></p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/marker.png" alt="">&nbsp;<a href="#">карта проезда на Яндекс-картах</a></p>
                    </div>
                </div>
                <?php /*wp_nav_menu(array(
                	'theme_location' => 'bottom',
                	'container'       => 'div',
                	'container_class' => 'footer__blog'
                	 ));*/?>
                <div class="footer__blog">
                    <h5>Интересно!</h5>
                    <p><a href="#" target="_blank">Статья 1</a></p>
                    <p><a href="#" target="_blank">Статья 2</a></p>
                    <p><a href="#" target="_blank">Статья 3</a></p>
                    <p><a href="#" target="_blank">Статья 4</a></p>
                    <p><a href="#" target="_blank">Статья 5</a></p>
                </div>
            <div class="footer__socials">
                    <a href="#" target="_blank" class="soc_ic soc_ic--vk"><img src="<?php echo get_template_directory_uri(); ?>/images/vk.png" alt=""></a>
                    <a href="#" target="_blank" class="soc_ic soc_ic--fb"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt=""></a>
                    <a href="#" target="_blank" class="soc_ic soc_ic--yt"><img src="<?php echo get_template_directory_uri(); ?>/images/yt.png" alt=""></a>
                    <a href="#" target="_blank" rel="nofollow" class="soc_ic soc_ic--ig"><img src="<?php echo get_template_directory_uri(); ?>/images/ig.png" alt=""></a>
            </div>
        </div>
            <div class="footer__right">
                <p>Спроектировано и реализовано</p>
                <p><a href="http://jack36.ru/" rel="nofollow" target="_blank">Студия Web-разработки Jack Style</a></p>
            </div>
        </div>
    </footer>

		<?php wp_footer(); ?>
		
	</body>
</html>