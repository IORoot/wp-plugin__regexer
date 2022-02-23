<?php

/**
 * Include ACF into plugin.
 * 
 */

add_action('acf/init', 'menu_regexer');

function menu_regexer(){
    if (function_exists('acf_add_options_page')) {
        $args = array(
            'page_title' => 'Regex Posts',
            'menu_title' => 'Regex Posts',
            'menu_slug' => 'regexposts',
            'capability' => 'manage_options',
            'position' => 101,
            'icon_url' => 'data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE2LDE2LjkyQzE1LjY3LDE2Ljk3IDE1LjM0LDE3IDE1LDE3QzE0LjY2LDE3IDE0LjMzLDE2Ljk3IDE0LDE2LjkyVjEzLjQxTDExLjUsMTUuODlDMTEsMTUuNSAxMC41LDE1IDEwLjExLDE0LjVMMTIuNTksMTJIOS4wOEM5LjAzLDExLjY3IDksMTEuMzQgOSwxMUM5LDEwLjY2IDkuMDMsMTAuMzMgOS4wOCwxMEgxMi41OUwxMC4xMSw3LjVDMTAuMyw3LjI1IDEwLjUsNyAxMC43Niw2Ljc2VjYuNzZDMTEsNi41IDExLjI1LDYuMyAxMS41LDYuMTFMMTQsOC41OVY1LjA4QzE0LjMzLDUuMDMgMTQuNjYsNSAxNSw1QzE1LjM0LDUgMTUuNjcsNS4wMyAxNiw1LjA4VjguNTlMMTguNSw2LjExQzE5LDYuNSAxOS41LDcgMTkuODksNy41TDE3LjQxLDEwSDIwLjkyQzIwLjk3LDEwLjMzIDIxLDEwLjY2IDIxLDExQzIxLDExLjM0IDIwLjk3LDExLjY3IDIwLjkyLDEySDE3LjQxTDE5Ljg5LDE0LjVDMTkuNywxNC43NSAxOS41LDE1IDE5LjI0LDE1LjI0VjE1LjI0QzE5LDE1LjUgMTguNzUsMTUuNyAxOC41LDE1Ljg5TDE2LDEzLjQxVjE2LjkySDE2VjE2LjkyTTUsMTlBMiwyIDAgMCwxIDcsMTdBMiwyIDAgMCwxIDksMTlBMiwyIDAgMCwxIDcsMjFBMiwyIDAgMCwxIDUsMTlINVoiLz48L3N2Zz4=',
            'redirect' => true,
            'post_id' => 'options',
            'autoload' => false,
            'update_button'		=> __('Update', 'acf'),
            'updated_message'	=> __("Options Updated", 'acf'),
        );

        acf_add_options_page($args);
    }
}