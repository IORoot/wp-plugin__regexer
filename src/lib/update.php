<?php

namespace andyp\regexer\lib;

class update {

    private $posts;
    private $target;

    private $current_post;
    private $post_or_meta;
    private $post_array;

    public function set_posts($posts)
    {
        $this->posts = $posts;
    }

    public function set_target($target)
    {
        $this->target = $target;
    }

    public function run(){

        $this->loop_posts();
    }

    private function loop_posts()
    {
        foreach($this->posts as $this->current_post)
        {
            $this->post_or_meta();
            
            if ($this->post_or_meta == 'post')
            {
                $this->create_post_array();
                $this->update_post();
            }

            if ($this->post_or_meta == 'meta')
            {
                $this->update_meta();
            }
            
        }
    }


    private function create_post_array()
    {
        $target = $this->target;

        $this->post_array = [
            'ID' => $this->current_post['post']->ID,
            $target => $this->current_post['post']->$target,
        ];
    }



    private function update_post()
    {
        wp_update_post($this->post_array);
    }



    private function update_meta()
    {
        $value = $this->current_post['meta'][$this->target][0];
        update_post_meta($this->current_post['post']->ID, $this->target, $value);
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