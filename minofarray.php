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
        <input id="input" type="number" name="number" placeholder="Nhập độ dài mảng" />
        <input type="submit" value="Tìm" />
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = (int) $_POST['number'];
        if ($num > 0) {
            function CreateArray($num)
            {
                $array = [];
                for ($i = 0; $i < $num; $i++) {
                    $array[$i] = rand(0, 100);
                }
                return $array;
            }
            $array = CreateArray($num);
            $arr = implode(",", $array);
            echo "Mảng = [" . $arr . "]" . "<br>";
            function Timmin(array $array)
            {
                $min = $array[0];
                $index = 0;
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] < $min) {
                        $min = $array[$i];
                        $index = $i;
                    }
                }
                echo "index = " . $index . "<br>";
                return $min;
            }
            $min = Timmin($array);
            echo "Min = " . $min;
        }else {
            echo "<span style ='color:red'>Độ dài mảng không hợp lệ</span>";
        }
    }
    ?>
</body>

</html>