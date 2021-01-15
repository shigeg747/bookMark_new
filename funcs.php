<?php


//XSS対応関数
function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

//LOGIN認証チェック関数
function loginCheck(){
  if( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    echo "LOGIN Error!";
    exit();
  } else {
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
  }
}

//DB接続localhost
function db_connect(){
  try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
  return $pdo;
}

//DB接続本番
// function db_connect(){
//   try {
//     $pdo = new PDO('mysql:dbname=shigeg_ccdb;charset=utf8;host=mysql1030.db.sakura.ne.jp','shigeg','YumemigaChina1467GeRuGugu');
//   } catch (PDOException $e) {
//     exit('DbConnectError:'.$e->getMessage());
//   }
//   return $pdo;
// }



?>
