<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>task-5</title>
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
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
      <p class="title">スケジュール</p>
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
    </div>

    <p class="title">アクセス</p>
    <p class="address">〒771-1154 徳島県徳島市応神町東貞方面川淵</p>
    <iframe src="https://maps.google.co.jp/maps?output=embed&q=吉野川北岸ソフトボール場"></iframe>

  </main>
  <footer>
    <img src="/img/logo.png" />
  </footer>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/js/index.js"></script>
  <script src="/js/scheduleBtn.js"></script>
</body>

</html>
