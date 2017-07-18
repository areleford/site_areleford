<?php

$links = array("websites", "graphics", "portfolio", "contact");

function generateNavigation($links) {
    foreach($links as $item) {
        echo '<a href="#' . $item . '">
                <div class="nav-link">
                    <li>' . $item . '</li>
                </div>
            </a>'; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <nav id="siteNav" class="site-nav">
        <div class="grid" data-limited data-padding="1">
            <div class="column">
                <div class="desktop">
                    <a href="#home"><div class="logo-wrapper"><img class="logo" src="<?php echo get_template_directory_uri() ?>/dist/img/logo.svg"/></div></a>
                    
                    <ul class="nav-links">
                        <?php
                        foreach($links as $item) {
                            $gearNumber = 1;
                            echo '<a href="#' . $item . '">
                                    <div class="nav-link">
                                        <li>' . $item . '</li>
                                        <div class="img-wrapper"><img src="' . get_template_directory_uri() . '/dist/img/gear.svg"/></div>
                                    </div>
                                </a>';
                        }
                        ?>
                    </ul>
                </div>

                <div class="mobile">
                    <a href="#home"><div class="logo-wrapper"><img class="logo" src="<?php echo get_template_directory_uri() ?>/dist/img/logo.svg"/></div></a>
                    <div class="hamburger"><img id="hamburger" src="<?php echo get_template_directory_uri() ?>/dist/img/gear.svg"/></div>
                </div>
            </div>
        </div>

        <ul class="mobile-nav-links" id="mobileNavLinks">
            <?php
            generateNavigation($links);
            ?>
        </ul>
    </nav>