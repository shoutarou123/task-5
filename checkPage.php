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
    </head>

    <body>
      <?php include 'header.php'; ?>
      <main>
        <div class="check_content">
          <p>席予約確認</p>
          <form method="POST" action="index.php">
            <div>
              <label>お名前</label>
              <span>
                <?php echo htmlspecialchars($_SESSION['form']['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
              </span>
              <input type="hidden" name="name" value="<?php echo htmlspecialchars($_SESSION['form']['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

            </div>
            <div>
              <label>希望席</label>
              <span>
                <?php echo htmlspecialchars($_SESSION['form']['position'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
              </span>
              <input type="hidden" name="position" value="
              <?php echo htmlspecialchars($_SESSION['form']['position'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

            </div>
            <div>
              <label>メールアドレス</label>
              <span>
                <?php echo htmlspecialchars($_SESSION['form']['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
              </span>
              <input type="hidden" name="email" value="
              <?php echo htmlspecialchars($_SESSION['form']['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

            </div>
            <div>
              <label>電話番号</label>
              <span>
                <?php echo htmlspecialchars($_SESSION['form']['tel'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
              </span>
              <input type="hidden" name="tel" value="
              <?php echo htmlspecialchars($_SESSION['form']['tel'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

            </div>
            <button type="submit" name="back">戻る</button>
          </form>
        </div>


        <form method="POST" action="thanksPage.php">
          <button type="submit" name="submit">送信</button>
        </form>
      </main>
      <?php include 'footer.php'; ?>
    </body>
