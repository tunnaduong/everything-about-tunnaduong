<?php

namespace App\Controllers;

use App\Models\Home;

class HomeController extends BaseController
{
    public $home;

    public function __construct()
    {
        $this->home = new Home();
    }

    public function index()
    {
        $diaries = $this->home->getDiary();
        $blog_posts = $this->home->getBlog();
        return $this->render("pages.home.index", compact("diaries", "blog_posts"));
    }

    public function about()
    {
        $projects = $this->home->getTop6Projects();
        return $this->render("pages.about.index", compact("projects"));
    }

    public function everyday()
    {
        $diaries = $this->home->getEveryday();
        return $this->render("pages.diary.index", compact("diaries"));
    }

    public function people()
    {
        $people = $this->home->getPeople();
        return $this->render("pages.people.index", compact("people"));
    }

    public function project($project_id)
    {
        $project = $this->home->getProject($project_id);
        // check if project is not found
        if (!$project) {
            return $this->error404();
        }
        return $this->render("pages.project.index", compact("project"));
    }

    public function what_i_do()
    {
        $projects = $this->home->getAllITProjects();
        $engineering_projects = $this->home->getAllEngineeringProjects();
        $design_projects = $this->home->getAllDesignProjects();
        $filming_projects = $this->home->getAllFilmingProjects();
        return $this->render('pages.what-i-do.index', compact("projects", "engineering_projects", "design_projects", "filming_projects"));
    }

    public function error404()
    {
        return $this->render("pages.error.404");
    }
}
