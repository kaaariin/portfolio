<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karin's portforio</title>
    <?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166330706-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166330706-1');
</script>

</head>
<body>
    <header id="header">
        <div  class = "nav">
    <?php if ( !is_front_page('front-page')): ?>
    <?php wp_nav_menu(
                array(
                    'depth' => 1,
                    'theme_location' => 'global',
                    'container' => 'false',
                    'menu_class' => 'nav__list header__nav__list nav__list__pc',
                    
                )
                );
                ?>
                <?php endif ?>
        
        </div>
    <div id="navbar__toggle">
        <span class="navbar__toggle__icon"></span>
        <span class="navbar__toggle__icon"></span>
        <span class="navbar__toggle__icon"></span>
    </div>
    <div id="header__nav" class = "nav">
        <div class="nav__logo logo">
            <div class="logo__title nav__logo__title">Karin's<br><span>portforio</span></div>
            <div class="nav__circle logo__circle nav__logo__circle--pink logo__circle--pink"></div>
            <div class="nav__circle logo__circle nav__logo__circle--pink-s logo__circle--pink-s"></div>
        </div>
        <?php wp_nav_menu(
            array(
            'depth' => 1,
            'theme_location' => 'drawer',
            'container' => 'false',
            'menu_class' => 'nav__list header__nav__list nav__list__pc',
                )
                );
                ?>
    </div>
</header> 