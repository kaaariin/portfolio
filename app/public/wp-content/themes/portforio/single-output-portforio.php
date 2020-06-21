


<?php get_header(); ?>


<div class="single">
<div class="breadcrumb">
<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
</div><!-- /breadcrumb -->


	<div class="single__container">
	<?php
    if(have_posts()):
    while(have_posts()) : the_post();
		?>
	<div class="single__title">
        <h1><?php the_title() ?></h1>
	</div>
<?php get_template_part('template-parts/time');?>	

<?php get_template_part('template-parts/moreup') ?>


<?php if(get_field('website')): ?>
                <?php while(the_repeater_field('website')): ?>
	<div class="single__pictuers block website__pictuers__pasta">
	<div class="click-on website__pc-img"><img src="<?php the_sub_field('pc-img-1'); ?>" alt=""></div>
                    <div class="click-on website__sp-img"><img src="<?php the_sub_field('sp-img'); ?>" alt=""></div>

	</div>
	<div class="single__text block">
	<div class="text single__text__content"><?php the_content(); ?></div>
	</div>

	<div class="website-site__click fadeout"><img src="<?php the_sub_field('pc-img-1'); ?>" alt=""><i class="close-fa far fa-times-circle"></i></div>
<div class="website-site__click website-site__sp fadeout"><img src="<?php the_sub_field('sp-img'); ?>" alt=""><i class="close-fa far fa-times-circle"></i></div>

<?php endwhile ?>
<?php endif ?>
<?php wp_reset_postdata();?>

<?php endwhile ?>
<?php endif ?>
		<?php wp_reset_postdata();?>

	</div>
    <?php get_template_part('template-parts/nextprev'); ?>


</div>


<?php get_footer(); ?>