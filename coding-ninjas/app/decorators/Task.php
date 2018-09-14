<?php

namespace codingninjas;

use \Exception;
use \WP_Post;

class Task
{
    /**
     * post instance
     * @var WP_Post
     */
    protected $post;

    /**
     * post type name
     */
    const POST_TYPE = 'task';

    /**
     * Task constructor.
     * @param WP_Post $post
     */
    public function __construct(WP_Post $post)
    {
        $this->post = $post;
    }

    /**
     * id for table
     * @return string
     */
    public function id()
    {
        $id = '#'.$this->post->ID;
        return apply_filters ('cn_task_id', $id, $this->post);
    }

    /**
     * task title
     * @return string
     */
    public function title()
    {
        $title = $this->post->post_title;
        return apply_filters ('cn_task_title', $title, $this->post);
    }

    /**
     * task date
     * @return string
     */
    public function cdate()
    {
        $cdate = $this->post->post_date;
        return apply_filters ('cn_task_cdate', $cdate, $this->post);
    }

    /**
    * freelancer on task
    * @return string
    */
    public function freelancer(){
        $id_task= $this->post->ID;
        $id_freelancer=get_post_meta($id_task,'freelancer',true);
        $data=get_post($id_freelancer,'ARRAY_A');
        $title=$data['post_title'];
        return apply_filters ('cn_task_cdate', $title, $this->post);
    }
}