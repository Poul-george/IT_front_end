<?php
session_start();
// var_dump($_SESSION["array"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フロントエンドエンジニア</title>
  <link rel="stylesheet" href="style_frontend2_pc.css">
</head>
<body>


<?php if($_SESSION["array"] !== "") {?>
  <script src="kaitou.js"></script>

  
  <div class="body_div" >
    <h1 class="top_h1">○ フロントエンドエンジニア</h1>
    <div class="description_div">
      <p class="description">
        あなたがフロントエンドエンジニアになる上で、力不足な項目に対して、本・動画・その他コンテンツ（記事、Webサービス等）をおすすめしています。</br>
      ※ 以下の『問題解決能力』/『コミュニケーション能力』/『必須スキル・専門知識』は押すとページが切り替わります！
      </p>
    </div>

    <div class="midasi_div">
      <h2 class="midasi_h2_1 active" data-id="monndai">問題解決能力</h2>
      <h2 class="midasi_h2_1 www" data-id="komini">コミュニケーション力</h2>
      <h2 class="midasi_h2_1 " data-id="gizyutu">必須スキル・専門知識</h2>
    </div>

  <!-- No.2 -->
    <div class="kekka active" id="monndai">
      <?php if($_SESSION["array"]["answer2"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">問題解決能力</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">世界一やさしい問題解決の授業 [ 渡辺健介 ]</h4>
                <p class="guide_p"> ロジカルシンキング ・問題解決の考え方を中高生にもわかるように解説した本です。薄くてわかりやすいく、内容的には十分で、10年以上支持され続けている本でもあります。</p>
              </div>
              <div class="xxx"> 
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=12062570&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0496%2F9784478000496.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >世界一やさしい問題解決の授業 [ 渡辺健介 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">一生モノの問題解決メソッド｜<br/>あとから条件が整ってくる『宇宙の法則』</h4>
                <p class="guide_p">YouTube講演家 鴨頭嘉人（かもがしら よしひと）さんの経験から話す、問題解決への行動力やそのやり方、条件いついての動画です。</p>
              </div>
              <div class="xxx">
                <iframe class="youtube" width="560" height="300" src="https://www.youtube.com/embed/aL2KGPuDLQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer2"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">問題解決能力</h2>   
          <p class="message">あなたは問題解決能力が備わっていると考えられます。</p>
        </div>
      <?php }?>
    </div>
    
    <!-- No.3 -->
    <div class="kekka" id="komini">
      <?php if($_SESSION["array"]["answer3"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">コミュニケーション(雑談力)</h2>
          <div>
            
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">超一流の雑談力「超・実践編」 [ 安田正 ]</h4>
                <p class="guide_p"> この本は、ビジネスマン向けコミュニケーション(雑談力)の実践型本になります。そして本書の中で会話例がたくさん出てきますので分かりやすい本になっています。</p>
              </div>
              <div class="xxx"> 
                <table class="rukuten" border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>  
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">【一流の雑談力①】<br/>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                <p class="guide_p">YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer3"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">雑談力</h2>   
            <p class="message">あなたは雑談力が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.4.5 -->
      <?php if($_SESSION["array"]["answer5"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">コミュニケーション(伝える力)</h2>
          <div>
            
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">伝え方が9割 [ 佐々木圭一 ]</h4>
                <p class="guide_p"> この本は、仕事から日常生活、恋愛などの伝えるコミュニケーション全般に適している本です。ノーをイエスに変える技術を、「３つのステップ」と「7つの切り口」で紹介しています。</p>
              </div>
              <div class="xxx"> 
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">【話し方の極意】<br/>なぜあなたの話は分かりにくいのか</h4>
                <p class="guide_p">YouTubeチャンネル登録者80万人を超える、マコなり社長が話す「話し方の極意」なぜ伝わらないかを深掘りしていき、伝わる改善方法を知ることができる内容です。非常に聴きやすく、分かりやすい動画になっています。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/lLHGUlMbti0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer5"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">伝える力</h2>   
            <p class="message">あなたは伝える力が備わっていると考えられます。</p>
        </div>
      <?php }?>
    </div>
    
    <!-- No.6 -->
    <div class="kekka" id="gizyutu">
      <?php if($_SESSION["array"]["answer6"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">HTML/CSS コーディング力</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">HTML5/CSS3<br/>モダンコーディング</h4>
                <p class="guide_p">本書は、HTML5/CSS3を使ってモダンなサイトを制作するためのコーディングテクニックをハンズオン形式で学ぶ書籍です。制作現場の実践的なテクニックなども学ぶことができます。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=17617615&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1572%2F9784798141572.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >HTML5/CSS3モダンコーディング フロントエンドエンジニアが教える3つの本格レイアウト スタンダード・グリッド・シングルページレイアウトの作り方 フロントエンドエンジニアが教える3つの本格レイアウ （WEB　Engineer’s　Books） [ 吉田真麻 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめのサービス</h3>
                <h4 class="guide_h4">ドットインストール HTML/CSS</h4>
                <p class="guide_p">一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、HTML/CCSの基礎文法編から、実際に簡単なWebページを作ったりするレッスンもあります。</p>
              </div>
              <div class="xxx"> 
                <div class="no_image_div">
                  <a  href="https://dotinstall.com/lessons/basic_html_v5" target="_blank"><p class="no_image_p">(無料) はじめてのHTML (全14回)</p></a>
                  <a  href="https://dotinstall.com/lessons/basic_css_v5" target="_blank"><p class="no_image_p">(無料) はじめてのCSS (全15回)</p></a>
                  <a  href="https://dotinstall.com/lessons/basic_html_tags_v2" target="_blank"><p class="no_image_p">(有料) 詳解HTML 基礎文法編 (全22回)</p></a>
                  <a  href="https://dotinstall.com/lessons/website_html_v4" target="_blank"><p class="no_image_p">(有料) 実践！アプリ紹介ページを作ろう (全16回)</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer6"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">HTML/CSS コーディング力</h2>   
            <p class="message">あなたはコーディング力が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.7 -->
      <?php if($_SESSION["array"]["answer7"] === "1") {?>
        <div class="answer_div">
          <h2 class="guide_h2">JavaScriptの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">確かな力が身につく<br/>JavaScript「超」入門 </h4>
                <p class="guide_p">本書は、JavaScriptの入門レベルの内容になります。初めてプログラムに触れる方などにもお勧めできる優しい内容になっています。JavaScriptの基本的な操作は、この本で充分身につきます。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1fa9ec10.7572c4c5.1fa9ec11.e8c004f7/?me_id=1259747&item_id=14179758&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2019%2F037%2F33976428.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】確かな力が身につくJavaScript「超」入門　狩野祐東/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめのサービス</h3>
                <h4 class="guide_h4">ドットインストール JavaScript</h4>
                <p class="guide_p">一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、JavaScriptに関しては、豊富なレッスンが揃っており、基礎的なものから応用的な内容もあります。</p>
              </div>
              <div class="xxx"> 
                <div class="no_image_div">
                  <a href="https://dotinstall.com/lessons/basic_javascript_v4" target="_blank"><p class="no_image_p">(無料) はじめてのJavaScript (全11回)</p></a>
                  <a href="https://dotinstall.com/lessons/omikuji_js_v5" target="_blank"><p class="no_image_p">(無料) JavaScriptでおみくじを作ろう (全9回)</p></a>
                  <a href="https://dotinstall.com/lessons/basic_javascript_grammer_v2" target="_blank"><p class="no_image_p">(有料) 詳解JavaScript 基礎文法編 (全26回)</p></a>
                  <a href="https://dotinstall.com/lessons/stop_watch_js_v6" target="_blank"><p class="no_image_p">(有料) JavaScriptでストップウォッチを作ろう (全12回)</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer7"] === "2") {?>
        <div class="answer_div">
          <h2 class="guide_h2">JavaScriptの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">JavaScript本格入門<br/>Jモダンスタイルによる基礎から現場での応用まで</h4>
                <p class="guide_p">本書は、JavaScriptの中級者レベルの内容になります。モダンスタイルによる基礎から現場での応用までを実践しながら学べるものになっています。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=18177978&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4111%2F9784774184111.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >JavaScript本格入門改訂新版 モダンスタイルによる基礎から現場での応用まで [ 山田祥寛 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめのサービス</h3>
                <h4 class="guide_h4">ドットインストール JavaScript</h4>
                <p class="guide_p">一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、JavaScriptに関しては、豊富なレッスンが揃っており、基礎的なものから応用的な内容もあります。</p>
              </div>
              <div class="xxx"> 
                <div class="no_image_url">
                  <a href="https://dotinstall.com/lessons/basic_javascript_objects_v2" target="_blank"><p class="no_image_p">(有料) 詳解JavaScript オブジェクト編 (全35回)</p></a>
                  <a href="https://dotinstall.com/lessons/basic_javascript_dom_v2" target="_blank"><p class="no_image_p">(有料) 詳解JavaScript DOM編 (全21回)</p></a>
                  <a href="https://dotinstall.com/lessons/quiz_js_v3" target="_blank"><p class="no_image_p">(有料) JavaScriptで三択クイズを作ろう (全20回)</p></a>
                  <a href="https://dotinstall.com/lessons/numbers_js_v6" target="_blank"><p class="no_image_p">(有料) JavaScriptで数字タッチゲームを作ろう (全18回) </p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer7"] === "3") {?>
        <div class="answer_div">
          <h2 class="guide_h2">JavaScriptの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">J【バイクゲーム】1時間で作れる！<br/>Javascriptゲームプログラミング</h4>
                <p class="guide_p">この動画は、JavaScriptの知識がある程度ある方向けの動画になります。JavaScriptでの動的な動きや、基礎を応用した内容を学ぶことができます。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/B1iabPM69vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer7"] === "4" || $_SESSION["array"]["answer7"] === "5") {?>
        <div class="answer_div">
          <h2 class="guide_h2">JavaScriptの知識</h2>   
            <p class="message">あなたはコJavaScriptの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.8 -->
      <?php if($_SESSION["array"]["answer8"] === "1") {?>
        <div class="answer_div">
          <h2 class="guide_h2">jQueryの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4"> jQueryとは何か?<br/>（はじめてのjQuery） </h4>
                <p class="guide_p">この動画は、全15本の構成で、jQueryの初級レベルの解説動画になります。jQueryとは何かというところから解説してくれるので、初めてjQueryに触れる方でも問題なく勉強できます。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/kELD557sfsU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめのサービス</h3>
                <h4 class="guide_h4">プロゲート jQuery</h4>
                <p class="guide_p">一部有料（月額980円）のプロゲートはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。jQueryに関しては最初の初級編のみが無料で、そのほかのコースは有料になります。
                </p>
              </div>
              <div class="xxx"> 
                <div class="no_image_url">
                  <a href="https://tech-camp.in/note/technology/77523/#Progate" target="_blank"><p class="no_image_p">プロゲートとは何なのか簡単解説！</p></a>
                  <a href="https://prog-8.com/" target="_blank"><p class="no_image_p">プロゲートのホーム</p></a>
                  <a href="https://prog-8.com/languages/jquery" target="_blank"><p class="no_image_p">(一部有料) jQueryのレッスン</p></a>
                  <a href="https://prog-8.com/courses" target="_blank"><p class="no_image_p">プロゲートで学べるコース一覧</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer8"] === "2") {?>
        <div class="answer_div">
          <h2 class="guide_h2">jQueryの知識</h2>
          <div>
           
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">jQueryデザインブック<br/>仕事で絶対に使うプロのテクニック </h4>
                <p class="guide_p">本書は、jQueryの中級者レベルの内容になります。jQueryの基礎的なところから実戦でも使えるような技術まで幅広く学ぶことができます。基礎は勉強したから、そろそろ実践的なテクニックを覚えたいという方におすすめです。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f1d2525.88b595ec.1f1d2526.b5068bc0/?me_id=1275488&item_id=11683479&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F2199%2F0016698407l.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 jQueryデザインブック 仕事で絶対に使うプロのテクニック ／MdN編集部【編】 【中古】afb</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">jQuery入門 2020<br/>#01：セレクターと Vanilla JS</h4>
                <p class="guide_p">この動画は、全8本の動画から構成されるjQueryの初学者向けの動画になります。セレクターや、DOM操作、非同期通信などの技術も学べるので、jQueryを触ったことがある人にはおすすめの動画になります。</p>
              </div>
              <div class="xxx"> 
                <iframe width="560" height="300" src="https://www.youtube.com/embed/e0vzaLGnCtY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer8"] === "3") {?>
        <div class="answer_div">
          <h2 class="guide_h2">jQueryの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">jQueryクックブック<br/>(日本語) 大型本 </h4>
                <p class="guide_p">本書は、jQueryの中上級者向けの本になります。jQueryを使う一流の開発者たちのノウハウが盛り込まれており、基礎的なテクニックや、問題解決のためのテクニックやアイデアを身につけることができます。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=13850307&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4682%2F9784873114682.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >jQueryクックブック [ jQuery　Community　Exp ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer8"] === "4" || $_SESSION["array"]["answer8"] === "5") {?>
        <div class="answer_div">
          <h2 class="guide_h2">jQueryの知識</h2>   
            <p class="message">あなたはコjQueryの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.9 -->
      <?php if($_SESSION["array"]["answer9"] === "1") {?>
        <div class="answer_div">
          <h2 class="guide_h2">Vue.jsの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4"> Vue.js入門<br/>#01： 一番最初のプログラム </h4>
                <p class="guide_p">この動画は、全8本から構成される、Vue.jsの入門レベルの解説動画になります。Vue.jsについて初めての方でも、充分取り組めるくらいの内容になっています。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/cL3Al628mLE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめのサービス</h3>
                <h4 class="guide_h4">ドットインストール Vue.js</h4>
                <p class="guide_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。Vue.js入門でVue.jsの基礎知識などを学ぶことは十分にできます。
                </p>
              </div>
              <div class="xxx"> 
                <div class="no_image_url">
                  <a href="https://agency-star.co.jp/column/dotinstall" target="_blank"><p class="no_image_p">ドットインストールとは何なのか簡単解説！</p></a>
                  <a href="https://dotinstall.com/" target="_blank"><p class="no_image_p">ドットインストールのホーム</p></a>
                  <a href="https://dotinstall.com/lessons/basic_vuejs_v2" target="_blank"><p class="no_image_p">(有料) Vue.js入門</p></a>
                  <a href="https://dotinstall.com/lessons" target="_blank"><p class="no_image_p">ドットインストールで学べるコース一覧</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer9"] === "2") {?>
        <div class="answer_div">
          <h2 class="guide_h2">Vue.jsの知識</h2>
          <div>
            
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">Vue．js入門<br/>基礎から実践アプリケーション開発まで</h4>
                <p class="guide_p">本書は、Vue.jsの中級者以上の内容になります。Vue.jsの基礎的なところから実戦でも使えるような技術まで幅広く学ぶことができます。基礎は勉強したから、そろそろ実践的なテクニックを覚えたいという方におすすめです。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19288344&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0919%2F9784297100919.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Vue．js入門 基礎から実践アプリケーション開発まで [ 川口和也 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">vue入門<br/>お金を計算するwebアプリを作る</h4>
                <p class="guide_p">この動画は、Vue.js入門の実践解説動画になります。Vue.jsには少し触ったことがある、Vue.jsを使って何か作成してみたいという方におすすめの動画になります。内容もそこまで難しくありません。</p>
              </div>
              <div class="xxx"> 
                <iframe width="560" height="300" src="https://www.youtube.com/embed/iUSHDmv81nw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer9"] === "3") {?>
        <div class="answer_div">
          <h2 class="guide_h2">Vue.jsの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">現場で使える<br/>Vue.js tips集</h4>
                <p class="guide_p">本書は、Vue.jsの中上級者向けの本になります。Vue.jsをより使いこなすためのテクニックがまとめられております。Vue.js書画草yの方には少し難しい内容となっていますので、基礎レベルを理解している方におすすめの本です。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1fa9ef11.219532f0.1fa9ef12.6ea8bc39/?me_id=1216930&item_id=10307015&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbooks-sanseido%2Fcabinet%2Febm%2Febm4%2Febm-9784844398431-2.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >現場で使えるVue.js tips集（技術の泉シリーズ）インプレスR&amp;D三省堂書店オンデマンド</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer9"] === "4" || $_SESSION["array"]["answer9"] === "5") {?>
        <div class="answer_div">
          <h2 class="guide_h2">Vue.jsの知識</h2>   
            <p class="message">あなたはコVue.jsの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.10 -->
      <?php if($_SESSION["array"]["answer10"] === "1") {?>
        <div class="answer_div">
          <h2 class="guide_h2">React.jsの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4"> 日本一わかりやすいReact入門<br/>#1...Reactの基礎知識</h4>
                <p class="guide_p">この動画は、全9本から構成される、React.jsの入門レベルの解説動画になります。React.jsについて初めての方でも、充分取り組めるくらいの内容になっています。基礎編の他にも実践編があります。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/Otrc2zAlJyM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめのサービス</h3>
                <h4 class="guide_h4">プロゲート React.js</h4>
                <p class="guide_p">一部有料（月額980円）のプロゲートはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。React.jsに関しては最初の初級編のみが無料で、そのほかのコースは有料になります。</p>
              </div>
              <div class="xxx"> 
                <div class="no_image_url">
                  <a href="https://tech-camp.in/note/technology/77523/#Progate" target="_blank"><p class="no_image_p">プロゲートとは何なのか簡単解説！</p></a>
                  <a href="https://prog-8.com/" target="_blank"><p class="no_image_p">プロゲートのホーム</p></a>
                  <a href="https://prog-8.com/languages/react" target="_blank"><p class="no_image_p">(一部有料) React.jsのレッスン</p></a>
                  <a href="https://prog-8.com/courses" target="_blank"><p class="no_image_p">プロゲートで学べるコース一覧</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer10"] === "2") {?>
        <div class="answer_div">
          <h2 class="guide_h2">React.jsの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">入門 React コンポーネントベースの<br/>Webフロントエンド開発</h4>
                <p class="guide_p">本書は、React.jsの中級者以上の内容になります。要点が簡潔にまとまっていて、Reactの本質が理解するのに最適な書籍です。入門というタイトルにはなっていますが、アンチパターンを学ぶなど、実践に近い知識を得られます。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=17402396&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7195%2F9784873117195.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >入門React コンポーネントベースのWebフロントエンド開発 [ フランキー・バグナルディ ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer10"] === "3") {?>
        <div class="answer_div">
          <h2 class="guide_h2">React.jsの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">React開発<br/>現場の教科書</h4>
                <p class="guide_p">本書は、React.jsの上級者向けの書籍になります。ボリュームが400ページを超えているというボリュームの多さで、Reac.jsを使った設計から実装まで、開発現場のノウハウがつまっています。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19012330&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0490%2F9784839960490.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >React開発　現場の教科書 [ 石橋啓太 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
          </div>
        </div>
      <?php } elseif($_SESSION["array"]["answer10"] === "4" || $_SESSION["array"]["answer10"] === "5") {?>
        <div class="answer_div">
          <h2 class="guide_h2">React.jsの知識</h2>   
            <p class="message">あなたはReact.jsの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.11 -->
      <?php if($_SESSION["array"]["answer11"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">SEOの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの本</h3>
                <h4 class="guide_h4">1時間でわかる<br/>SEO対策</h4>
                <p class="guide_p">本書では、SEOとは何かということを、1時間で理解するということが目的の本です。この本では、SEOの基礎や実践を交えた内容も含まれており、SEOの概要がわかっていなくてもお勧めできる内容になっています。</p>
              </div>
              <div class="xxx">
                <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;height: 259px;width:550px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19075865&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6930%2F9784774196930.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >1時間でわかるSEO対策 （スピードマスター） [ 遠藤聡 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer11"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">SEOの知識</h2>   
            <p class="message">あなたはSEOの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.12 -->
      <?php if($_SESSION["array"]["answer12"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">UI/UXの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの記事</h3>
                <h4 class="guide_h4">UIとUXの違いとは？<br/>「UI/UXデザイン」をわかりやすく解説</h4>
                <p class="guide_p">本記事では、UI/UXについて分かりやすい説明が載っている記事になります。UIとUXの違いや、UI/UXデザイナーがすべきこと、Googleが提唱するUXデザインの指標についての内容になります。</p>
              </div>
              <div class="xxx">
                <div class="no_image_url">
                  <a class="no_image_url_a" target="_blank" href="https://udemy.benesse.co.jp/design/web-design/ui-ux.html">
                    <h4 class="no_image_url_h4">Udemy メディア<br/>スキルアップしたい社会人のための情報サイト</h4>
                    <p class="no_image_url_p">UIとUXの違いとは？</p>
                    <p class="no_image_url_p">Webデザイナー必見「UI/UXデザイン」をわかりやすく解説</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer12"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">UI/UXの知識</h2>   
            <p class="message">あなたはUI/UXの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.13 -->
      <?php if($_SESSION["array"]["answer13"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">デザインフレームワークの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">Bootstrap 4入門<br/>#01：コンテナとスペーシング</h4>
                <p class="guide_p">この動画は、Bootstrap 4の入門レベルの動画になります。全9本の動画があり、Bootstrap概要、基礎を身につけるにはうってつけです。少し触ったことがあるという方でも予習感覚で見ることもできます。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/FtkRIuWTf0E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめのサービス</h3>
                <h4 class="guide_h4">ドットインストール<br/>Bootstrap 4入門</h4>
                <p class="guide_p">一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、Bootstrapに関しては、たくさんのレッスン数があるわけではないですが、基礎や概要を理解するには問題ありません。</p>
              </div>
              <div class="xxx">
                <div class="no_image_div">
                  <a class="no_image_url_a" target="_blank" href="https://dotinstall.com/lessons/basic_twitter_bootstrap_v5">
                    <h4 class="no_image_url_h4">dotinstall プレミアム<br/>3分でマスターできる動画サイト</h4>
                    <p class="no_image_url_p">(有料) Bootstrap 4入門 (全22回)</p>
                    <p class="no_image_url_p">効率的にUIやレイアウトを作ることができる<br/>Bootstrapの使い方を見ていきましょう。</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer13"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">デザインフレームワークの知識</h2>   
            <p class="message">あなたはデザインフレームワークの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>

      <!-- No.14 -->
      <?php if($_SESSION["array"]["answer14"] === "no") {?>
        <div class="answer_div">
          <h2 class="guide_h2">CMSの知識</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの動画</h3>
                <h4 class="guide_h4">誰でも簡単に<br/>Webサイトが作成できるCMSとは？</h4>
                <p class="guide_p">この動画は、CMS(コンテンツマネジメントスキル)の基礎知識動画になります。CMSとは何かや、おすすめのCMS紹介など、分かりやすく解説してくれます。</p>
              </div>
              <div class="xxx">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/Mk_qZueAfLM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <hr/>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの記事</h3>
                <h4 class="guide_h4">CMSとは？<br/>初心者でもわかるCMSの基礎知識</h4>
                <p class="guide_p">本記事では、(コンテンツマネジメントスキル)とは何かという事を紹介する記事になります。CMSは何なのか、メリットや導入事例など、初心者でも分かりやすい内容となっています。</p>
              </div>
              <div class="xxx">
                <div class="no_image_div">
                  <a class="no_image_url_a" target="_blank" href="https://www.hitachi-solutions.co.jp/digitalmarketing/sp/column/cms_vol01/">
                    <h4 class="no_image_url_h4">デジタルマーケティングソリューション<br/>初心者でもわかるCMSの基礎知識</h4>
                    <p class="no_image_url_p">CMSのメリット、導入事例</p>
                    <p class="no_image_url_p">そもそもCMSとはどんなもの？<br/>CMSについてもっと理解を深めていきましょう！</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }elseif ($_SESSION["array"]["answer14"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">CMSの知識</h2>   
            <p class="message">あなたはCMSの知識が備わっていると考えられます。</p>
        </div>
      <?php }?>
    </div>
    
    <div class="kekka_turu">
      <?php if($_SESSION["array"]["answer15"] === "yes") {?>
        <div class="answer_div">
          <h2 class="guide_h2">フロントエンドエンジニアについてもっと知ろう</h2>
          <div>
            <div>
              <div class="xxx guide">
                <h3 class="guide_h3">あなたにおすすめの記事</h3>
                <h4 class="guide_h4">【フロントエンドエンジニアの仕事】<br/>なぜあなたの話は分かりにくいのか</h4>
                <p class="guide_p">フロントエンドエンジニアという職種にも当然負の部分があります。今回の記事は、フロントエンドエンジニアのつらいこと・大変なことについての記事になります。この記事を読んで、フロントエンドエンジニアについてもっと知りましょう。</p>
              </div>
              <div class="xxx">
                <div class="no_image_url">
                  <a class="no_image_url_a" target="_blank" href="https://careergarden.jp/frontend-engineer/taihen">
                    <h4 class="no_image_url_h4">[なりたい]が見つかる職業情報サイト<br/>キャリアガーデン</h4>
                    <p class="no_image_url_p">フロントエンドエンジニアの仕事内容</p>
                    <p class="no_image_url_p">フロントエンドエンジニアのつらいこと・大変なこと</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
    <a></a>
  </div>

  <form style="width: 100%; margin: 50px auto 50px;" class="kaitou_form" action="http://co-19-246.99sv-coco.com/IT_front_end/frontend1.php" method="post" class="form">

    <input style="width: 100px; height: 30px; margin: 0 auto; display: block;" type="submit" name="returu" value="終了する">
  </form >

  <script>
    'use strict';

    {
      const midasi = document.querySelectorAll('.midasi_h2_1');
      const kekka = document.querySelectorAll('.kekka');
      console.log(midasi);
      console.log(kekka);
      midasi.forEach(clickedItem => {
        clickedItem.addEventListener('click', () => {
          
          midasi.forEach(item => {
            item.classList.remove('active');
          });
          clickedItem.classList.add('active');
          
          kekka.forEach(kekkaItem => {
            kekkaItem.classList.remove('active');
          });
          document.getElementById(clickedItem.dataset.id).classList.add('active');
        });
      });

    }

  </script>
  
<?php } elseif ($_SESSION["array"] === "") {?>
  <?php header("Location: http://co-19-246.99sv-coco.com/IT_front_end/frontend1.php");?>
  <!-- <?php //header("Location: http://co-19-246.99sv-coco.com/index.php");?> -->
<?php }?>
</body>
</html>
