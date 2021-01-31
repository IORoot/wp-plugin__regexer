<?php

namespace andyp\regexer\lib;

class transform
{
    private $posts;
    private $target;
    private $transforms;

    private $current_key;
    private $current_post;
    private $current_transform;
    private $post_or_meta;
    private $field;

    private $current_result;
    private $results;

    public function set_posts($posts)
    {
        $this->posts = $posts;
    }

    public function set_target($target)
    {
        $this->target = $target;
    }

    public function set_transforms($transforms)
    {
        $this->transforms = $transforms;
    }

    public function get_results()
    {
        return $this->results;
    }

    public function run()
    {
        $this->loop_posts();
    }

    private function loop_posts()
    {
        $this->results = $this->posts;

        foreach ($this->posts as $this->current_key => $this->current_post)
        {
            $this->loop_transforms();
        }
    }

    private function loop_transforms()
    {
        foreach ($this->transforms as $this->current_transform)
        {
            $this->post_or_meta();
            $this->get_field_value();
            $this->apply_transform();
            $this->set_results();
        }
    }

    private function get_field_value()
    {
        $target = $this->target;
        $type   = $this->post_or_meta;

        //post
        if (is_a($this->current_post[$type], 'WP_Post')) {
            $this->field = $this->current_post[$type]->$target;
        }

        // meta
        if (is_array($this->current_post[$type])) {
            $this->field = $this->current_post[$type][$target][0];
        }
    }
    

    private function apply_transform()
    {
        
        $transform_type = $this->current_transform['acf_fc_layout'];
        $namespaced = '\\andyp\\regexer\\transforms\\' . $transform_type;
        $transform = new $namespaced;
        $transform->set_options($this->current_transform);
        $transform->set_field($this->field);
        $transform->run();
        $this->current_result = $transform->get_result();
    }
    

    private function set_results()
    {
        $target = $this->target;
        $type   = $this->post_or_meta;

        if ($type == 'post')
        {
            $this->results[$this->current_key][$type]->$target = $this->current_result;
        }

        if ($type == 'meta')
        {
            $this->results[$this->current_key][$type][$target][0] = $this->current_result;
        }
    }


    private function post_or_meta()
    {
        if (array_key_exists($this->target,$this->current_post['post']))
        {
            $this->post_or_meta = 'post';
        }
        if (array_key_exists($this->target,$this->current_post['meta']))
        {
            $this->post_or_meta = 'meta';
        }
    }
}