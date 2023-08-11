<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
  ?>
</head>

<body>
  <!-- Construction badge: <img src="./static/img/under-construction.png" class="under-construction-badge" /> -->
  <!-- <img
      src="./static/img/under-construction.png"
      class="under-construction-badge"
      alt="Under construction badge"
      title="Bạn muốn góp ý cho website? Bấm vào ảnh nhé..."
    /> -->
  <!-- Popup alert showing Figma design -->
  <!-- <div id="floating-footer-alert">
      <span id="alert-close-btn">&times;</span>
      <h3>👋 Xin chào đằng ấy!</h3>
      <p>
        Trang web hiện tại vẫn đang được phát triển và hoàn thiện. Tuy nhiên bạn
        cũng có thể xem qua bản thiết kế của trang web này tại:
        <a
          href="https://www.figma.com/file/cHrOJ4ASoJUWielefafzzC/Life-Of-Tunna"
          target="_blank"
          >Figma</a
        >
        để dễ hình dung. Và nếu có thể thì cho mình xin một feedback qua trang
        <a
          href="https://github.com/tunnaduong/everything-about-tunnaduong/issues"
          target="_blank"
          >Issues của GitHub</a
        >
        nhé! ❤️
      </p>
    </div> -->
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
  ?>
  <div class="main">
    <div class="main--section-1">
      <h1>
        <a href="/nhat-ky-hang-ngay" class="no-color">
          Nhật ký<br />hằng ngày
        </a>
      </h1>
      <div class="section--content">
        <?php
        mysqli_select_db($db2, 'tunnaduong_everyday');
        $sql = "SELECT * FROM timeline ORDER BY id DESC LIMIT 3";
        $result = $db2->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>

            <div class="content--card">
              <a class=" no-color" href="https://everyday.tunnaduong.com" target="_blank">
                <p id="everyday-date-<?php echo $row['id'] ?>" class="card--date">
                  <?php echo $row['date']; ?>
                </p>
                <p class="card--summary"><?php echo $row['title']; ?></p>
              </a>
            </div>
            <script>
              $("#everyday-date-<?php echo $row['id']; ?>").text(moment('<?php echo $row['date']; ?>').format(
                'DD/MM/YYYY'));
            </script>
        <?php
          }
        } else {
          echo "0 kết quả";
        }
        $db2->close();
        ?>
      </div>
    </div>
    <div class="main--section-2">
      <h1>
        <a href="https://blog.tunnaduong.com" class="no-color">
          Bài viết<br />blog
        </a>
      </h1>
      <div class="section--content">
        <?php
        mysqli_select_db($db3, 'tunnaduong_blog');
        $sql = "SELECT * FROM wp_posts WHERE post_type = 'post' AND post_name != 'quote' AND post_status != 'draft' ORDER BY id DESC LIMIT 3";
        $result = $db3->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>

            <div class="content--card"">
                <a class=" no-color" href=" <?php echo $row['guid'] ?>" target="_blank">
              <p id="blog-date-<?php echo $row['ID'] ?>" class="card--date">
                <?php echo $row['post_date']; ?>
              </p>
              <p class="card--summary"><?php echo $row['post_title']; ?></p>
              </a>
            </div>
            <script>
              $("#blog-date-<?php echo $row['ID']; ?>").text(moment('<?php echo $row['post_date']; ?>').format(
                'DD/MM/YYYY'));
            </script>
        <?php
          }
        } else {
          echo "0 kết quả";
        }
        $db3->close();
        ?>
      </div>
    </div>
    <div class="main--section-3">
      <h1>Những người<br />đã gặp</h1>
      <div class="section--content people-i-met">
        <div class="people-thumb">
          <img src="./static/img/people/linhngo.jpg" alt="Ngô Nguyễn Thảo Linh" />
          <div class="people-details">
            <img src="./static/img/people/linhngo.jpg" alt="Ngô Nguyễn Thảo Linh" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static/img/people/thanhcong.png" alt="Phạm Thành Công" />
          <div class="people-details">
            <img src="./static/img/people/thanhcong.png" alt="Phạm Thành Công" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static/img/people/phanducmanh.png" alt="Phan Đức Mạnh" />
          <div class="people-details">
            <img src="./static/img/people/phanducmanh.png" alt="Phan Đức Mạnh" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static/img/people/luongquangthang.png" alt="Lương Quang Thắng" />
          <div class="people-details">
            <img src="./static/img/people/luongquangthang.png" alt="Lương Quang Thắng" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static/img/people/hongquan.png" alt="Đỗ Hồng Quân" />
          <div class="people-details">
            <img src="./static/img/people/hongquan.png" alt="Đỗ Hồng Quân" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static/img/people/haquangthang.png" alt="Hà Quang Thắng" />
          <div class="people-details">
            <img src="./static/img/people/haquangthang.png" alt="Hà Quang Thắng" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm" />
          <div class="people-details">
            <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương" />
          <div class="people-details">
            <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div class="people-thumb">
          <img src="./static//img/people/buihien.png" alt="Bùi Thu Hiền" />
          <div class="people-details">
            <img src="./static//img/people/buihien.png" alt="Bùi Thu Hiền" />
            <div class="details">
              <p class="details--name">Ngô Nguyễn Thảo Linh</p>
              <p class="details--summary">3 kỉ niệm cùng nhau</p>
            </div>
          </div>
        </div>
        <div id="additional-number">+26</div>
      </div>
    </div>
    <div class="main--section-4">
      <h1>Mọi người nghĩ<br />gì về mình</h1>
      <div class="section--content">
        <div class="content--card card--people">
          <img src="./static/img/people/lelam.png" alt="Lê Hoàng Tùng Lâm" />
          <div>
            <p class="people--name">Lê Hoàng Tùng Lâm</p>
            <p class="people--review">Bạn ơi đừng béo nữa</p>
          </div>
        </div>
        <div class="content--card card--people">
          <img src="./static/img/people/thienhuong.png" alt="Phạm Thị Thiên Hương" />
          <div>
            <p class="people--name">Hương xinh</p>
            <p class="people--review">Giảm cân đi cậu nhé!</p>
          </div>
        </div>
        <div class="content--card card--people">
          <img src="./static/img/people/buihien.png" alt="Bùi Thu Hiền" />
          <div>
            <p class="people--name">Bùi Thu Hiền</p>
            <p class="people--review">
              Chúc đỗ nguyện vọng mong ước, luôn dui dẻ, hạnh phúc với những
              quyết định của mình nho
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <center>
    <footer>
      <p class="footer--copyright">
        <span id="footer--mobile">© 2022-<?php echo date("Y") ?> Duong Tung Anh<br /><span style="color: gray; font-weight: 300; font-size: 15px">All rights reserved</span></span>
        <span id="footer--desktop">© 2022-<?php echo date("Y") ?> Duong Tung Anh. All rights reserved.</span>
      </p>
      <p class="footer--fun">
        Được làm bằng 💕 <i>tình yêu</i>, 🔥 <i>nhiệt huyết</i>, ⌨️
        <i>bàn phím</i> và rất nhiều ☕️ <i>cà phê</i>.
      </p>
    </footer>
  </center>
  <script src="/static/js/script.js"></script>
</body>

</html>