


<?PHP the_field('top'); ?>

        <?php get_header(); ?>

<div class="top">
<div class="top__flower"><img src="<?php echo get_template_directory_uri(); ?>/img/flower.png" alt=""> </div>
<?php get_template_part('template-parts/top'); ?>

    </div>


    <div id="introduction" class="wrapper contents">
        <h1 class="title introduction__title">Introduction!</h1>

        <?php get_template_part('template-parts/introduction') ?>

    <a class="more-btn" href="<?php echo home_url('introduction')?>"><div class="btn">more</div></a>

    </div>
<div class="skills__back">
    <div id="skills" class="contents">
        <h1 class="title skills__title">skills</h1>
        <!-- <div class="skills__bgimg">
            <div class="skills__bgimg__filter"> -->
        <div class="block skills__block">
        <?php if(get_field('skills',14)): ?>
                <?php while(the_repeater_field('skills',14)): ?>
        <div class="skills__language skills__language--html"> 
        <?php the_sub_field('icon'); ?>
        <h2 class="skills__language__name"><?php the_sub_field('language') ?></h2>
        <ul class="skills__language__comment"><?php the_sub_field('front-can') ?></ul>
        </div>
        <?php endwhile ?>
    <?php endif ?>
    </div>
    <a class="more-btn" href="<?php echo home_url('skills')?>"><div class="btn">more</div></a>
    </div>
    </div>




    <div id="output" class="contents">
        <h1 class="title output__title">Output</h1>
        <div class="output__git">
        一部、githubにアップしています！！
        <div class="sns ">
                <a href="https://github.com/kaaariin"><i class="fab fa-github-square"></i></a>

            </div>

        </div>

        <div class="block output__block">
        <?php
            $args =  array(
                'post_type' => array('output'),//投稿タイプ
                'posts_per_page' => '3',//9件を取得
                'orderby' => 'DESC'
            );
            ?>
             <?php $my_query = new WP_Query($args); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post();  ?>

            <div class="article output__article">
                <a href="<?php the_permalink();?>">
                    <div class="article__img output__article__img">
                    <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }
                    ?>
                </div>
                    <div class="article__content output__article__content">
                        <h2 class="article__content__title output__article__content__title"><?php the_title(); ?></h2>
                        <?php 
                    $page_id = get_page_by_path('website');
                    $page_id = $page_id -> ID; ?>


                    <?php if(get_field('time',$page_id)): ?>
                        <?php while(the_repeater_field('time',$page_id)): ?>
                            <div class="output__time time">
	<time class="output__time__item time__item timeday" datetime="<?php the_time('c'); ?>">公開日：<?php the_time('Y/n/j'); ?></time>
	<div class="output__time__item time__item work-time">作成時間：<?php the_sub_field('work-time') ?></div>
	<div class="output__time__item time__item work-season">作成時期：<?php the_sub_field('work-season') ?></div>
    </div>
                    <?php endwhile ?>
                    <?php endif ?>
                        </div>
                    </a>
                    </div>
                    <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
        </div>
        <a class="more-btn" href="<?php echo home_url('output')?>"><div class="btn">more</div></a>

        </div>
    
        <?php get_template_part('template-parts/uparrow'); ?>



    <!-- <svg width="100%" height="auto" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 40 C 40 10, 110 30, 155 60 S 300 100, 450 50 S 700 120, 900 50 S 1100 120, 1300 50 S 1500 120, 1700 50" fill="rgba(69,217,212,0.7)"/>
    </svg> -->

<?php get_footer(); ?>
