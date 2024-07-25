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
        return $this->render("pages.about.index");
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
}