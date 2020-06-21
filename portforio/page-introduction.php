<?php
/*
Template Name:　introduction
*/
?>

<?php get_header(); ?>

<div class="breadcrumb">
<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
</div><!-- /breadcrumb -->

<section id="introduction" class="wrapper page">
<div class="website">

        <h1 class="title introduction__title">Introduction!</h1>
        <?php get_template_part('template-parts/introduction') ?>
    <div class="block introduction__container" id="introduction__contents">
        <?php 
        if(have_posts()): ?>
        <?php
            while(have_posts()):
                the_post(); ?>
        <div class="introduction__item">
            
                <?php the_content(); ?>
        </div>
        <?php endwhile ?>
        <?php endif ?>
    </div>


    </section>


    <?php get_footer(); ?>
