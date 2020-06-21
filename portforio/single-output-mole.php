


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

<?php if(get_field('website')): ?>
                <?php while(the_repeater_field('website')): ?>
	<div class="single__pictuers block">
					<div class="single__movie"><?php the_sub_field('movie-1') ?></div>
	</div>
	<div class="single__text block">
	<div class="text single__text__content"><?php the_content(); ?></div>
	</div>
<?php endwhile ?>
<?php endif ?>
<?php wp_reset_postdata();?>

<?php endwhile ?>
<?php endif ?>
		<?php wp_reset_postdata();?>

	</div>



</div>


<?php get_footer(); ?>