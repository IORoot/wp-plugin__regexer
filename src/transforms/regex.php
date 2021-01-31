<?php

namespace andyp\regexer\transforms;

class regex
{

    private $options;
    private $field;

    private $result;


    public function set_options($options)
    {
        $this->options = $options;
    }

    public function set_field($field)
    {
        $this->field = $field;
    }

    public function get_result()
    {
        return $this->result;
    }

    public function run()
    {
        $this->regex();
    }

    private function regex()
    {
        $pattern = $this->options['regex_match'];
        $replacement = $this->options['replacement'];
        $subject = $this->field;
        
        $this->result = preg_replace($pattern, $replacement, $subject);

    }
}