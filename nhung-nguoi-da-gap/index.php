<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
    ?>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
    ?>
    <div class="main">
        <div class="main--section">
            <div class="section--top-bar">
                <h1>
                    <a href="." class="no-color">
                        Những người đã gặp
                    </a>
                    <span><i class="fas fa-chevron-down" style="font-size: 13px;"></i> Gần đây nhất</span>
                </h1>
                <span class="top-bar"><a href="/nhat-ky-hang-ngay/" class="no-color">Nhật ký hằng ngày</a></span>
                <span class="top-bar"><a href="/" class="no-color">Bài viết blog</a></span>
                <span class="top-bar"><a href="/" class="no-color">Mọi người nghĩ gì về mình</a></span>
            </div>

            <div class="section--content">
                <div class="people-list">
                    <?php
                    // $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    // $offset = ($page - 1) * 4;
                    $sql = "SELECT p.id, p.name, p.met_from, p.date_of_birth, p.avatar, COUNT(m.person_id) AS memories_count FROM people AS p LEFT JOIN memories AS m ON p.id = m.person_id GROUP BY p.id ORDER BY p.id DESC";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <div class="person">
                                <img src="<?= $row['avatar'] ?>">
                                <div class="person--detail">
                                    <h2><?= $row['name'] ?></h2>
                                    <span class="meet-time">Quen biết từ <?= date_format(date_create($row['met_from']), "m/Y") ?> - <?= DateTime::createFromFormat('Y-m-d', $row['date_of_birth'], new DateTimeZone('Asia/Ho_Chi_Minh'))
                                                                                                                                        ->diff(new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh')))
                                                                                                                                        ->y; ?> tuổi</span>
                                    <span><?= $row['memories_count'] ?> kỷ niệm cùng nhau</span>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
    ?>
    <script src="/static/js/script.js"></script>
</body>