<?php

namespace Myapp\Controller;

class Create extends \Myapp\Controller{

  public function post(){
    if ($SERVER['REQUEST_METHOD'] === 'POST'){
      $this->postProcess();
    }
}

protected function postProcess(){
  //validate
  try {
    $this->_validate();
  } catch (Exception $e) {
    echo $e->getMessage(). PHP_EOL;;
  }

  //create post

  //redirect home
}

private function _validate() {
    if($_POST['name'] === "" || mb_strlen($_POST['name']) > 15){
      echo "入力が不正です。";
      return false;
  }
    if($_POST['skype_id'] === ""){
      echo "入力が不正です。";
      return false;
  }
    if($_POST['female'] === "" || mb_strlen($_POST['skype_id']) > 7){
      echo "入力が不正です。";
      return false;
  }
    if($_POST['title'] === ""){
      echo "入力が不正です。";
      return false;
  }
    if($_POST['post_message'] === "" || mb_strlen($_POST['skype_id']) > 7){
      echo "入力が不正です。";
      return false;
  }
}
