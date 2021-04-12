<?php
//セッションで値をほじ///
session_start();
  $_SESSION["array"] = "";

if (isset($_POST["answer_send"])) {
  if (count($_POST) === 16) {
    $_SESSION["array"] = $_POST;

    //ユーザーエージェント
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
      $ua = $_SERVER['HTTP_USER_AGENT'];
    } else {
      $ua = "";
    }
    if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) 
    {
      header("Location: http://co-19-246.99sv-coco.com/IT_front_end/frontend_phone_rukuten.php");
      //回答を終えた印と、PC、phoneどちらかの判別を持たせる
      $_SESSION["kaitou_end"] = "end_phone";
      exit;
    } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) 
    {
      header("Location: http://co-19-246.99sv-coco.com/IT_front_end/frontend_phone_rukuten.php");
      //回答を終えた印と、PC、phoneどちらかの判別を持たせる
      $_SESSION["kaitou_end"] = "end_phone";
      exit;
    } else 
    {
      header("Location: http://co-19-246.99sv-coco.com/IT_front_end/frontend_pc_rakuten.php");
      //回答を終えた印と、PC、phoneどちらかの判別を持たせる
      $_SESSION["kaitou_end"] = "end_pc";
      exit;
    }
  }
}

if (isset($_POST["returu"])) {
  if ($_POST["returu"] === "終了する") {
    $_SESSION["kaitou_end"] = "";
    $_SESSION["array"] = "";
    header("Location: http://co-19-246.99sv-coco.com/IT_front_end/frontend1.php");
    exit;
  }
}

$occupation="フロントエンドエンジニア";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フロントエンドエンジニア</title>
    <link rel="stylesheet" href="style_frontend1.css">
