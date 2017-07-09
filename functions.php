<?php 

function wpLearning_scripts() {
    // scripts
    wp_enqueue_script("bundle", get_template_directory_uri() . "/dist/app.js", "", "1.0", true);

    // stylesheet
    wp_enqueue_style("style", get_template_directory_uri() . "/dist/style.css");
}
add_action("wp_enqueue_scripts", "wpLearning_scripts");

// Wordpress Titles
add_theme_support("title-tag");
// Support Featured Images
add_theme_support( 'post-thumbnails' );


/*
    ===========================
    REMOVE GENERATOR VERSION NUMBER
    ===========================
*/

/* remove version string from js and css */
function remove_cssjs_query_string( $src ) {
    if( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }

    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_query_string', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_query_string', 10, 2 );

// custom
function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

// remove dumbass error
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
?>