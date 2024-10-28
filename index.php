<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
    <div>
        <a href="index.html">回首頁</a>
    </div>
    <?php
    if(isset($_GET['bmi']))
    {
        echo "你上次量測過BMI為:".$_GET['bmi'];
    }
    ?>
    <h1>計算BMI GET<h1>
    <form action="result.php" method="GET">
    <div>
    <lable for="height">身高:</lable> 
        <input type="number" step="0.1" name="height" id="height">cm
    </div>
    <div>
        <lable for="weight">體重:</lable> 
        <input type="number" step="0.1" name="weight" id="weight">kg
    </div>
    <div>
        <input type="submit" value="計算">
        <input type="reset" value="清空/重置">
    <div>
    </form>

    <h4>計算BMI POST<h4>
    <form action="result.php" method="POST">
    <div>
    <lable for="height">身高:</lable> 
        <input type="number" step="0.1" name="height" id="height">cm
    </div>
    <div>
        <lable for="weight">體重:</lable> 
        <input type="number" step="0.1" name="weight" id="weight">kg
    </div>
    <div>
        <input type="submit" value="計算">
        <input type="reset" value="清空/重置">
    <div>
    </form>
</body>
</html>