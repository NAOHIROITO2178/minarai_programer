<!DOCTYPE html>
<html lang = "ja">
  <head>
    <meta charset = "UTF-8">
    <title>アプリ紹介</title>
    <link rel = "stylesheet" href = "https://naohiroito2178.github.io/minarai_programer/style.css"/>
  </head>
  <body>
    <header>
     <h1>お気に入りアプリの紹介</h1>
     <img src = "" width="200px" height="200px" alt = "簡単な自画像です。" >
     <h2>NAOHIRO</h2>
     
     <p>Webフロントエンド及びソフトウェアエンジニアの見習いです。</p>
    </header>
    <section>
      <h1>私が好きなアプリランキング</h1>
      <div class = "Rank1">
        <h3>第1位 Disneyツムツム</h3>
        <img src = "" width="200px" height="200px" alt="ディズニーツムツムの画像です。">
        <p>このアプリは、ディズニーキャラクターたちがかわいいツムツムになっており、<br>
          それらをつなげて消していきながらポイントを稼ぐという心地いいゲームです。<br>
          私は、このアプリを楽しむ者同士でLINEグループを作ったことがあります。(笑)</p>
        <h4>気になった方はこちらからどうぞ！↓</h4>
        <a href = "https://apps.apple.com/jp/app/line-%E3%83%87%E3%82%A3%E3%82%BA%E3%83%8B%E3%83%BC-%E3%83%84%E3%83%A0%E3%83%84%E3%83%A0/id724594093" target = "_blank">AppStoreへ</a>
        <a href = "https://play.google.com/store/apps/details?id=com.linecorp.LGTMTM&hl=ja&gl=US" target = "_blank">GooglePlayStoreへ</a>
      </div>
      <div class ="Rank2">
        <h3>第2位 MineCraft</h3>
        <img src = "" width="200px" height = "150px" alt = "マイクラの画像です。">
        <p>このアプリは、プレイヤーはクラフターと呼ばれる主人公になり、建物を造ったり、狩りをしたり、<br>
          料理をしたり、武器をしたり、襲い掛かるモンスターを倒したりと、自由自在な冒険ができるゲームです。<br>
          私はこのアプリの中で、プールやテニスコート付きの大豪邸を1週間ぐらいかけて作ったことがあります！</p>
        <h4>気になった方はこちらからどうぞ！↓</h4>
        <a href = "https://apps.apple.com/jp/app/minecraft/id479516143" target = "_blank">AppStoreへ</a>
        <a href = "https://play.google.com/store/apps/details?id=com.mojang.minecraftpe&hl=ja&gl=US" target = "_blank"> GooglePlayStoreへ</a>
      </div>
      <div class ="Rank3">
        <h3>第3位 アキネーター</h3>
        <img src = "" width="200px" height = "200px" alt = "アキネーターの画像です。">
        <p>このアプリは、プレイヤーは人物やキャラクター、動物、地名などを頭の中で思い浮かべ、アキネーターと<br>
          呼ばれる魔人が、質問してそれを当てていくゲームです。<br>私も最初はにわかに信じられませんでしたが、
          やってみたらガチでした(笑)</p>
        <h4>気になった方はこちらからどうぞ！↓</h4>
        <a href = "https://apps.apple.com/jp/app/akinator/id933135994" target = "_blank">AppStoreへ </a>
        <a href = "https://play.google.com/store/apps/details?id=com.digidust.elokence.akinator.freemium&hl=ja&gl=US" target = "_blank"> GooglePlayStoreへ</a>
      </div>
    </section>
    <br>
    <br>
    <footer>
      フォローよろしくお願いします！<br>
      <a href = "https://twitter.com/NAOHIRO61385981" target = "_blank">Twitterアカウントへ</a>
      <a href = "https://www.facebook.com/profile.php?id=100069971394042"target = "_blank" >facebookアカウントへ
      </a>
      <br>
    </footer>
    ----------------------------------------------------------------------------------------------------------<br>
    <form action = "" method = post>
    <div class = "form" >
    <div class = "title">お問い合わせ</div>
    <div class = "name">名前<br>
      <input type= "text" name = "name">
    </div>
    <div class= "email">Email<br>
      <input type= "text" name="email">
    </div>
    <div class = "text">内容</div><br>
    <textarea name = "body"></textarea>
    </div>
    </form>
    <?php
     $strone = $_POST["name",w];
     $strtwo = $_POST["email",w];
     $strthree = $_POST["body",w];
     echo $strone."を受け取りました。";
     echo $strtwo."を受け取りました。";
    　echo $strthree."を受け取りました。";
     ?>
  </body>
</html>
