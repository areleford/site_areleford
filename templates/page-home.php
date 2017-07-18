<?php
/*
Template Name: template-home-page
*/
?>

<?php get_header(); ?>

<div id="home" class="home-header">
    <div class="grid" data-limited data-padding="0">
        
        <div class="column" data-width="2/3" data-align="left">
            <p class="heading">Hi, I'm Aaron. I'm a web engineer with a passion for making my clients look good.</p>
            <div>
                <a href="#websites"><button class="sx-button" data-size="3" data-color="theme1">Sleek Websites</button></a>
                <a href="#graphics"><button class="sx-button" data-size="3" data-color="theme1">Stylish Graphics</button></a>
            </div>
        </div>
        <div class="column" data-width="1/3" data-padding="0">
            <img class="engineer" src="<?php echo get_template_directory_uri() ?>/dist/img/engineer.svg"/>
        </div>
    </div>
</div>

<div id="websites" class="home-dev-header">
    <div class="grid" data-limited data-padding="3">
        <img class="hammer" src="<?php echo get_template_directory_uri() ?>/dist/img/hammer.svg"/>
        <img class="wrench" src="<?php echo get_template_directory_uri() ?>/dist/img/wrench.svg"/>

        <div class="column" data-align="center">
            <h2>Web Construction</h2>
            <p class="sub-heading">Don't your ideas deserve a good home?</p>
            <p class="sub-heading">Let's start building.</p>
        </div>
    </div>
</div>

<div class="home-dev-info">
    <div class="grid" data-padding="3" data-limited>
        <div class="row" data-pushed>
            <div class="column" data-align="center" data-width="2/3">
                <p class="sub-heading">Affordable websites you can be proud to show off to your friends.</p>
            </div>
        </div>
        <div class="row" data-columns="3" data-align="top" data-padding="2">
            <div class="column" data-padding="2">
                <i class="fa fa-list-alt" data-size="5"></i>
                <h3>Info Sites</h3>
                <p>Establish an online pressence so that people can find you and see what you're all about.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-shopping-cart" data-size="5"></i>
                <h3>Online Stores</h3>
                <p>Take your products and services beyond brick and mortar.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-wordpress" data-size="5"></i>
                <h3>Blogs</h3>
                <p>Share your great ideas and unique perspective with the world.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-camera" data-size="5"></i>
                <h3>Portfolios</h3>
                <p>Show off your creativity by showcasing all your hard work.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-gear" data-size="5"></i>
                <h3>Web Apps</h3>
                <p>Take interactivity to the next level with an application that runs in the browser.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-plus" data-size="5"></i>
                <h3>And more...</h3>
                <p>Contact me. Whatever you're looking for, I can probably build it.</p>
            </div>
        </div>

    </div>
</div>

<div class="home-dev-features">
    <div class="grid" data-padding="3" data-limited>
        <div class="row" data-pushed>
            <div class="column" data-align="center" data-width="2/3">
                <p class="sub-heading">Equiped with powerful features to help you reach your audience and deliver a great experience.</p>
            </div>
        </div>
        <div class="column" data-width="2/3" data-align="left">
            <h3>Search Engine Optimized</h3>
            <p>Before you can deliver a great experience, you have to reach your audience. Your site will be built in accordance with Google's reccomended SEO practices and target certain keywords so that you can do just that.</p>
        </div>
        <div class="column" data-width="1/3" data-align="right">
            <img class="seo" src="<?php echo get_template_directory_uri() ?>/dist/img/seo.svg"/>
        </div>

        <div class="column" data-width="1/2" data-align="left">
            <img class="responsive" src="<?php echo get_template_directory_uri() ?>/dist/img/responsive.svg"/>
        </div>
        <div class="column" data-width="1/2" data-align="right">
            <h3>Responsively Designed</h3>
            <p>Nothing kills a great web experience like trying to navigate a site that isn't designed for mobile. Your site will respond and shape to fit the device it's being viewed on.</p>
        </div>

        <div class="column" data-width="2/3" data-align="left">
            <h3>Blazing Fast</h3>
            <p>The modern world is fast paced and people hate waiting on technology. With compressed images and optimized code your site will load blazingly fast.</p>
        </div>
        <div class="column" data-width="1/3" data-align="right">
            <img class="fast" src="<?php echo get_template_directory_uri() ?>/dist/img/fast.svg"/>
        </div>

        <div class="column" data-width="1/2" data-align="left">
            <img class="custom" src="<?php echo get_template_directory_uri() ?>/dist/img/blueprint.svg"/>
        </div>
        <div class="column" data-width="1/2" data-align="right">
            <h3>Hand Crafted</h3>
            <p>In a world of competitors, one must stand out to succeed and draw attention. Your site will be designed from scratch and shaped to fit your personality and meet your needs.</p>
        </div>

    </div>