</head>

  <body  style="background-color:#EEFFFF;">
    <div class="all">
      <h1 class="occupation">フロントエンドエンジニアを目指すあなたに！</h1>
      <div class="num-time">
        全15問  約5分
      </div>
      <div class="description">
        <?php echo $occupation; ?>に<span class="des-skill">必須のスキル</span>をあなたは持っていますか？<br>
        この質問はフロントエンドエンジニアになる上で、あなたの不足したスキルを特定するものです。<br>
        周りから一歩前進し、あなたも優秀な人材に！！！
      </div>
      <br>
      <div class="use">
        <p class="howtouse">使用法</p></br>
            Q1〜Q15の質問に答え、結果を送信を押してください。</br>
            (全ての質問に回答するようにお願いします)
                
      </div>  
      <br>
      <hr>

      <div class="main">
        <form method="post" action="http://co-19-246.99sv-coco.com/IT_front_end/frontend1.php" name="form" onsubmit="return formCheck()">
          <dl class="question"><span class="q">Q1</span>.&nbsp;&nbsp;スポーツ/勉強で行き詰まったことはありますか？</br>
            <dt class="choices">
                  <input type="radio", name="answer1", value="yes", >はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer1", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q2</span>.&nbsp;&nbsp;Q1ではいと答えた方は、その壁を乗り越える事はできましたか？<br>
            <p class="brackets">（&thinsp;Q1でいいえと答えた方はいいえを選択してください&thinsp;）</p>
            <dt class="choices">
                <input type="radio", name="answer2", value="yes", >はい<br>
            </dt>
            <dt class="choices">   
                <input type="radio", name="answer2", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q3</span>.&nbsp;&nbsp;あまり親しくない人といるときでも間を持たずに話が出来ますか？話を続けられますか？<br>
            <dt class="choices">
                  <input type="radio", name="answer3", value="yes">はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer3", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q4</span>.&nbsp;&nbsp;他人の言っていることをきちんと理解できないことがありますか？<br>
            <dt class="choices">
                  <input type="radio", name="answer4", value="yes">はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer4", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q5</span>.&nbsp;&nbsp;自分の言っていることが他人に伝わらないことがありますか？<br>
            <dt class="choices">
                  <input type="radio", name="answer5", value="yes">はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer5", value="no">いいえ<br>
            </dt>
          </dl>

          <!--  -->
          <dl class="question"><span class="q">Q6</span>.&nbsp;&nbsp;HTML/CSSの基礎知識があるか？<br>
            <dt class="choices">
                <input type="radio", name="answer6" value="yes" style="font-size: 50px">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer6" value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q7</span>.&nbsp;&nbsp;JavaScriptの知識はあるか？/扱えるか？<br>
            <dt class="choices5-top">
                  <input type="radio", name="answer7" value="1">未経験<br>
              </dt>
              <dt class="choices5-top">
                  <input type="radio", name="answer7" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
              </dt>
              <dt class="choices5-top">
                  <input type="radio", name="answer7" value="3">基礎的な部分は学習済<br>
              </dt>
              <dt class="choices5">
                  <input type="radio", name="answer7" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
              </dt>
              <dt class="choices5">
                  <input type="radio", name="answer7" value="5">実務レベル<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q8</span>.&nbsp;&nbsp;jQueryの知識はあるか？/扱えるか？<br>
            <dt class="choices5-top">
                <input type="radio", name="answer8" value="1">未経験<br>
            </dt>
            <dt class="choices5-top">
                <input type="radio", name="answer8" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
            </dt>
              <dt class="choices5-top">
                  <input type="radio", name="answer8" value="3">基礎的な部分は学習済<br>
              </dt>
              <dt class="choices5">
                  <input type="radio", name="answer8" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
            </dt>
              <dt class="choices5">
                  <input type="radio", name="answer8" value="5">実務レベル<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q9</span>.&nbsp;&nbsp;Vue.jsの知識はあるか？/扱えるか？<br>
            <dt class="choices5-top">
                <input type="radio", name="answer9" value="1">未経験<br>
            </dt>
            <dt class="choices5-top">
                <input type="radio", name="answer9" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
            </dt>
            <dt class="choices5-top">
                <input type="radio", name="answer9" value="3">基礎的な部分は学習済<br>
            </dt>
            <dt class="choices5">
                <input type="radio", name="answer9" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
            </dt>
            <dt class="choices5">
                <input type="radio", name="answer9" value="5">実務レベル<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q10</span>.&nbsp;&nbsp;Reactの知識はあるか？/扱えるか？<br>
            <dt class="choices5-top">
                <input type="radio", name="answer10" value="1">未経験<br>
            </dt>
            <dt class="choices5-top">
                <input type="radio", name="answer10" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
            </dt>
            <dt class="choices5-top">
                <input type="radio", name="answer10" value="3">基礎的な部分は学習済<br>
            </dt>
            <dt class="choices5">
                <input type="radio", name="answer10" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
            </dt>
            <dt class="choices5">
                <input type="radio", name="answer10" value="5">実務レベル<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q11</span>.&nbsp;&nbsp;SEOの知識があるか？<br>
            <dt class="choices">
                <input type="radio", name="answer11", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer11", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q12</span>.&nbsp;&nbsp;UI/UXなどの知識はあるか？<br>
            <dt class="choices">
                  <input type="radio", name="answer12", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer12", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q13</span>.&nbsp;&nbsp;デザインフレームワークBootstrapなどの知識があるか？<br>
            <dt class="choices">
                <input type="radio", name="answer13", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer13", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q14</span>.&nbsp;&nbsp;CMS（コンテンツマネジメントスキル）の理解はありますか？<br>
            <dt class="choices">
                <input type="radio", name="answer14", value="yes">はい<br>
            </dt>
            <dt class="choices">        
                <input type="radio", name="answer14", value="no">いいえ<br>
            </dt>
          </dl>

          <dl class="question"><span class="q">Q15</span>.&nbsp;&nbsp;フロントエンドエンジニアに関してもっと知りたいか<br>
            <dt class="choices">
                <input type="radio", name="answer15", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer15", value="no">いいえ<br>
            </dt>
          </dl>

          <div class="submit">
            <input type="submit" class="button" name="answer_send" value="結果を送信">
            <br><br>
          </div>
        </form> 
      </div>
      <br><br><br><br>           
    </div>
  </body>
  

  <script>
  function formCheck(){
      flag=0;
      if((document.form.answer1.value == "")||(document.form.answer2.value == "")||(document.form.answer3.value == "")||(document.form.answer4.value == "")||(document.form.answer5.value == "")
      ||(document.form.answer6.value == "")||(document.form.answer7.value == "")||(document.form.answer8.value == "")||(document.form.answer9.value == "")||(document.form.answer10.value == "")
      ||(document.form.answer11.value == "")||(document.form.answer12.value == "")||(document.form.answer13.value == "")||(document.form.answer14.value == "")||(document.form.answer15.value == ""))
      {
          flag = 1;
      }

      if(flag == 1) {
          alert("未入力の項目があります");
          return false;
      }
      else{
          return true;
      }
  }
  </script>



</html>

