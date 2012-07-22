<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu

function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Home',
        'sort_column' => 'menu_order',
        'menu_class' => 'menu',
        'echo' => false
    );
    return $args;
}
add_filter('wp_page_menu_args','childtheme_menu_args', 20);

// BlueHost link short code
function thmfooter_host_link() {
    return '<a class="host-link" href="http://bluehost.com/" title="Bluehost" rel="generator">BlueHost</a>';
}
add_shortcode('host-link', 'thmfooter_host_link');		  

?>