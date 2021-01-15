<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">

</head>
<body>

<main class="main">
  <div class="container">
    <!-- Head[Start] -->
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid" style="position:relative;">
          <div class="navbar-header">
            <a class="navbar-brand aaa" href="select.php">データ一覧</a>
            <a class="navbar-brand aaa" href="index.php">データ登録</a>
            <!-- <a class="navbar-brand aaa" href="logout.php">ログアウト</a> -->
          </div>
        </div>
      </nav>
    </header>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div class="form-wrapper_select">
      <h1 class="form_title">おすすめ本登録</h1>
      <!--本選択フォーム-->
      <form method="post" action="insert.php" enctype="multipart/form-data">
        <p class="pThumb"><img src="./img/dummy_image.png" width="100"></p>
        <dl class="form-inner">
            <dt class="form-title_select">画像：</dt>
            <dd class="form-item"><input type="file" name="fname" class="input" accept="image/*"></dd>
            <dt class="form-title_select">ブックタイトル：</dt>
            <dd class="form-item"><input class="input" type="text" name="bookName" required></dd>
            <dt class="form-title_select">URL：</dt>
            <dd class="form-item"><input class="input input_alphanumeric" type="text" name="bookUrl" required></dd>
            <dt class="form-title_select">コメント：</dt>
            <dd class="form-item"><textarea class="comment" name="bookComment" id="" cols="30" rows="10"></textarea></dd>
        </dl>
        <div style="text-align:center;">
        <input class="sub_btn" type="submit" value="送信">
        <input class="sub_btn" type="reset" value="リセット">
        </div>
      </form>
    </div>
  </div>
</main>
<!-- Main[End] -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>


