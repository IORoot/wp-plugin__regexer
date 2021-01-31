<?php

namespace andyp\regexer\transforms;

class replace
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
        $this->replace();
    }

    private function replace()
    {        
        $this->result = str_replace($this->options['find'], $this->options['replacement'], $this->field);
    }
}