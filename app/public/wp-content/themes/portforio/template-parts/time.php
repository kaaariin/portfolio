<?php if(get_field('time')): ?>
                <?php while(the_repeater_field('time')): ?>

<div class="time">
	<time class="time__item timeday" datetime="<?php the_time('c'); ?>">公開日：<?php the_time('Y/n/j'); ?></time>
	<div class="time__item work-time">作成時期：<?php the_sub_field('work-time') ?></div>
	<div class="time__item work-season">作成期間：<?php the_sub_field('work-season') ?></div>


    </div>
    
    <?php endwhile ?>
<?php endif ?>

