<?php session_start();
$name = $_SESSION['form']['name'] ?? '';
$position = $_SESSION['form']['position'] ?? '';
$email = $_SESSION['form']['email'] ?? '';
$tel = $_SESSION['form']['tel'] ?? '';
unset($_SESSION['form']);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>thanksPage</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Protest+Strike&display=swap" rel="stylesheet">
</head>

<body>
  <?php include 'subHeader.php'; ?>
  <main>
    <div class="thanks_content">
      <p>ご予約ありがとうございました</p>
    </div>
  </main>
  <?php include 'footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./js/accordion.js"></script>
</body>
