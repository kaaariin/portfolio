<?php get_header(); ?>
<?php
    if(have_posts()):
    while(have_posts()) : the_post();
        ?>
            <?php if(get_field('website')): ?>
                <?php while(the_repeater_field('website')): ?>


<div class="website page">

<div class="breadcrumb">
<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
</div><!-- /breadcrumb -->

<div class="website__container">
    
    <div class="website__title">
        <h1><?php the_title() ?></h1>
    </div>
    <?php get_template_part('template-parts/time');?>	

    <?php get_template_part('template-parts/moreup') ?>

    <div class="website__pictuers website__pictuers__pasta block">
                    <div class="click-on website__pc-img"><img src="<?php the_sub_field('pc-img-1'); ?>" alt=""></div>
                    <div class="click-on website__sp-img"><img src="<?php the_sub_field('sp-img'); ?>" alt=""></div>

</div>

<?php get_template_part('template-parts/content') ?>


</div>

<?php get_template_part('template-parts/nextprev'); ?>


</div>

<div class="website-site__click fadeout"><img src="<?php the_sub_field('pc-img-1'); ?>" alt=""><i class="close-fa far fa-times-circle"></i></div>
<div class="website-site__click website-site__sp fadeout"><img src="<?php the_sub_field('sp-img'); ?>" alt=""><i class="close-fa far fa-times-circle"></i></div>



<?php endwhile ?>
<?php endif ?>
<?php wp_reset_postdata();?>


<?php
endwhile ?>
<?php
endif ?>


<?php get_footer(); ?>
