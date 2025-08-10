    <?php session_start();
    $_SESSION['form'] = $_POST;
    ?>

    <!DOCTYPE html>
    <html lang="ja">

    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>checkPage</title>
      <link rel="stylesheet" href="/css/style.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Protest+Strike&display=swap" rel="stylesheet">
    </head>

    <body>
      <?php include 'header.php'; ?>
      <main>
        <div class="check_content">
          <p class="check_title">席予約確認</p>
          <div class="flex">
            <div class="gap">
              <label class="check_label">お名前</label>
              <label class="check_label">希望席</label>
              <label class="check_label">メールアドレス</label>
              <label class="check_label">電話番号</label>
            </div>
            <form class="gap" method="POST" action="index.php#subscription_title">
              <div class="input_detail">
                <?php echo htmlspecialchars($_SESSION['form']['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($_SESSION['form']['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
              </div>
              <div class="input_detail">
                <?php echo htmlspecialchars($_SESSION['form']['position'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                <input type="hidden" name="position" value="<?php echo htmlspecialchars($_SESSION['form']['position'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
              </div>
              <div class="input_detail">
                <?php echo htmlspecialchars($_SESSION['form']['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($_SESSION['form']['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
              </div>
              <div class="input_detail">
                <?php echo htmlspecialchars($_SESSION['form']['tel'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                <input type="hidden" name="tel" value="<?php echo htmlspecialchars($_SESSION['form']['tel'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
              </div>
          </div>

          <div class="flex_button">
            <div>
              <button class="button back" type="submit" name="back">戻る</button>
            </div>
            </form>
            <div>
              <form method="POST" action="thanksPage.php">
                <button class="button submit" type="submit" name="submit">送信</button>
              </form>
            </div>
          </div>

        </div>
      </main>
      <?php include 'footer.php'; ?>
    </body>
