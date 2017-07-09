<?php
get_header();

?> <div class="ui container grid"><div class="sixteen wide column"> <?php

if(have_posts()) : while(have_posts()) : the_post();
    get_template_part("content", get_post_format());
endwhile; 

next_posts_link("Older posts");
previous_posts_link("Newer posts");

endif;

?> </div></div>

<?php
get_footer();
?>