<?php

/**
 * On save of options page, create the category.
 */
function save_regexpost_options() {

    $screen = get_current_screen();

    // Check we are on the right screen
	if (strpos($screen->id, "regexposts") == false) { return; }

    // Create new object.
    $rp = new regexposts();

    // Get option page values
    $rp->get_options();

    //  ┌─────────────────────────────────────────────────────────────────────────┐ 
    //  │                                                                         │░
    //  │                                LIVE mode                                │░
    //  │                                                                         │░
    //  └─────────────────────────────────────────────────────────────────────────┘░
    //   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░                                                                           
    if (get_field('regex_run', 'option') == true){ 

        $rp->regex_live();
    
    } else {
    
        //  ┌─────────────────────────────────────────────────────────────────────────┐ 
        //  │                                                                         │░
        //  │                              PREVIEW mode                               │░
        //  │                                                                         │░
        //  └─────────────────────────────────────────────────────────────────────────┘░
        //   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░                                                                         

        $rp->regex_preview();

    }

	return;
}

// MUST be in a hook, otherwise it wiull run BEFORE the 
// taxonomy is registered and then not work.
add_action('acf/save_post', 'save_regexpost_options', 20);