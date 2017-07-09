<?php
/*
Template Name: template-home-page
*/
?>

<?php get_header(); ?>

<div class="grid" data-limited>
    <div class="column" data-width="1/2" data-color="theme1" data-align="center">
        <h5>Test Heading</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, alias.</p>
        <h4>Heading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, quisquam.</p>
        <h3>Heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, nam!</p>
        <h2>Heading</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, cupiditate.
        <h1>Heading</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, magni!</p>
    </div>
    <div class="column" data-align="left" data-width="1/2" data-color="theme2" data-padding="1">
        <h2>Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sint fuga quo quod cupiditate assumenda facere aliquid rem sit. Sint dolor, error molestias deleniti perspiciatis ex fugit vel odio harum id aliquam quis. Earum, reprehenderit, tenetur. Blanditiis nisi, error, perferendis voluptatibus consequuntur totam veritatis autem, aut earum neque temporibus inventore!</p>

        <button class="sx-button" data-color="white1" data-size="1">Click Me</button>
        <button class="sx-button" data-color="white2" data-size="2">Click Me</button>
        <button class="sx-button" data-color="black1" data-size="3">Click Me</button>
        <button class="sx-button" data-color="black2" data-size="4">Click Me</button>
        <button class="sx-button" data-color="grey1" data-size="5">Click Me</button>
    </div>

    <div class="row" data-align="center" data-padding="2">
        <div class="column" data-width="1/2">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1" html_class="sx-contact-form"]'); ?>
        </div>
    </div>

    <div class="row" data-columns="3">
        <div class="column" data-color="theme3">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sint fuga quo quod cupiditate assumenda facere aliquid rem sit. Sint dolor, error molestias deleniti perspiciatis ex fugit vel odio harum id aliquam quis. Earum, reprehenderit, tenetur. Blanditiis nisi, error, perferendis voluptatibus consequuntur totam veritatis autem, aut earum neque temporibus inventore!</p>
        </div>
        <div class="column">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sint fuga quo quod cupiditate assumenda facere aliquid rem sit. Sint dolor, error molestias deleniti perspiciatis ex fugit vel odio harum id aliquam quis. Earum, reprehenderit, tenetur. Blanditiis nisi, error, perferendis voluptatibus consequuntur totam veritatis autem, aut earum neque temporibus inventore!</p>
        </div>
        <div class="column" data-color="theme5">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sint fuga quo quod cupiditate assumenda facere aliquid rem sit. Sint dolor, error molestias deleniti perspiciatis ex fugit vel odio harum id aliquam quis. Earum, reprehenderit, tenetur. Blanditiis nisi, error, perferendis voluptatibus consequuntur totam veritatis autem, aut earum neque temporibus inventore!</p>
        </div>
        <div class="column">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sint fuga quo quod cupiditate assumenda facere aliquid rem sit. Sint dolor, error molestias deleniti perspiciatis ex fugit vel odio harum id aliquam quis. Earum, reprehenderit, tenetur. Blanditiis nisi, error, perferendis voluptatibus consequuntur totam veritatis autem, aut earum neque temporibus inventore!</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>