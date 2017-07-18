<?php
require_once(__DIR__ . '/../config/config.php');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>スカイプちゃんねるｗ - スカイプ（Skype）掲示板ならここ！</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <head>
      <div class="container">
        <h1 id='logo'>
          <a href="/">スカイプちゃんねるｗ</a>
        </h1>
        <div class="menu">
          <ul>
            <li id="menu_post_created">投稿</li>
            <li id="menu_search">検索</li>
          </ul>
        </div><!-- menu -->
        <div id="active">
          <span id ="counter">xxx</span>人が閲覧中です。
        </div><!-- active -->
      </div><!-- container -->
    </head>
    <div id="main">
      <div class="container">
        <div class="sns">
          <ul>
            <li>Google</li>
            <li>Twitter</li>
            <li>Facebook</li>
            <li>hatena</li>
          </ul>
        </div><!-- sns -->
        <p class="site-news">
          <strong>スカイプちゃんねるｗへようこそ</strong>
          <br>
          ここはスカイプの友だちが見つかる国内最大級の掲示板です。
          <br>
          サイトに関するご意見ご提案は
          <a href="skype:skypechdotcom?chat">Skype ID:skypechdotcom</a>
          へどうぞ (๑ ˙˘˙)/
        </p>
        <div class="main">
          <div class="post">
            <form action="index.html" method="post">
              <div class="controls">
                <div class="control-group">
                  <label for="skype_id">SkypeID</label>
                  <input type="text" name="skype_id" placeholder="skype id" id="skype_id">
                </div>
                <div class="control-group">
                  <label for="post_name">SkypeID</label>
                  <input type="text" name="name" placeholder="名前"id="skype_name">
                </div>
                <div class="control-group">
                  <label for="female">性別</label>
                  <input type="radio" name="female" value="man" id="famele">男
                  <input type="radio" name="female" value="woman" id="famele">女
                  <input type="radio" name="female" value="unknown" id="famele">不明
                </div>
                <div class="control-group">
                  <label for="post_title">タイトル</label>
                  <input type="text" name="title" placeholder="タイトル" id="title">
                </div>
                <div class="control-group">
                  <label for="post_message">メッセージ</label>
                  <textarea rows="6" cols="50" class="span8" placeholder="メッセージ" id="post_message"></textarea>
                </div>
                <div class="control-group">
                  <label for="post_password">パスワード</label>
                  <input type="password" name="password" placeholder="パスワード" id="post_password">
                </div>
                <button type="submit">submit</button>
              </div>
            </form>
          </div>
        </div>
    <footer>
      <div class="container">
        <div class="footer-parts">
          <section>
            <h2>
              スカイプチャンネルの
              <br>
              コンテンツ
            </h2>
            <ul>
              <h3>スカイプ掲示板</h3>
              <li><a href="#">スカイプちゃんねるの使い方</a></li>
              <li><a href="#">スカイプ掲示板新着一覧</a></li>
              <li><a href="#">スカイプ掲示板に書き込む</a></li>
              <li><a href="#">タグランキング</a></li>
              <li><a href="#">スカイプちゃんねる検索</a></li>
              <li><a href="#">スカイプちゃんねる利用規約</a></li>
              <li><a href="#">ログイン</a></li>
            </ul>
          </section>

          <section>
            <h2>
              スカイプちゃんねるの
              <br>
              運営情報（問い合わせ先）
            </h2>
            <ul>
              <li>
                <ul>
                  <h3>Twitter</h3>
                  <li><a href="#">@skypech</a></li>
                </ul>
                </li>
              <li>
                <ul>
                    <h3>Skype</h3>
                    <li><a href="#">skypechdotcom</a></li>
                </ul>
              </li>
              <li><a href="#"><strong>削除人ボランティア募集中！</strong></a></li>
              <li><a href="#"><strong>広告掲載について</strong></a></li>
            </ul>
          </section>

          <section>
            <h2>リンク</h2>
            <ul>
              <li><a href="#">バンドちゃんねる - バンドメンバー募集掲示板</a></li>
            </ul>
          </section>
        </div>
        <div class="copyright">
          <p>
            <a href="mailto:hello@skypech.com">スカイプちゃんねるｗ</a>
          </p>
          <p>
            スカイプちゃんねるに掲載されている全ての情報を無断で複製することを禁じます
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
