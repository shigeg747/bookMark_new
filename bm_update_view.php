<?php

session_start();
include("funcs.php");
// loginCheck();

$id = $_GET["id"];

//1. DB接続します
$pdo = db_connect();

$sql = "SELECT * FROM gs_bm_table WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view = "";
if($status==false){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
} else {
  $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style> -->
</head>
<body>

<main class="main">
  <div class="container">
    <!-- Head[Start] -->
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="select.php">データ一覧</a>
            <a class="navbar-brand" href="index.php">データ登録</a>
            <!-- <a class="navbar-brand" href="index.html">ログアウト</a> -->
          </div>
        </div>
      </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div class="form-wrapper_select">
      <h1 class="form_title">更新</h1>
      <form method="post" action="bm_update.php" enctype="multipart/form-data">
        <p class="pThumb"><img src="./img/<?=$row['fname']?>" width='100'></p>
        <dl class="form-inner">
        <dt class="form-title_select">画像：</dt>
            <dd class="form-item"><input class="input" type="file" name="fname" accept="image/*" value="<?=$row['fname']?>"></dd>
            <dt class="form-title_select">ブックタイトル：</dt>
            <dd class="form-item"><input class="input" type="text" name="bookName" value="<?=$row['bookName']?>"></dd>
            <dt class="form-title_select">URL：</dt>
            <dd class="form-item"><input class="input" type="text" name="bookUrl" value="<?=$row['bookUrl']?>"></dd>
            <dt class="form-title_select">コメント：</dt>
            <dd class="form-item"><textarea class="comment" name="bookComment" id="" cols="30" rows="10"><?=$row['bookComment']?></textarea></dd>
            <input type="hidden" name="id" value="<?=$row['id']?>">
        </dl>
        <div style="text-align:center;"><input class="sub_btn" type="submit" value="更新"></div>
      </form>
    </div>
  </div>
</main>
<!-- Main[End] -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
