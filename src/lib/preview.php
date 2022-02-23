<?php

namespace andyp\regexer\lib;

class preview
{

    private $posts;
    private $results;
    private $target;
    private $key;

    private $post_or_meta;

    private $original;
    private $transformed;

    public function set_posts($posts)
    {
        $this->posts = $posts;
    }

    public function set_results($results)
    {
        $this->results = $results;
    }

    public function set_target($target)
    {
        $this->target = $target;
    }

    public function set_key($key)
    {
        $this->key = $key;
    }


    private function post_or_meta()
    {
        if (property_exists($this->posts[0]['post'],$this->target))
        {
            $this->post_or_meta = 'post';
        }
        if (array_key_exists($this->target,$this->posts[0]['meta']))
        {
            $this->post_or_meta = 'meta';
        }
    }


    public function run_original()
    {
        $this->post_or_meta();
        $this->set_original_values();
        $this->update_original();
    }


    private function set_original_values()
    {
        $target = $this->target;

        if ($this->post_or_meta == 'post')
        {
            $this->original    = $this->posts[0]['post']->$target;
        }

        if ($this->post_or_meta == 'meta')
        {
            $this->original    = $this->posts[0]['meta'][$target][0];
        }
    }

    private function update_original()
    {
        while( have_rows('regexer', 'options')  ) {
            $row = the_row();
            $index = get_row_index();
            if ($index == $this->key){
                $value = $this->original . PHP_EOL;
                $return = update_sub_field('original', $value, 'options');
            }
        }
    }





    public function run_transformed()
    {
        $this->set_transformed_values();
        $this->update_transformed();
    }

    private function set_transformed_values()
    {
        $target = $this->target;

        if ($this->post_or_meta == 'post')
        {
            $this->transformed = $this->results[0]['post']->$target;
        }

        if ($this->post_or_meta == 'meta')
        {
            $this->transformed = $this->results[0]['meta'][$target][0];
        }
    }

    private function update_transformed()
    {
        while( have_rows('regexer', 'options')  ) {
            $row = the_row();
            $index = get_row_index();
            if ($index == $this->key){
                $value = $this->transformed . PHP_EOL;
                $return = update_sub_field('transformed', $value, 'options');
            }
        }
    }

}