<?php if(is_front_page('front-page')): ?>
    <div class="top__container">
        <div id="header__logo" class="logo">
        <div class="logo__title header__logo__title">Karin's<br><span>portforio</span></div>

        <!-- <div class="circle">
        <div class="logo__circle logo__circle--pink header__logo__circle--pink"></div>
        <div class="logo__circle logo__circle--pink-s header__logo__circle--pink-s"></div>
        <div class="logo__circle logo__circle--pink-p header__logo__circle--pink-s"></div>
        </div> -->
    </div>
    <div class="top__comment">
        <p id="typing"></p>
    </div>
    <div  class = "nav__top" id="nav">
    <?php wp_nav_menu(
                array(
                    'depth' => 1,
                    'theme_location' => 'global',
                    'container' => 'false',
                    'menu_class' => 'nav__list header__nav__list nav__list__pc',
                )
                );
                ?>
        
        </div>
    </div>
    <?php endif ?>
