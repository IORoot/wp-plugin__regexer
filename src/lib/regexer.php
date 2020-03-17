<?php

class regexposts {

    public $options;

    public $live_input;

    public $output;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(){
        return $this;
    }

    /**
     * get_options_array
     *
     * @return void
     */
    public function get_options(){

        $this->options = array ( 
            'regex_post_type'       => get_field('regex_post_type', 'option'),
            'regex_post_field'      => get_field('regex_post_field', 'option'),
            'regex_post_id'         => get_field('regex_post_id', 'option'),
            'regex'                 => get_field('regex_to_run', 'option'),
            'regex_replacement'     => get_field('regex_replacement', 'option'),
            'regex_text'            => get_field('regex_preview_text', 'option'),
            'regex_result'          => get_field('regex_preview_result', 'option'),
        );

        if (empty($this->options['regex_replacement'])){ $this->options['regex_replacement'] = ''; }

        return $this;
    }


    /**
     * regex_live
     *
     * @return void
     */
    public function regex_live(){

        // Check we have everything we need.
        if ($this->options['regex_post_type'] == ''){ return; }
        if ($this->options['regex_post_field'] == ''){ return; }
        if ($this->options['regex'] == ''){ return; }

        //  ┌─────────────────────────────────────────────────────────────────────────┐ 
        //  │                                                                         │░
        //  │                            SINGLE POST mode                             │░
        //  │                                                                         │░
        //  └─────────────────────────────────────────────────────────────────────────┘░
        //   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
        if ($this->options['regex_post_id'] != ''){ 

            // on LIVE mode, Set the regex_text to be the post content
            $singlepost = get_post($this->options['regex_post_id']);
            $field = $this->options['regex_post_field'];
            $this->options['regex_text'] = $singlepost->$field;

            // run the regexer
            $this->regexer();

            // Update post ID
            $update_single_post = array(
                'ID'                                 => $this->options['regex_post_id'],
                $this->options['regex_post_field']   => $this->output
            );

            // Update the post in the database
            wp_update_post( $update_single_post );

            // update result field.
            update_field( 'regex_preview_result', $this->output , 'option' );

            return;
        }

        //  ┌─────────────────────────────────────────────────────────────────────────┐ 
        //  │                                                                         │░
        //  │                             BULK POST mode                              │░
        //  │                                                                         │░
        //  └─────────────────────────────────────────────────────────────────────────┘░
        //   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
        
        $args = array(
            'post_type' => $this->options['regex_post_type'],
            'numberposts' => -1
        );
    
        $pages = get_posts( $args );
        
        foreach( $pages as $page ){

            // Set the text to regex
            $field = $this->options['regex_post_field'];
            $this->options['regex_text'] = $singlepost->$field;

            // run the regexer
            $this->regexer();

            $post = array(
                'ID'                                => $page->ID,
                $this->options['regex_post_field']  => $this->output,
            );

            wp_update_post( $post );
        }

        return;
    }


    /**
     * regex_preview
     *
     * @return void
     */
    public function regex_preview(){

        $this->regexer();

        update_field( 'regex_preview_result', $this->output , 'option' );

        return;
    }


    /**
     * regexer
     *
     * @return void
     */
    public function regexer(){

        if ($this->options['regex'] == ''){ return; }
        if ($this->options['regex_text'] == ''){ return; }

        $this->output = preg_replace(
            $this->options['regex'],
            $this->options['regex_replacement'],
            $this->options['regex_text']
        );

        return;

    }

}