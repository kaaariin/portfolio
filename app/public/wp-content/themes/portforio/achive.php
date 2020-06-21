<?php
/*
Template Name: output
*/
?>

<?php get_header(); ?>

<div id="autput" class="contents">
        <h1 class="title autput__title">Output</h1>
        <div class="block autput__block">
        <?php
            $args =  array(
                'posts_type' => array('tf_first'),//投稿タイプ
                'posts_per_page' => '9',//9件を取得
                'orderby' => 'DESC'
            );
            ?>
            <?php $my_query = new WP_Query($args); ?>
            
            <div class="article autput__article">
            <?php
                while($my_query->have_posts()) : $my_query->the_post(); ?>
                <a href="<?php the_permalink();?>">
                    <div class="article__img autput__article__img">
                    <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }
                    ?>
                </div>
                    <div class="article__content autput__article__content">
                        <h2 class="article__content__title autput__article__content__title"><?php the_title(); ?><</h2>
                        <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を</p>
                        </div>
                    </a>
                    <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
                    </div>
        </div>
        <a class="more-btn" href="<?php echo home_url('autoput')?>"><div class="btn">more</div></a>

        </div>
    




<?php get_footer(); ?>
