<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
    </head>

<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");    
    ?>
    <a href="index.php"><img src="4eachblog_logo.jpg" alt="top">
    </a>
    <header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>        
    </ul>
        <br>
            </header>
    <mainleft>
            <h1>プログラミングに役立つ掲示板</h1>
        <div class = "form">
            <h2>入力フォーム</h2>
            <form method="post" action="insert.php">
            <p>ハンドルネーム</p>
            <input type="text" class="text" name="handlname">
            <p>タイトル</p>
            <input type="text" class="text" name="title">
            <p>コメント</p>
            <textarea name="comments"></textarea>
            <br>
        <div>
            <input type="submit" class="submit" value="送信する"></div>
            </form>
            </div>
        
    <?php
        while ($row = $stmt -> fetch()){
        echo "<div class = 'contents'>";
        echo "<h2>".$row['title']."</h2>";
        echo "<div class = 'comments'>";
        echo $row['comments'];
        echo "div class='handlname'post by ".$row['handlname']."</div>";
        echo "</div>";
        echo "</div>";
        }

    ?>
        
        
        </mainleft>
        
    <sidemenu>
        <h2>人気の記事</h2>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの基礎</li>
        </ul>
        <h2>オススメリンク</h2>
        <ul>
            <li>インターノウス株域会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclpseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
        <ul>
            <li>HTML</li>    
            <li>PHP</li>
            <li>MySQL</li>
            <li>Javascript</li>
        </ul>
    
    </sidemenu>
    <footer>
        <div class = "footer">
    <p>copyroght internous | 4each blog is the one which provideos A to Z about Programing.</p>
            </div>
    </footer>

    
    </body>    
</html>