<?php

namespace andyp\regexer;

class initialise {


    public function __construct()
    {
    
        //  ┌─────────────────────────────────────────────────────────────────────────┐
        //  │                              The ACF                                    │
        //  └─────────────────────────────────────────────────────────────────────────┘
        require __DIR__.'/acf/acf_admin_page.php';
        require __DIR__.'/acf/acf_admin_style.php';
        require __DIR__.'/acf/acf_dashboard.php';
        require __DIR__.'/acf/acf_update.php';

        //  ┌─────────────────────────────────────────────────────────────────────────┐
        //  │                              The Code                                   │
        //  └─────────────────────────────────────────────────────────────────────────┘
        require __DIR__.'/lib/regexer.php';

    }

}