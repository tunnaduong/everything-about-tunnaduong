<?php

namespace App\Controllers;

use App\Models\Admin;

class AdminController extends BaseController
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new Admin();
    }

    public function index()
    {
        $this->requireAuth();
        return $this->render('pages.admin.index');
    }

    public function login()
    {
        if ($this->isAuthenticated()) {
            header('Location: /admin');
            exit;
        }

        $error = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($this->isValidCredentials($username, $password)) {
                $_SESSION['admin_authenticated'] = true;
                $_SESSION['admin_username'] = $username;
                header('Location: /admin');
                exit;
            }

            $error = 'Tên đăng nhập hoặc mật khẩu không đúng.';
        }

        return $this->render('pages.admin.login', compact('error'));
    }

    public function logout()
    {
        unset($_SESSION['admin_authenticated'], $_SESSION['admin_username']);
        header('Location: /admin/login');
        exit;
    }

    public function timeline()
    {
        $this->requireAuth();
        $items = $this->adminModel->getTimelineAll();
        return $this->render('pages.admin.timeline.index', compact('items'));
    }

    public function timeline_create()
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($_POST['title'] ?? '');
            $content = trim($_POST['content'] ?? '');
            $date = trim($_POST['date'] ?? '');
            $image = trim($_POST['image'] ?? '');

            $this->adminModel->createTimeline($title, $content, $date, $image);
            header('Location: /admin/timeline');
            exit;
        }

        $item = null;
        return $this->render('pages.admin.timeline.form', compact('item'));
    }

    public function timeline_edit($id)
    {
        $this->requireAuth();
        $item = $this->adminModel->getTimelineById($id);
        if (!$item) {
            header('Location: /admin/timeline');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($_POST['title'] ?? '');
            $content = trim($_POST['content'] ?? '');
            $date = trim($_POST['date'] ?? '');
            $image = trim($_POST['image'] ?? '');

            $this->adminModel->updateTimeline($id, $title, $content, $date, $image);
            header('Location: /admin/timeline');
            exit;
        }

        return $this->render('pages.admin.timeline.form', compact('item'));
    }

    public function timeline_delete($id)
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->adminModel->deleteTimeline($id);
        }
        header('Location: /admin/timeline');
        exit;
    }

    public function luubut()
    {
        $this->requireAuth();
        $items = $this->adminModel->getLuubutAll();
        return $this->render('pages.admin.luubut.index', compact('items'));
    }

    public function luubut_edit($id)
    {
        $this->requireAuth();
        $item = $this->adminModel->getLuubutById($id);
        if (!$item) {
            header('Location: /admin/luubut');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $isApproved = isset($_POST['isApproved']) ? 1 : 0;
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $comefrom = trim($_POST['comefrom'] ?? '');
            $web = trim($_POST['web'] ?? '');
            $gender = trim($_POST['gender'] ?? '');
            $havewemet = trim($_POST['havewemet'] ?? '');
            $whywemet = trim($_POST['whywemet'] ?? '');
            $ourmemory = trim($_POST['ourmemory'] ?? '');
            $iam = trim($_POST['iam'] ?? '');
            $dislike = trim($_POST['dislike'] ?? '');
            $somelines = trim($_POST['somelines'] ?? '');
            $signature_data = trim($_POST['signature_data'] ?? '');

            $this->adminModel->updateLuubut(
                $id,
                $isApproved,
                $name,
                $email,
                $comefrom,
                $web,
                $gender,
                $havewemet,
                $whywemet,
                $ourmemory,
                $iam,
                $dislike,
                $somelines,
                $signature_data
            );

            header('Location: /admin/luubut');
            exit;
        }

        return $this->render('pages.admin.luubut.form', compact('item'));
    }

    public function luubut_delete($id)
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->adminModel->deleteLuubut($id);
        }
        header('Location: /admin/luubut');
        exit;
    }

    public function projects()
    {
        $this->requireAuth();
        $items = $this->adminModel->getProjectsAll();
        return $this->render('pages.admin.projects.index', compact('items'));
    }

    public function projects_create()
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $project_id = trim($_POST['project_id'] ?? '');
            $name = trim($_POST['name'] ?? '');
            $created_at = trim($_POST['created_at'] ?? '');
            $description = trim($_POST['description'] ?? '');
            $role = trim($_POST['role'] ?? '');
            $technologies = trim($_POST['technologies'] ?? '');
            $github = trim($_POST['github'] ?? '');
            $live_site = trim($_POST['live_site'] ?? '');
            $thumbnail = trim($_POST['thumbnail'] ?? '');
            $type = trim($_POST['type'] ?? '');
            $custom_thumbnail_html = trim($_POST['custom_thumbnail_html'] ?? '');

            $this->adminModel->createProject(
                $project_id,
                $name,
                $created_at,
                $description,
                $role,
                $technologies,
                $github,
                $live_site,
                $thumbnail,
                $type,
                $custom_thumbnail_html
            );

            header('Location: /admin/projects');
            exit;
        }

        $item = null;
        return $this->render('pages.admin.projects.form', compact('item'));
    }

    public function projects_edit($id)
    {
        $this->requireAuth();
        $item = $this->adminModel->getProjectById($id);
        if (!$item) {
            header('Location: /admin/projects');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $created_at = trim($_POST['created_at'] ?? '');
            $description = trim($_POST['description'] ?? '');
            $role = trim($_POST['role'] ?? '');
            $technologies = trim($_POST['technologies'] ?? '');
            $github = trim($_POST['github'] ?? '');
            $live_site = trim($_POST['live_site'] ?? '');
            $thumbnail = trim($_POST['thumbnail'] ?? '');
            $type = trim($_POST['type'] ?? '');
            $custom_thumbnail_html = trim($_POST['custom_thumbnail_html'] ?? '');

            $this->adminModel->updateProject(
                $id,
                $name,
                $created_at,
                $description,
                $role,
                $technologies,
                $github,
                $live_site,
                $thumbnail,
                $type,
                $custom_thumbnail_html
            );

            header('Location: /admin/projects');
            exit;
        }

        return $this->render('pages.admin.projects.form', compact('item'));
    }

    public function projects_delete($id)
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->adminModel->deleteProject($id);
        }
        header('Location: /admin/projects');
        exit;
    }

    public function people()
    {
        $this->requireAuth();
        $items = $this->adminModel->getPeopleAll();
        return $this->render('pages.admin.people.index', compact('items'));
    }

    public function people_create()
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $met_from = trim($_POST['met_from'] ?? '');
            $date_of_birth = trim($_POST['date_of_birth'] ?? '');
            $short_description = trim($_POST['short_description'] ?? '');
            $gender = trim($_POST['gender'] ?? '');
            $relationship_status = trim($_POST['relationship_status'] ?? '');
            $avatar = trim($_POST['avatar'] ?? '');
            $context_group = trim($_POST['context_group'] ?? '');

            $this->adminModel->createPerson(
                $name,
                $met_from,
                $date_of_birth,
                $short_description,
                $gender,
                $relationship_status,
                $avatar,
                $context_group
            );

            header('Location: /admin/people');
            exit;
        }

        $item = null;
        return $this->render('pages.admin.people.form', compact('item'));
    }

    public function people_edit($id)
    {
        $this->requireAuth();
        $item = $this->adminModel->getPersonById($id);
        if (!$item) {
            header('Location: /admin/people');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $met_from = trim($_POST['met_from'] ?? '');
            $date_of_birth = trim($_POST['date_of_birth'] ?? '');
            $short_description = trim($_POST['short_description'] ?? '');
            $gender = trim($_POST['gender'] ?? '');
            $relationship_status = trim($_POST['relationship_status'] ?? '');
            $avatar = trim($_POST['avatar'] ?? '');
            $context_group = trim($_POST['context_group'] ?? '');

            $this->adminModel->updatePerson(
                $id,
                $name,
                $met_from,
                $date_of_birth,
                $short_description,
                $gender,
                $relationship_status,
                $avatar,
                $context_group
            );

            header('Location: /admin/people');
            exit;
        }

        return $this->render('pages.admin.people.form', compact('item'));
    }

    public function people_delete($id)
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->adminModel->deletePerson($id);
        }
        header('Location: /admin/people');
        exit;
    }

    public function memories()
    {
        $this->requireAuth();
        $items = $this->adminModel->getMemoriesAll();
        return $this->render('pages.admin.memories.index', compact('items'));
    }

    public function memories_create()
    {
        $this->requireAuth();
        $people = $this->adminModel->getPeopleAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $person_id = trim($_POST['person_id'] ?? '');
            $memory_title = trim($_POST['memory_title'] ?? '');
            $memory_content = trim($_POST['memory_content'] ?? '');
            $location = trim($_POST['location'] ?? '');
            $time = trim($_POST['time'] ?? '');
            $feeling = trim($_POST['feeling'] ?? '');
            $love = trim($_POST['love'] ?? '0');

            $this->adminModel->createMemory(
                $person_id,
                $memory_title,
                $memory_content,
                $location,
                $time,
                $feeling,
                $love
            );

            header('Location: /admin/memories');
            exit;
        }

        $item = null;
        return $this->render('pages.admin.memories.form', compact('item', 'people'));
    }

    public function memories_edit($id)
    {
        $this->requireAuth();
        $item = $this->adminModel->getMemoryById($id);
        if (!$item) {
            header('Location: /admin/memories');
            exit;
        }

        $people = $this->adminModel->getPeopleAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $person_id = trim($_POST['person_id'] ?? '');
            $memory_title = trim($_POST['memory_title'] ?? '');
            $memory_content = trim($_POST['memory_content'] ?? '');
            $location = trim($_POST['location'] ?? '');
            $time = trim($_POST['time'] ?? '');
            $feeling = trim($_POST['feeling'] ?? '');
            $love = trim($_POST['love'] ?? '0');

            $this->adminModel->updateMemory(
                $id,
                $person_id,
                $memory_title,
                $memory_content,
                $location,
                $time,
                $feeling,
                $love
            );

            header('Location: /admin/memories');
            exit;
        }

        return $this->render('pages.admin.memories.form', compact('item', 'people'));
    }

    public function memories_delete($id)
    {
        $this->requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->adminModel->deleteMemory($id);
        }
        header('Location: /admin/memories');
        exit;
    }

    private function requireAuth()
    {
        if (!$this->isAuthenticated()) {
            header('Location: /admin/login');
            exit;
        }
    }

    private function isAuthenticated()
    {
        return !empty($_SESSION['admin_authenticated']);
    }

    private function isValidCredentials($username, $password)
    {
        $adminUser = defined('ADMIN_USER') ? ADMIN_USER : 'admin';
        $adminPass = defined('ADMIN_PASS') ? ADMIN_PASS : 'admin123';

        return $username === $adminUser && $password === $adminPass;
    }
}
