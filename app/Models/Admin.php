<?php

namespace App\Models;

class Admin extends BaseModel
{
    public function getTimelineAll()
    {
        $sql = "SELECT * FROM everyday.timeline ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getTimelineById($id)
    {
        $sql = "SELECT * FROM everyday.timeline WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function createTimeline($title, $content, $date, $image)
    {
        $sql = "INSERT INTO everyday.timeline (title, content, date, image) VALUES (?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$title, $content, $date, $image]);
    }

    public function updateTimeline($id, $title, $content, $date, $image)
    {
        $sql = "UPDATE everyday.timeline SET title = ?, content = ?, date = ?, image = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$title, $content, $date, $image, $id]);
    }

    public function deleteTimeline($id)
    {
        $sql = "DELETE FROM everyday.timeline WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

    public function getLuubutAll()
    {
        $sql = "SELECT * FROM luubut.luubut ORDER BY ngaygio DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getLuubutById($id)
    {
        $sql = "SELECT * FROM luubut.luubut WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateLuubut($id, $isApproved, $name, $email, $comefrom, $web, $gender, $havewemet, $whywemet, $ourmemory, $iam, $dislike, $somelines, $signature_data)
    {
        $sql = "UPDATE luubut.luubut
                SET isApproved = ?, name = ?, email = ?, comefrom = ?, web = ?, gender = ?, havewemet = ?, whywemet = ?, ourmemory = ?, iam = ?, dislike = ?, somelines = ?, signature_data = ?
                WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([
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
            $signature_data,
            $id
        ]);
    }

    public function deleteLuubut($id)
    {
        $sql = "DELETE FROM luubut.luubut WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

    public function getProjectsAll()
    {
        $sql = "SELECT * FROM " . DBNAME . ".projects ORDER BY created_at DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getProjectById($id)
    {
        $sql = "SELECT * FROM " . DBNAME . ".projects WHERE project_id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function createProject($project_id, $name, $created_at, $description, $role, $technologies, $github, $live_site, $thumbnail, $type, $custom_thumbnail_html)
    {
        $sql = "INSERT INTO " . DBNAME . ".projects (project_id, name, created_at, description, role, technologies, github, live_site, thumbnail, type, custom_thumbnail_html)\n                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([
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
        ]);
    }

    public function updateProject($id, $name, $created_at, $description, $role, $technologies, $github, $live_site, $thumbnail, $type, $custom_thumbnail_html)
    {
        $sql = "UPDATE " . DBNAME . ".projects\n                SET name = ?, created_at = ?, description = ?, role = ?, technologies = ?, github = ?, live_site = ?, thumbnail = ?, type = ?, custom_thumbnail_html = ?\n                WHERE project_id = ?";
        $this->setQuery($sql);
        return $this->execute([
            $name,
            $created_at,
            $description,
            $role,
            $technologies,
            $github,
            $live_site,
            $thumbnail,
            $type,
            $custom_thumbnail_html,
            $id
        ]);
    }

    public function deleteProject($id)
    {
        $sql = "DELETE FROM " . DBNAME . ".projects WHERE project_id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

    public function getPeopleAll()
    {
        $sql = "SELECT * FROM " . DBNAME . ".people ORDER BY met_from DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getPersonById($id)
    {
        $sql = "SELECT * FROM " . DBNAME . ".people WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function createPerson($name, $met_from, $date_of_birth, $short_description, $gender, $relationship_status, $avatar, $context_group)
    {
        $sql = "INSERT INTO " . DBNAME . ".people (name, met_from, date_of_birth, short_description, gender, relationship_status, avatar, context_group)\n                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([
            $name,
            $met_from,
            $date_of_birth,
            $short_description,
            $gender,
            $relationship_status,
            $avatar,
            $context_group
        ]);
    }

    public function updatePerson($id, $name, $met_from, $date_of_birth, $short_description, $gender, $relationship_status, $avatar, $context_group)
    {
        $sql = "UPDATE " . DBNAME . ".people\n                SET name = ?, met_from = ?, date_of_birth = ?, short_description = ?, gender = ?, relationship_status = ?, avatar = ?, context_group = ?\n                WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([
            $name,
            $met_from,
            $date_of_birth,
            $short_description,
            $gender,
            $relationship_status,
            $avatar,
            $context_group,
            $id
        ]);
    }

    public function deletePerson($id)
    {
        $sql = "DELETE FROM " . DBNAME . ".people WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

    public function getMemoriesAll()
    {
        $sql = "SELECT m.*, p.name AS person_name\n                FROM " . DBNAME . ".memories AS m\n                LEFT JOIN " . DBNAME . ".people AS p ON m.person_id = p.id\n                ORDER BY m.time DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getMemoryById($id)
    {
        $sql = "SELECT * FROM " . DBNAME . ".memories WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function createMemory($person_id, $memory_title, $memory_content, $location, $time, $feeling, $love)
    {
        $sql = "INSERT INTO " . DBNAME . ".memories (person_id, memory_title, memory_content, location, time, feeling, love)\n                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([
            $person_id,
            $memory_title,
            $memory_content,
            $location,
            $time,
            $feeling,
            $love
        ]);
    }

    public function updateMemory($id, $person_id, $memory_title, $memory_content, $location, $time, $feeling, $love)
    {
        $sql = "UPDATE " . DBNAME . ".memories\n                SET person_id = ?, memory_title = ?, memory_content = ?, location = ?, time = ?, feeling = ?, love = ?\n                WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([
            $person_id,
            $memory_title,
            $memory_content,
            $location,
            $time,
            $feeling,
            $love,
            $id
        ]);
    }

    public function deleteMemory($id)
    {
        $sql = "DELETE FROM " . DBNAME . ".memories WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