</div>

<div id="graphics" class="home-design-header">
    <div class="grid" data-padding="3" data-limited>
        <img class="pencil" src="<?php echo get_template_directory_uri() ?>/dist/img/pencil.svg"/>
        <img class="scissors" src="<?php echo get_template_directory_uri() ?>/dist/img/scissors.svg"/>
        <div class="column" data-align="center">
            <h2>Graphics Workshop</h2>
            <p class="sub-heading">First impressions are everything.</p>
            <p class="sub-heading">Let's make yours count.</p>
        </div>
    </div>
</div>

<div id="graphics" class="home-design-info">
    <div class="grid" data-padding="3" data-limited>
        <div class="row" data-pushed>
            <div class="column" data-align="center" data-width="2/3">
                <p class="sub-heading">Eye catching graphics to make you stand out from the crowd.</p>
            </div>
        </div>
        <div class="row" data-columns="3" data-align="top" data-padding="2">
            <div class="column" data-padding="2">
                <i class="fa fa-pencil-square" data-size="5"></i>
                <h3>Logos & Branding</h3>
                <p>Make yourself stand out as unique and professional.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-id-card" data-size="5"></i>
                <h3>Business Cards</h3>
                <p>Simultaneously share your contact info and your high degree of quality.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-map" data-size="5"></i>
                <h3>Brocures & Pamlets</h3>
                <p>Provide your audience with useful information they'll be happy to read.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-file-text" data-size="5"></i>
                <h3>Posters & Flyers</h3>
                <p>Got an event coming up? Spread the word and gather attention.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-user" data-size="5"></i>
                <h3>Apparel</h3>
                <p>Advertise in style with custom t-shirts, hats, ect.</p>
            </div>
            <div class="column" data-padding="2">
                <i class="fa fa-plus" data-size="5"></i>
                <h3>And more...</h3>
                <p>Contact me. Whatever you're looking for, I can probably make it.</p>
            </div>
        </div>

    </div>
</div>

<div id="portfolio" class="home-portfolio">
    <div class="grid" data-padding="3">
        <div class="column" data-align="center">
            <h2>My Portfolio</h2>
            <p class="sub-heading">Check out some of my work.</p>
        </div>
        <div class="row" data-columns="3">
            <div class="column" data-padding="2">
                <div class="client">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/img/bluezoom.svg"/>
                    <div class="client-info">
                        <h3>Blue Zoom Wifi</h3>
                        <a href="http://bluezoomwifi.com"><button class="sx-button" data-color="theme5">Visit Site</button></a>
                    </div>
                </div>
            </div>

            <div class="column" data-padding="2">
                <div class="client">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/img/pbor.svg"/>
                    <div class="client-info">
                        <h3>Paducah Board of Realtors</h3>
                        <a href="http://paducahrealtors.org"><button class="sx-button" data-color="theme5">Visit Site</button></a>
                    </div>
                </div>
            </div>

            <div class="column" data-padding="2">
                <div class="client">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/img/lineman.svg"/>
                    <div class="client-info">
                        <h3>Lineman Striping</h3>
                        <a href="http://linemanstriping.com"><button class="sx-button" data-color="theme5">Visit Site</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="home-contact">
    <div class="grid" data-padding="3" data-limited>
        <div class="column" data-width="1/2">
            <h2>Say Hello</h2>
            <p class="contact-description">Interested in hiring me or curious if I can help you? Get in touch. A call is the quickest and best way to reach me, but an email works great too. If you can't get ahold of me right away I will be in touch within 1 business day.</p>
            <div class="icon-text">
                <i class="fa fa-circle-thin" data-size="4"><i class="fa fa-phone"></i></i>
                <p class="contact-info">859-325-1031</p>
            </div>
            <div class="icon-text">
                <i class="fa fa-circle-thin" data-size="4"><i class="fa fa-envelope"></i></i>
                <p class="contact-info">aaron@areleford.com</p>
            </div>
            <div class="icon-text">
                <i class="fa fa-circle-thin" data-size="4"><i class="fa fa-map-marker"></i></i>
                <p class="contact-info">Harrodsburg, KY</p>
            </div>
        </div>

        <div class="column" data-width="1/2">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1" html_class="sx-contact-form"]'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>