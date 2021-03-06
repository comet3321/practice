<?php


require_once(__DIR__ . '/config.php');
  //接続


try {
  $pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo $e->getMessage(), PHP_EOL;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  //validate
  if($_POST['tags'] === "" || $_POST['name'] === "" || $_POST['title'] === "" || $_POST['skype_id'] === "" ||
    $_POST['post_message'] === "" || $_POST['female'] === "" || $_POST['password'] === ""){
    echo "未入力の箇所があります。";
    return false;
  }else{
    $tag = $_POST['tags'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $skype_id = $_POST['skype_id'];
    $post_message = $_POST['post_message'];
    $female = $_POST['female'];
    $password = hash_hmac('sha256', $_POST['password'], 'dheqeuiqwehfg');
  }
  //挿入

  //posts
  $stmt = $pdo->prepare('insert into posts(tags, name, title, skype_id, message, female, password) values(?, ?, ?, ?, ?, ?, ?)');
  $stmt->execute([$tag, $name, $title, $skype_id, $post_message, $female, $password]);

  //tags

  //タグに挿入された値の数を調べる
  $tags = explode(',',$tag);
  $count_result = count($tags);
  //タグの値が一つの場合
  if ($count_result == '1') {
    $sth = $pdo->prepare('insert into tags(tags) value(:tag)');
    $sth->bindParam(':tag', $tag);
    $sth->execute();
  }
  //タグの値が二つ以上の場合
  if ($count_result >= '2') {
    foreach ($tags as $row) {
      $sth = $pdo->prepare('insert into tags(tags) value(:tag)');
      $sth->bindParam(':tag', $row);
      $sth->execute();
    }}elseif($count_result > '5'){
    echo 'タグは一度に5つまでしか使えません。';
  }


}
