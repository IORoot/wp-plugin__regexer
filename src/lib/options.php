<?php

namespace andyp\regexer\lib;

class options
{

    private $result;

    public function get_result()
    {
        return $this->result;
    }

    public function run()
    {
        $this->result = get_field('regexer', 'option');
        $this->result['preview'] = get_field('regexer_preview', 'option');
    }

}