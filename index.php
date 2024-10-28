<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
    <h1>計算BMI<h1>
    <form action="result.php" method="GET">
    <div>
        <lable for="height">身高:</lable> 
        <input type="number" name="height" id="height">cm
    </div>
    <div>
        <lable for="weight">體重:</lable> 
        <input type="float" name="weight" id="weight">kg
    </div>
    <div>
        <input type="submit" value="計算">
        <input type="reset" value="清空/重置">
    <div>
    </form>
</body>
</html>