<?php

// Load Merriweather Serif and Merriweather Sans

function simone_child_fonts(){
    wp_enqueue_style('google_merriweather', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Merriweather+Sans:400,300,300italic,400italic,700,700italic,800,800italic');
}

add_action('wp_enqueue_scripts','simone_child_fonts');