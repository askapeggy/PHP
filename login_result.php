<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>回應登入頁面</title>
</head>
<body>
    <?php
        $a1 = 'aska';
        $p1 = 'aska';
        if(!isset($_GET['login']))
        {
            header("location:login.php");
            exit();
        }
        if(!isset($_POST['account']))
        {
            echo "請輸入帳號<br>";
            echo "<a href='login.php'>回到登入頁面</a>";
            exit();
        }else
        {
            $a = $_POST['account'];
        }
        if(!isset($_POST['password']))
        {
            echo "請輸入密碼<br>";
            echo "<a href='login.php'>回到登入頁面</a>";
            exit();
        }else
        {
            $p = $_POST['password'];
        }
        if($a != $a1)
        {
            echo "查無此帳號<br>";
            echo "<a href='login.php'>回到登入頁面</a>";
            exit();
        }
        if($p != $p1)
        {
            echo "密碼錯誤<br>";
            echo "<a href='login.php'>回到登入頁面</a>";
            exit();
        }
        echo "<h1>登入成功</h1>";
        echo "<a href='login.php?r='OK'>回到登入頁面</a>";
?>
</body>
</html>