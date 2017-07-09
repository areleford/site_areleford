<?php

$links = array("About", "Services", "Portfolio", "Contact");

function generateNavigation($links) {
    foreach($links as $item) {
        echo '<a href="./' . $item . '"><div class="nav-link"><li>' . $item . '</li></div></a>'; 
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
    <nav class="site-nav">
        <div class="grid" data-limited data-padding="1">
            <div class="column">
                <div class="nav-wrapper">
                    <div class="desktop">
                        <a href="home">Logo Goes Here</a>
                        
                        <ul class="nav-links">
                            <?php
                            generateNavigation($links);
                            ?>
                        </ul>
                    </div>

                    <div class="mobile">
                        <a href="home">Logo Goes Here</a>
                        <div class="hamburger" id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="mobile-nav-links" id="mobileNavLinks">
            <?php
            generateNavigation($links);
            ?>
        </ul>
    </nav>