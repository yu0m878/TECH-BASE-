<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_6-2.php</title>
</head>
<body>
<font size=5>
<div class="bg_pattern Paper_v2"></div>
<style>
.bg_pattern {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: #FFF;
  z-index: -1;
}
.Paper_v2 {
  background-image:
    repeating-linear-gradient(to bottom,
      transparent 25px,
      rgba(0, 0, 0, 0.04) 26px,  rgba(0, 0, 0, 0.04) 26px,
      transparent 27px,  transparent 51px, 
      rgba(0, 0, 0, 0.04) 52px,  rgba(0, 0, 0, 0.04) 52px,
      transparent 53px,  transparent 77px, 
      rgba(0, 0, 0, 0.04) 78px,  rgba(0, 0, 0, 0.04) 78px,
      transparent 79px,  transparent 103px, 
      rgba(0, 0, 0, 0.04) 104px,  rgba(0, 0, 0, 0.04) 104px,
      transparent 105px,  transparent 129px, 
      rgba(0, 0, 0, 0.04) 130px,  rgba(0, 0, 0, 0.04) 130px),
 
    repeating-linear-gradient(to right,
      transparent 25px,
      rgba(0, 0, 0, 0.04) 26px,  rgba(0, 0, 0, 0.04) 26px,
      transparent 27px,  transparent 51px, 
      rgba(0, 0, 0, 0.04) 52px,  rgba(0, 0, 0, 0.04) 52px,
      transparent 53px,  transparent 77px, 
      rgba(0, 0, 0, 0.04) 78px,  rgba(0, 0, 0, 0.04) 78px,
      transparent 79px,  transparent 103px, 
      rgba(0, 0, 0, 0.04) 104px,  rgba(0, 0, 0, 0.04) 104px,
      transparent 105px,  transparent 129px, 
      rgba(0, 0, 0, 0.04) 130px,  rgba(0, 0, 0, 0.04) 130px);
}
.button{
height:40px;
width:200px;
}
</style>
<div style="text-align: center">
<h1>適正なカロリー・PFCバランスを知ろう！<br>～健康を目指して～</h1>
<style>
h1 {
  background: #dfefff;
  box-shadow: 0px 0px 0px 5px #dfefff;
  border: dashed 2px white;
  padding: 0.2em 0.5em;
}
</style>

<?php
    if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"])){
        $old = $_POST["num1"];
        $cm = $_POST["num2"];
        $kg = $_POST["num3"];
        if($value = "男"){
            $basemet = 13.397* $kg+ 4.799*$cm- 5.677*$old+ 88.362;
            $basemet = floor($basemet);
        }if($value = "女"){
            $basemet = 9.247* $kg+ 3.098*$cm- 4.33*$old+ 447.593;
            $basemet = floor($basemet);
        }
    }
    if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"])){
        if($value = "work1"){
            $workmet = $basemet * 1.2;
            $workmet = floor($workmet);
        }if($value = "work2"){
            $workmet = $basemet * 1.35;
            $workmet = floor($workmet);
        }if($value = "work3"){
            $workmet = $basemet * 1.5;
            $workmet = floor($workmet);
        }if($value = "work4"){
            $workmet = $basemet * 1.7;
            $workmet = floor($workmet);
        }
    }
    if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"])){
        if($value = "check1"){
            $meal = $workmet - 500;
            $p = 0.3 * $meal /4;
            $p = floor($p);
            $f = 0.2 * $meal /9;
            $f = floor($f);
            $c = 0.5 * $meal /4;
            $c = floor($c);
        }if($value = "check2"){
            $meal = $workmet;
            $p = 0.2 * $meal /4;
            $p = floor($p);
            $f = 0.2 * $meal /9;
            $f = floor($f);
            $c = 0.6 * $meal /4;
            $c = floor($c);
        }if($value = "check3"){
            $meal = $workmet + 300;
            $p = 0.4 * $meal /4;
            $p = floor($p);
            $f = 0.2 * $meal /9;
            $f = floor($f);
            $c = 0.4 * $meal /4;
            $c = floor($c);
        }
    }
