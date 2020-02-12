<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="number" min="0" name="number" placeholder="Nhập  phần tử cần xóa" />
        <input type="submit" value="Delete" />
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = (int) $_POST['number'];
        $array = [1, 2, 3, 4, 5];
        $index = null;
        $flag = false;
        for ($i = 0; $i < count($array); $i++) {
            if ($num == $array[$i] && $num != null) {
                echo "<span style ='color:blue'>index  $index =$i</span>";
                unset($array[$i]);
                $flag = true;
            }
        }
        echo $flag ? "" : "<span style ='color:red'>Phần tử không có trong mảng</span>";

        array_push($array, 0);
        var_dump($array);

    }


    ?>
</body>

</html>