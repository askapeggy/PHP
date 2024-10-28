<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
        }
        td{
            padding:5px 10px;
            text-align:center;
            border:1px solid #999;
        }
        .holiday{
            background:pink;
            color:#999;
        }
        .textColor
        {
            color:#999;
        }
        .today
        {
            background:blue;
            color:white;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <ul>
        <li>有上一個月和下一個月的按鈕</li>
        <li>萬年曆都在同一個頁面同一個檔案</li>
        <li>有上一年和下一年的按鈕</li>
    </ul>
    <ul>
        <lu></lu>
        <lu></lu>
        <lu></lu>
        <lu></lu>
    </ul>
    <?php
        //先取得是否有回傳值
        if(!isset($_GET['y']))
        {
            // 取得目前年份
            $currentYear = date("Y");
        }else
        {
            //取得目前系統年分
            $currentYear = $_GET['y'];
        }
        if(!isset($_GET['m']))
        {
            // 取得目前月份
            $currentMonth = date("m");
        }else
        {
            //取得目前系統月分
            $currentMonth = $_GET['m'];
        }
        //判斷月份是否超過 月
        if($currentMonth == 0)
        {
            $currentYear = $currentYear - 1;
            $currentMonth = 12;
        }
        //判斷月份是否超過 年
        if($currentMonth == 13)
        {
            $currentYear = $currentYear + 1;
            $currentMonth = 1;
        }
    ?>
    <a href="calendar.php?y=<?=$currentYear-1?>&m=<?=$currentMonth?>">前年</a>
    <a href="calendar.php?y=<?=$currentYear?>&m=<?=$currentMonth-1?>">上一個月</a>
    <a href="calendar.php?y=<?=$currentYear?>&m=<?=$currentMonth+1?>">下一個月</a><br>
    <a href="calendar.php?y=<?=$currentYear+1?>&m=<?=$currentMonth?>">明年</a>
    <table>
        <tr>
            <!--<td> </td>-->
            <td class='holiday'>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td class='holiday'>六</td>
        </tr>
        <?php
            //先取得月份第一天星期
            /*
            $year = 2024;
            $month = 10;
            */
            $year = $currentYear;
            $month = $currentMonth;
            if($month - 1 == 0)
            {
                $monthUp = 12;
                $yearUp = $year - 1;
            }else
            {
                $monthUp = $month - 1;
                $yearUp = $year;
            }
            $daysInMonth = date("t", strtotime($year."-".$month."-01"));
            $daysInMonthUp = date("t", strtotime($yearUp."-".$monthUp."-01"));
            $timestamp = strtotime($year."-".$month."-01");
            $w = date("N", $timestamp);
            $count = 1;

            echo $year."年".$month."月";
            for($i = 0; $i < 6; $i++)                    
            {
                for($j=0; $j < 7; $j++)
                {
                    if($j == 0 || $j == 6)
                    {
                        echo "<td class='holiday'>";
                    }else
                    {
                        echo "<td>";
                    }
                    $dayNum = ($i*7) + $j+1 - $w;
                    if($dayNum <= $daysInMonth && $dayNum > 0)
                    {
                        if(date('d') == $dayNum)
                        {
                            //echo "<p class='today'>";                            
                            echo "<p>";                            
                        }else
                        {
                            echo "<p>";
                        }
                        echo $dayNum."</p>";
                    }else
                    {
                        echo "<p class='textColor'>";
                        if($dayNum > $daysInMonth)
                        {
                            echo $dayNum - $daysInMonth;
                        }else
                        {
                            echo $daysInMonthUp - $w + $j + 1;
                        }
                        echo "</p>";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <div>
        <a href="index.html">回首頁</a>
    </div>
</body>
</html>