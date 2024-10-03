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
        $sql = "SELECT * FROM tunnaduong_blog.wp_posts WHERE post_type = 'post' AND post_name != 'quote' AND post_status != 'draft' AND post_status != 'auto-draft' ORDER BY id DESC LIMIT 3;";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getEveryday()
    {
        $sql = "SELECT * FROM tunnaduong_everyday.timeline ORDER BY id DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getPeople()
    {
        $sql = "SELECT p.id, p.name, p.met_from, p.date_of_birth, p.avatar, COUNT(m.person_id) AS memories_count FROM people AS p LEFT JOIN memories AS m ON p.id = m.person_id GROUP BY p.id ORDER BY p.id DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getTop6Projects()
    {
        $sql = "SELECT * FROM tunnaduong_everything.projects ORDER BY created_at DESC LIMIT 6";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getAllITProjects()
    {
        $sql = "SELECT * FROM tunnaduong_everything.projects WHERE type = 'IT' ORDER BY created_at DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getAllEngineeringProjects()
    {
        $sql = "SELECT * FROM tunnaduong_everything.projects WHERE type = 'Engineer' ORDER BY created_at DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getAllDesignProjects()
    {
        $sql = "SELECT * FROM tunnaduong_everything.projects WHERE type = 'Design' ORDER BY created_at DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getAllFilmingProjects()
    {
        $sql = "SELECT * FROM tunnaduong_everything.projects WHERE type = 'Film' ORDER BY created_at DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getProject($project_id)
    {
        $sql = "SELECT * FROM tunnaduong_everything.projects WHERE project_id = '$project_id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}
