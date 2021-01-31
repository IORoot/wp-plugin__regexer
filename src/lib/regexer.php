<?php

namespace andyp\regexer\lib;

use andyp\regexer\lib\options;
use andyp\regexer\lib\wp_query;
use andyp\regexer\lib\transform;
use andyp\regexer\lib\update;
use andyp\regexer\lib\preview;

class regexer {

    private $all_options;
    private $options;

    private $posts;

    private $results;

    private $preview;



    public function run(){

        $this->get_options();
        $this->loop_instances();
        
    }

    private function get_options()
    {
        $op = new options;
        $op->run();
        $this->all_options = $op->get_result();
        $this->apply = $this->all_options['preview'];
        unset($this->all_options['preview']);
    }


    private function loop_instances()
    {
        foreach ($this->all_options as $this->options_key => $this->options)
        {
            if (empty($this->options['enabled'])){ continue; }
            $this->query();
            $this->preview_original();
            $this->transform();
            $this->update();
            $this->preview_transformed();
        }

    }

    private function query()
    {
        $query = new wp_query;
        $query->set_query($this->options['query']);
        $query->run();
        $this->posts = $query->get_results();
    }



    private function transform()
    {
        $transform = new transform;
        $transform->set_posts($this->posts);
        $transform->set_target($this->options['target']);
        $transform->set_transforms($this->options['transform']);
        $transform->run();
        $this->results = $transform->get_results();
    }

    
    private function update()
    {
        if (empty($this->apply)){ return; }
        $update = new update;
        $update->set_posts($this->results);
        $update->set_target($this->options['target']);
        $update->run();
    }

    
    private function preview_original()
    {
        $this->preview = new preview;
        $this->preview->set_target($this->options['target']);
        $this->preview->set_posts($this->posts);
        $this->preview->set_key($this->options_key + 1);
        $this->preview->run_original();
    }

    
    private function preview_transformed()
    {
        $this->preview->set_results($this->results);
        $this->preview->run_transformed();
    }


}