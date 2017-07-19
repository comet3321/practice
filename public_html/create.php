<?php
require_once(__DIR__ . '/config.php');

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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-2219839-6', 'auto');
      ga('send', 'pageview');
</script>
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>
    <header>
      <div class="container">
        <h1 id="logo" class="clearText">
          <a href="/">スカイプちゃんねるｗ</a>
        </h1>
        <div class="menu">
          <ul class="clearText">
            <li id="menu_post_created">投稿</li>
            <li id="menu_search">検索</li>
          </ul>
        </div><!-- menu -->
        <div id="active">
          <span id ="counter">1204</span>
        </div><!-- active -->
      </div><!-- container -->
    </header>
    <div id="main">
      <div class="container">
        <div class="social">
          <!-- google +1 -->
          <div class="g-plusone" data-size="medium" data-annotation="none" data-href="http://skypech.com"></div>
          <!-- twitter -->
          <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          <!-- facebook -->
          <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fskypech&amp;send=false&amp;layout=button_count&amp;width=110&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=216653671686902" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe>
          <!-- hatebu -->
          <a href="http://b.hatena.ne.jp/entry/http://skypech.com" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        </div><!-- .social -->
<p class="site-news">
        <p class="site-news">
          <strong>スカイプちゃんねるｗへようこそ</strong>
          <br>
          ここはスカイプの友だちが見つかる国内最大級の掲示板です。
          <br>
          サイトに関するご意見ご提案は
          <a href="skype:skypechdotcom?chat">Skype ID:skypechdotcom</a>
          へどうぞ (๑ ˙˘˙)/
        </p>
        <div class="post-stage">
          <h2>スカイプ掲示板に募集する</h2>
          <form action="actions.php" method="post">
            <div class="controls">
              <div class="control-group">
                <label for="skype_id">SkypeID</label>
                <input type="text" name="skype_id" placeholder="skype id" id="skype_id">
              </div>
              <div class="control-group">
                <label for="post_name">名前</label>
                <input type="text" name="name" placeholder="名前"id="skype_name">
              </div>
              <div class="control-group post-radio">
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
                <textarea rows="6" cols="50" placeholder="メッセージ" name="post_message" id="post_message"></textarea>
              </div>
              <div class="control-group">
                <label for="post_password">パスワード</label>
                <input type="password" name="password" placeholder="パスワード" id="post_password">
              </div>
              <button type="submit">この掲示板に募集する</button>
            </div>
          </form>
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
            <h3>スカイプ掲示板</h3>
            <ul>
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
            <h3>Twitter</h3>
              <ul>
                <li><a href="#">@skypech</a></li>
              </ul>
              </li>
              <h3>Skype</h3>
              <ul>
                  <li><a href="#">skypechdotcom</a></li>
              </ul>
              <li><a href="#"><strong>削除人ボランティア募集中！</strong></a></li>
              <li><a href="#"><strong>広告掲載について</strong></a></li>
            </ul>
          </section>

          <section class="last_section">
            <h2>リンク</h2>
            <ul>
              <li><a href="#">バンドちゃんねる - バンドメンバー募集掲示板</a></li>
            </ul>
          </section>
        </div>
        <div class="copyright">
          <p>
            <a href="mailto:hello@skypech.com">© スカイプちゃんねるｗ</a>
          </p>
          <p>
            スカイプちゃんねるに掲載されている全ての情報を無断で複製することを禁じます
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
