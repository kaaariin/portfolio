<?php
/*
Template Name: skills
*/
?>

<?php get_header(); ?>
<div class="breadcrumb">
<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
</div><!-- /breadcrumb -->

<div id="skills--page" class="contents">
<div class="website">

        <h1 class="title skills--page__title">skills</h1>
        <!-- <div class="skills__bgimg">
            <div class="skills__bgimg__filter"> -->
            <?php
    if(have_posts()):
    while(have_posts()) : the_post(); ?>
        <div class="block skills--page__block">
            <?php if(get_field('skills')): ?>
                <?php while(the_repeater_field('skills')): ?>
        <div class="block skills--page__language "> 
        <div class="skills--page__language__icon-name">
        <div class="skills--page__language__icon" >
            <?php the_sub_field('icon'); ?>
                </div>
        <h2 class="skills--page__language__name"><?php the_sub_field('language') ?></h2>
        </div>
        <div class="skills--page__language__text">
        <div class="text skills--page__language__comment"><ul><?php the_sub_field('can') ?></ul></div>
                </div>
        </div>
        <?php endwhile ?>
<?php endif ?>
<?php wp_reset_postdata();?>
<div class="skills__content block"><?php the_content(); ?></div>
    </div>
    <?php endwhile ?>
<?php endif ?>
<?php wp_reset_postdata();?>
    </div>
                </div>




<?php get_footer(); ?>
