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

  </main>
  <footer>
    <img src="/img/logo.png" />
  </footer>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/js/index.js"></script>
</body>

</html>
