<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" min="0" name="text" placeholder="Nhập  phần tử cần xóa" />
        <input type="submit" value="Đếm" />
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = strtolower((string) $_POST['text']);
        $count = 0;
        $str = "Hellooooo Nam";
        $string = strtolower(trim($str));
        var_dump($string);
        $flag = false;
        for ($i = 0; $i < strlen($string); $i++) {
            if (trim($num) === $string[$i] && $num != null) {
                var_dump(trim($num));
                $count++;
                $flag = true;
            }
        }
        if ($flag) {
            echo "<span style ='color:blue'> $count Kí tự</span>";
        }
        echo $flag ? "" : "<span style ='color:red'>Vui lòng nhập kí tự hoặc kí tự không tồn tại</span>";
    }
    ?>
</body>

</html>