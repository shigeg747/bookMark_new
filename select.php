<?php

session_start();
include("funcs.php");
// loginCheck();

//1. DB接続します
$pdo = db_connect();


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
// $view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("エラー:".$error[2]);

} else {

 //Selectデータの数だけ自動でループしてくれる
 $kid = "";
  $query = "SELECT * FROM gs_bm_table";
  $result = $pdo->query($query);
  foreach ($result as $row) {
    $kid .= "<tr>";
    $kid .= "<td class='list_item photos'><img src='./img/".$row['fname']."'"."class='photos'></td>";
    $kid .= "<td class='list_item'>".$row['bookName']."</td>";
    $kid .= "<td class='list_item'>".$row['bookComment']."</td>";
    $kid .= "<td class='list_item'>";
    $kid .= '<a class="aaa" href="'.$row['bookUrl'].'"target="_blank">';
    $kid .= "URL</td>";
    $kid .= "<td class='list_item'>";
    $kid .= '<a class="aaa" href="bm_update_view.php?id='.$row['id'].'">';
    $kid .= '修正';
    $kid .= '</a>'."</td>";
    $kid .= "<td class='list_item'>";
    $kid .= '<a class="aaa" href="delete.php?id='.$row['id'].'">';
    $kid .= '削除';
    $kid .= '</a>'."</td>";
    $kid .= "</tr>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>おすすめの本一覧</title>
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
            <a class="navbar-brand aaa" href="index.html">データ登録</a>
            <!-- <a class="navbar-brand aaa" href="logout.php">ログアウト</a> -->
          </div>
        </div>
      </nav>
    </header>
    <!-- Head[End] -->
    <div class="space"></div>
    <!-- Main[Start] -->
    <table class="table">
      <thead>
        <tr>
          <th class="txcenter">装丁</th>
          <th class="txcenter">本の名前</th>
          <th class="txcenter">コメント</th>
          <th class="txcenter">URL</th>
          <th class="txcenter">修正</th>
          <th class="txcenter">削除</th>
        </tr>
      </thead>
      <tbody>
        <?=$kid?>
      </tbody>
    </table>

  </div>
</main>

<!-- Main[End] -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
