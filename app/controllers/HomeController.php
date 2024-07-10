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
}
