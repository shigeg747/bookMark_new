<?php

session_start();
include("funcs.php");
// loginCheck();


//入力チェック(受信確認処理追加)
if(
  !isset($_POST["bookName"]) || $_POST["bookName"]=="" ||
  !isset($_POST["bookUrl"]) || $_POST["bookUrl"]==""
  // !isset($_POST["bookComment"]) || $_POST["bookComment"]==""
){
  exit('ParamError');
}


//----------------------------------------------------
//1. POSTデータ取得
//----------------------------------------------------
$fname  = $_FILES["fname"]["name"];   //File名
$bookName = $_POST["bookName"];
$bookUrl = $_POST["bookUrl"];
$bookComment = $_POST["bookComment"];

//1-2. FileUpload処理
$upload = "./img/";
//アップロードした画像を./img/へ移動させる記述↓
if(move_uploaded_file($_FILES['fname']['tmp_name'], $upload.$fname)){
  //FileUpload:OK
} else {
  //FileUpload:NG
  echo "Upload failed";
  echo $_FILES['fname']['error'];
}



//2. DB接続します(エラー処理追加)

$pdo = db_connect();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, bookName, bookUrl, bookComment, fname, date)VALUES(NULL, :a1, :a2, :a3, :a4,sysdate())");
$stmt->bindValue(':a1', $bookName, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $bookUrl, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $bookComment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $fname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("エラーメッセージ:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>
