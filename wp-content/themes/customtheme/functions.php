<?php

function university_files(){
    wp_enqueue_style( "googlefont","//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" );
    wp_enqueue_style( "fontawesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );
    wp_enqueue_style( "uni_main_style", get_stylesheet_uri() );

    wp_enqueue_script("main-js", get_theme_file_uri("/js/scripts-bundled.js"),NULL,"1.0",true);
}

add_action("wp_enqueue_scripts", "university_files");

?>