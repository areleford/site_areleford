<div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_date(); ?> by <a href="#"><?php echo (string)the_author_meta("first_name") ?></a></p>
    <?php the_excerpt(); ?>
</div>