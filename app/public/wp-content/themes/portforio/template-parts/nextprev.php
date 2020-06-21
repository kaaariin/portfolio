<div class="single__more-news">
<?php 
$next_post = get_next_post();
$prev_post = get_previous_post();
if($next_post):
    ?>
    <div class="prev-next more-news__prev">
        <a href="<?php echo get_permalink($next_post->ID); ?>">
        <div class="content prev__content">
            <div class="fontawesome">
            <i class="fa fa-arrow-left"></i>
        </div>
        <div class="prev__entry-text">
        <div class="prev__text">前へ</div>
        </div>
</div>
    </div></a>
    <?php
    endif;
    if($prev_post):
        ?>
        <div class="prev-next more-news__next">
            <a href="<?php echo get_permalink($prev_post->ID);?>">
            <div class="content next__content">  
            <div class="next__entry-text">
            <div class="next__text">次へ</div>
            </div>
            <div class="next__fontawesome">
            <i class="fa fa-arrow-right"></i>
        </div>
        </div></a>
        </div>
        <?php endif ?>
</div>