?>

<br/><span style="font-size: 20px;">【入力フォーム】<br/></span>
<form method="post" action=""><br>
性別：<input type="radio" name="gender" value="男" />男
<input type="radio"  name="gender" value="女" />女<br><br>
年齢:
<input type="num" name="num1" size="10"> 歳<br><br>
身長:
<input type="num" name="num2" size="10"> cm<br><br>
体重:
<input type="num" name="num3" size="10"> kg<br><br>
生活活動強度指数：<br>
<input type="radio" name="work" value="低い" />Ⅰ(低い)
<input type="radio" name="work" value="やや低い" />Ⅱ(やや低い)
<input type="radio" name="work" value="適度" />Ⅲ(適度)
<input type="radio"  name="work4" value="高い" />Ⅳ(高い)<br><br>
<img src="work.jpg" width="500" alt="生活活動強度指数の区分"><br>
    ------------------------------------------------------------------------<br>
<span style="font-size: 20px;">目的：<br>
<input type="radio" name="check" value="減量" />減量
<input type="radio" name="check" value="維持" />維持
<input type="radio"  name="check" value="増量" />増量<br><br>
<input type="reset" value="リセット" class="button"><br>
<input type="submit" name="submit1" value="送信" class="button"><br><br></span>

<?php
//エラー一覧
if(!empty($_POST["submit1"])&& empty($_POST["gender"])){
    echo "<br>"."!-------------!"."<br>"."<br>"."エラー："."性別を選択してください"."<br>"."<br>"."!-------------!"."<br>";
}
if(!empty($_POST["submit1"])&&empty($_POST["num1"])){
    echo "<br>"."!-------------!"."<br>"."<br>"."エラー："."年齢を入力してください"."<br>"."<br>"."!-------------!"."<br>";
}
if(!empty($_POST["submit1"])&&empty($_POST["num2"])){
    echo "<br>"."!-------------!"."<br>"."<br>"."エラー："."身長を入力してください"."<br>"."<br>"."!-------------!"."<br>";
}
if(!empty($_POST["submit1"])&&empty($_POST["num3"])){
    echo "<br>"."!-------------!"."<br>"."<br>"."エラー："."体重を入力してください"."<br>"."<br>"."!-------------!"."<br>";
}
if(!empty($_POST["submit1"])&&empty($_POST["work"])){
    echo "<br>"."!-------------!"."<br>"."<br>"."エラー："."生活活動強度指数を入力してください"."<br>"."<br>"."!-------------!"."<br>";
}
if(!empty($_POST["submit1"])&&empty($_POST["check"])){
    echo "<br>"."!-------------!"."<br>"."<br>"."エラー："."目的を入力してください"."<br>"."<br>"."!-------------!"."<br>";
}
?>
<span style="font-size: 20px;">【結果一覧】</span><br><br> 
  基礎代謝:
    <input type="num" name="result1" value="<?php if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"]))
    { echo $basemet; }?>"> kcal<br><br>
  一日の消費カロリー:
    <input type="num" name="result2" value="<?php if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"]))
    { echo $workmet; }?>"> kcal<br><br>
    一日の摂取カロリー目安:
    <input type="num" name="result3" value="<?php if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"]))
    { echo $meal; }?>"> kcal<br>
    <ul>
    ・タンパク質 <input type="num" name="result4" size="10" value="<?php if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"]))
    { echo $p; }?>"> g<br>
    ・脂質       <input type="num" name="result5" size="10" value="<?php if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"]))
    { echo $f; }?>"> g<br>
    ・炭水化物   <input type="num" name="result6" size="10" value="<?php if(!empty($_POST["submit1"])&&!empty($_POST["gender"])&&!empty($_POST["work"])&&!empty($_POST["check"])
    &&!empty($_POST["num1"])&&!empty($_POST["num2"])&&!empty($_POST["num3"]))
    { echo $c; }?>"> g<br><br>
    </ul>
</form>

<!-- 外部ファイルとして読み込む -->
<?php
include('掲示板機能の追加');
?>

</font>
</div>
</body>
</html>