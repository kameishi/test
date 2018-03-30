<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="utf-8">
    <title>4eachblog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
    
 <body>
     <?php
     mb_internal_encoding("utf8");
     $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
     $stmt = $pdo->query("select * from 4each_keijiban");
     ?>
    <header>
        <img src="test.jpg">
        <div class="head">
          <p>トップ</p>
          <p>プロフィール</p>
          <p>4eachについて</p>
          <p>登録フォーム</p>
          <p>問い合わせ</p>
          <p>その他</p>
        </div>
    </header>
    <main>
        <div class="right">
            <h3>人気の記事</h3>
             <p>PHPオススメ本</p>
             <p>PHP,MyAdminの使い方</p>
             <p>いま人気のエディタTop5</p>
             <p>HTMLの基礎</p>
            <h3>オススメリンク</h3>
             <p>インターノウス株式会社</p>
             <p>XAMPPのダウンロード</p>
             <p>Eclipseのダウンロード</p>
             <p>Braketsのダウンロード</p>
            <h3>カテゴリ</h3>
             <p>HTML</p>
             <p>PHP</p>
             <p>MySQL</p>
            <p>JavaScript</p>
        </div>
        <div class="left">
          <h1>プログラミングに役立つ掲示板</h1>
          <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" name="handlename" size="30px">
            <br>
            <label>タイトル</label>
            <br>
            <input type="text" name="title" size="30px">
            <br>
            <label>コメント</label>
            <br>
            <textarea rows="7" cols="50" name="comments"></textarea>
            <br>
            <input  type="submit" class="submit" value="投稿する">
          </form>
          <?php
            while($row = $stmt->fetch()){
             echo"<div class='title1'>";
             echo"<h3>".$row["title"]."</h3>";
             echo" <div class='kizi'>";
             echo $row["comments"];
             echo"<div class='handlename'>posted by".$row["handlename"]."</div>";
             echo"</div>";
             echo"</div>";
            }
          ?>
          <div class="title2">
            <h2>タイトル</h2>
            <div class="kizi">
              記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>
              記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>
              記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>
            </div>
            posted by 通りすがり
          </div>
        </div>
    </main>
    <footer>
        copyright internous | 4each blog is the one which provides A to Z about programming.
    </footer> 
 </body>       
</html>