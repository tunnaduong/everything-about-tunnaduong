<?php

namespace App\Models;

class Home extends BaseModel
{

    public function getDiary()
    {
        $sql = "SELECT * FROM tunnaduong_everyday.timeline ORDER BY id DESC LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getBlog()
    {
        $sql = "SELECT * FROM tunnaduong_blog.wp_posts WHERE post_type = 'post' AND post_name != 'quote' AND post_status != 'draft' ORDER BY id DESC LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
