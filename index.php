<?php session_start();
$name = $_POST['name'] ?? $_SESSION['form']['name'] ?? '';
$position = $_POST['position'] ?? $_SESSION['form']['position'] ?? '';
$email = $_POST['email'] ?? $_SESSION['form']['email'] ?? '';
$tel = $_POST['tel'] ?? $_SESSION['form']['tel'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>top</title>
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Protest+Strike&display=swap" rel="stylesheet">
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./img/slide_1.jpg" alt="花火画像">
        </div>
        <div class="swiper-slide">
          <img src="./img/slide_2.jpg" alt="提灯画像">
        </div>
        <div class="swiper-slide">
          <img src="./img/slide_3.jpg" alt="屋台画像">
        </div>
      </div>
      <div class="swiper-pagination"></div>

      <div class="swiper-button-prev">
        <img src="./img/slide-btn-prev.svg">
      </div>
      <div class="swiper-button-next">
        <img src="./img/slide-btn-next.svg">
      </div>
    </div>
    </div>

    <div class="catchphrase">
      <p>今年も始まる<span>夏祭り</span></p>
    </div>

    <div class="schedule_content">
      <p class="title" id="schedule_title">スケジュール</p>
      <div class="schedule_date_detail_content">
        <div class="schedule_date_content">
          <p class="active" id="date_btn_1">9月1日</p>
          <p id="date_btn_2">9月2日</p>
          <p id="date_btn_3">9月3日</p>
        </div>
        <div class="schedule_detail_content">
          <p class="schedule_detail" id="detail_1">
            9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容
          </p>
          <p class="schedule_detail hidden" id="detail_2">
            9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容
          </p>
          <p class="schedule_detail hidden" id="detail_3">
            9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容
          </p>
        </div>
      </div>

      <p class="title" id="access_title">アクセス</p>
      <p class="address">〒771-1154 徳島県徳島市応神町東貞方面川淵</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3303.482660016973!2d134.51900637617905!3d34.108391264762766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5ZCJ6YeO5bed5YyX5bK444K944OV44OI44Oc44O844Or5aC0!5e0!3m2!1sja!2sjp!4v1754746314560!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <p class="title" id="subscription_title">席予約</p>
      <form class="form_sub" method="POST" action="checkPage.php">
        <label for="name">お名前<span>*必須</span></label>
        <input class="required_form" type="text" name="name" placeholder="例）田中 太郎"
          value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>" />

        <label for="position">席の場所<span>*必須</span></label>
        <select class="required_form" name="position">
          <option value="">---</option>
          <option
            value="SS"
            <?php if ($position === 'SS') echo 'selected'; ?>>SS席</option>
          <option value="S"
            <?php if ($position === 'S') echo 'selected'; ?>>S席</option>
          <option value="A"
            <?php if ($position === 'A') echo 'selected'; ?>>A席</option>
          <option value="B"
            <?php if ($position === 'B') echo 'selected'; ?>>B席</option>
          <option value="C"
            <?php if ($position === 'C') echo 'selected'; ?>>C席</option>
        </select>

        <label for="email">メールアドレス<span>*必須</span></label>
        <input class="required_form" type="email" name="email" placeholder="例）abcd123@example.com"
          value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" />
        <span class="email_message">正しいメールアドレスを入力してください</span>


        <label for="tel">電話番号<span class="optional_text">*任意</span></label>
        <input class="tel_form" type="tel" name="tel" placeholder="例）09012345678"
          value="<?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8') ?>" />
        <span class="tel_message">正しい電話番号を入力してください</span>

        <input class="submit_button" type="submit" value="送信" disabled />
      </form>
    </div>

  </main>
  <?php include 'footer.php'; ?>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/js/accordion.js"></script>
  <script src="/js/form-validate.js"></script>
  <script src="/js/scheduleBtn.js"></script>
  <script src="/js/scroll.js"></script>
  <script src="/js/swiper.js"></script>
</body>

</html>
