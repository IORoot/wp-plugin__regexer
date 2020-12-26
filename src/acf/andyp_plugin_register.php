<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Regexer',
        'icon'      => 'regex',
        'color'     => '#3D5AFE',
        'path'      => __FILE__,
    ]);
} );