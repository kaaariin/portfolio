<?php
/*
Template Name: output
*/
?>

<?php get_header(); ?>

<?php get_header(); ?>
<div class="breadcrumb">
<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
</div><!-- /breadcrumb -->


<div id="output" class="contents">
        <h1 class="title output__title">Output</h1>
        <div class="output__git">
        一部、githubにアップしています！！
        <div class="sns ">
                <a href="https://github.com/kaaariin"><i class="fab fa-github-square"></i></a>

            </div>

        </div>

        <div class="output__pickup">new!!</div>
        <div class="block output__block">
            
        <?php
            $args =  array(
                'post_type' => array('output'),//投稿タイプ
                'post__in' => array('244'),
                // 'posts_per_page' => '9',//9件を取得
                'orderby' => 'DESC'
            );
            ?>
            <?php $my_query = new WP_Query($args); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post();  ?>

            <div class="article output__article output__article__new">

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
	<div class="output__time__item time__item work-time">作成時期：<?php the_sub_field('work-time') ?></div>
	<div class="output__time__item time__item work-season">作成期間：<?php the_sub_field('work-season') ?></div>
    </div>
                    <?php endwhile ?>
                    <?php endif ?>
                    
                
                        </div>
                    </a>
                    
                    </div>
                    <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
        </div>
        <div class="output__pickup">pickup!!</div>
        <div class="block output__block">
            
        <?php
            $args =  array(
                'post_type' => array('output'),//投稿タイプ
                'post__in' => array('212','210','208'),
                // 'posts_per_page' => '9',//9件を取得
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
	<div class="output__time__item time__item work-time">作成時期：<?php the_sub_field('work-time') ?></div>
	<div class="output__time__item time__item work-season">作成期間：<?php the_sub_field('work-season') ?></div>
    </div>
                    <?php endwhile ?>
                    <?php endif ?>
                    
                
                        </div>
                    </a>
                    
                    </div>
                    <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
        </div>
        <div class="output__pickup">etc...</div>
        <div class="block output__block">
        <?php
            $args =  array(
                'post_type' => array('output'),//投稿タイプ
                'post__not_in' => array('244','212','210','208'),
                'posts_per_page' => '6',//9件を取得
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

        </div>
    




<?php get_footer(); ?>
