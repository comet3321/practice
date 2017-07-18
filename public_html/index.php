<?php
require_once(__DIR__ . '/../config/config.php');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>スカイプちゃんねるｗ - スカイプ（Skype）掲示板ならここ！</title>
    <link rel="stylesheet" href="/css/normalize.css">
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
        <div class="btn-post-create">
          <a href="#">投稿する</a>
        </div>
        <div class="tag-menu">
          <ul>
            <li>通話</li>
            <li>寝落ち</li>
          </ul>
          <a href="#">タグリスト</a>
        </div><!-- tagu-menu -->
        <h2>スカイプちゃんねる掲示板</h2>
        <a href="#">↓</a>
        <div class="posts">
          <p>投稿一覧</p>
        </div>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
        </ul>
      </div><!-- container -->
    </div><!-- main -->
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
