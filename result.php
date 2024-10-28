<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>
    <?php
        $h = $_GET['height']/100;
        $w = $_GET['weight'];
        $bmi = round($w/($h*$h),2);
        if($bmi >= 18.5 && $bmi <= 24)
        {
            $cText = "正常範圍";
        }else if($bmi < 18.5)
        {
            $cText = "體重過輕";
        }else if($bmi < 27)
        {
            $cText = "過重";
        }else if($bmi < 30)
        {
            $cText = "輕度肥胖";
        }else if($bmi < 35)
        {
            $cText = "中度肥胖";
        }else
        {
            $cText = "中度重度肥胖肥胖";
        }
    ?>

    <h1>BMI結果</h1>
    <div>你的身高:<?=$_GET['height']?>公分</div>
    <div>你的體重:<?=$_GET['weight']?>公斤</div>
    <div>你的BMI為:<?=$bmi?></div>
    <div>你的體位判定為:<?=$cText?></div>
    <div>
        <a href="index.php">回計算BMI首頁</a>
    </div>
</body>
</html>