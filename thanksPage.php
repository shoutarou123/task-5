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
  <title>checkPage</title>
  <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
  <?php include 'header.php'; ?>
  <main>

    <p>ご予約ありがとうございました</p>

  </main>
  <?php include 'footer.php'; ?>
</body>
