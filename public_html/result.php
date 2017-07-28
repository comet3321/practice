<?php
require_once(__DIR__ . '/config.php');

try {
  //接続
  $pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}

if (isset($_POST['skype_id'])) {
  //validatte必要
  $id = $_POST['skype_id'];
  $sql_result = $pdo->query("select * from posts where skype_id = '$id'");
}
if (isset($_POST['tag'])) {
  //validatte必要
  $tag = $_POST['tag'];
  $sql_result = $pdo->query("select * from posts where tags like '%$tag%'");
}
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
     <header>
       <div class="container">
         <h1 id="logo" class="clearText">
           <a href="/">スカイプちゃんねるｗ</a>
         </h1>
         <div class="menu clearText">
          <a href="#" id="menu_post_created">投稿</a>
          <a href="serch.php" id="menu_search">a</a>
         </div><!-- menu -->
         <div id="active">
           <span id ="counter">1204</span>
         </div><!-- active -->
       </div><!-- container -->
     </header>
     <div id="main">
       <div class="container">
         <p class="site-news">
           <strong>スカイプちゃんねるｗへようこそ</strong>
           <br>
           ここはスカイプの友だちが見つかる国内最大級の掲示板です。
           <br>
           サイトに関するご意見ご提案は
           <a href="skype:skypechdotcom?chat">Skype ID:skypechdotcom</a>
           へどうぞ (๑ ˙˘˙)/
         </p>
         <div class="btn-post-create clearText">
           <a href="/create.php">スカイプ掲示板に投稿する</a>
         </div>
         <div class="tag-menu">
           <ul>
             <li>通話</li>
             <li>寝落ち</li>
           </ul>
           <a href="#">タグリスト</a>
         </div><!-- tagu-menu -->
         <div class="post-title">
           <h2>スカイプちゃんねる掲示板</h2>
           <a href="#">↓</a>
           </br>
         </div>
         <div class="posts-row">
           <p>'<?php if (isset($id)) {echo $id ;
           }else{echo $tag;} ?>'の検索結果</p>
           <dl>
             <?php $i = 0; ?>
             <?php foreach ($sql_result as $row) : ?>
             <?php $i++ ?>
             <div class="post <?php if($i ===2 || $i === 5 ||$i === 8){echo 'post-center';} ?>">
               <dt class="<?= h($row["female"]) ?>">
               <div class="post-name">
                 <span><?= h($row["name"]) ?></span>
               </div>
               <div class="skype-id">
                 <span><?= h($row["skype_id"]) ?></span><br>
               </div>
               </dt>
               <dd>
                   <span class="tags"><?= h($row["tags"]) ?></span>
                 <span><?=  nl2br(h($row["message"])) ?></span>
                 <a href="#" class="post-violation">通報</a>
               </dd>
             </div>
             <?php endforeach; ?>
           </dl>
         </div><!-- posts-stage -->
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
