<div>
    <h2><?php the_title(); ?></h2>
    <p><?php the_date(); ?> by <a href="#"><?php echo (string)the_author_meta("first_name") ?></a></p>
    <?php the_content(); ?>
</div>