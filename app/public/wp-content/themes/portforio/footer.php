
    <div id="footer">

        <div class="footer__block">

            <div class="footer__left">
                
            <?php wp_nav_menu(
                array(
                    'depth' => 1,
                    'theme_location' => 'global',
                    'container' => 'nav',
                    'container_class' => 'footer__nav nav',
                    'menu_class' => 'footer__nav__list nav__list',
                )
                );
                ?>
                
        </div> 
        
        <div class="footer__right">
            
            <div class="footer__logo logo">

            <div class="logo__title footer__logo__title">Karin's<br><span>portforio</span></div>
                <!-- <div class="logo__circle logo__circle--pink footer__logo__circle--pink"></div>
                <div class="logo__circle logo__circle--pink-s footer__logo__circle--pink-s"></div> -->
                
            </div>

            <div class="sns footer__right__sns">
                <a href="https://twitter.com/viivaaaa26"><i class="fab fa-twitter-square"></i></a>
                <a href="https://github.com/kaaariin"><i class="fab fa-github-square"></i></a>

            </div>
        </div>
        
    </div>
    </div>


<?php wp_footer(); ?>
</body>
</html>　