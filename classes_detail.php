<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[班級]詳細資料</title>
    <style>
    table {
            border-collapse: collapse; /* 合併邊框 */
            width: 50%; /* 表格寬度 */
            height: 50%; /* 自動調整高度 */
            background-color: rgba(128, 128, 128, 0.5); /* 表格背景顏色 */
            border: 2px solid black; /* 設置單元格的邊框，1px 寬，黑色 */
            border-radius: 10px;
            padding: 0px;
            margin: auto;

        }
        table tr:nth-child(1) td
        {
            background-color: #cc6;
            color:darkorage;
            text-shadow:2px 2px 2px #fff
        }
        td {
            border: 1px solid black; /* 設置單元格的邊框，1px 寬，黑色 */
            padding: 8px; /* 增加單元格內邊距 */
            text-align: center; /* 文字居中 */
        }
    </style>
</head>
<body>
    <h1>班級學員</h1>
    <?php
        /*
        SELECT `class_student`.`school_num`, `students`.`name`
        FROM `class_student`,`students` 
        WHERE `class_student`.`class_code`=105 AND `students`.`school_num`=`class_student`.`school_num`;
        */


        echo $_GET['code']."<br>";
        $dsn = "mysql:host=localhost;charset=utf8;dbname=school;";
        $pdo = new PDO($dsn, 'root', '');
        $sql = "SELECT `class_student`.`school_num`, `students`.`name`, `students`.`addr`";
        $sql = $sql."FROM `class_student`,`students` WHERE `class_student`.`class_code`=";
        $sql = $sql."'".$_GET['code']."'"." AND `students`.`school_num`=`class_student`.`school_num`";
        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<tr>";
        echo "<td>學號</td>";
        echo "<td>名字</td>";
        echo "<td>地址</td>";
        echo "</tr>";
        foreach($rows as $row)
        {
            echo "<tr>";

            echo "<td>";
            echo $row['school_num'];
            echo "</td>";

            echo "<td>";
            echo $row['name'];
            echo "</td>";

            echo "<td>";
            echo $row['addr'];
            echo "</td>";

            echo "</tr>";
        }
        echo "</table>";




        echo "<pre>";
        print_r($rows);
        echo "</pre>";
    ?>
</body>
</html>