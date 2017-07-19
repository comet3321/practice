<?php

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
  }

try {
  mb_language("japanese");
  mb_internal_encoding("EUC-JP");
  $to = "example@example.com";
  $subject = $id."がやばい";
  $body = "確認して消しててねてｓｔ";
  $from = "example@example.com";
  mb_send_mail($to,$subject,$body,"From:".$from);
  echo '通報完了';

} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
