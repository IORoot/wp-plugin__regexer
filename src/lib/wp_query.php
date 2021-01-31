<?php

namespace andyp\regexer\lib;

class wp_query
{
    private $query;

    private $posts;

    private $results;

    public function set_query($query)
    {
        $this->query = $query;
    }

    public function get_results()
    {
        return $this->results;
    }

    public function run()
    {
        $this->run_query();
        $this->get_meta();
    }

    private function run_query()
    {
        $query = $this->query;
        $args = eval("return $query;");
        $this->posts = get_posts($args);
    }

    private function get_meta()
    {
        foreach($this->posts as $key => $result)
        {
            $this->results[$key]['post'] = $result;
            $this->results[$key]['meta'] = get_post_meta($result->ID);
        }
    }

}