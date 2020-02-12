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
        <table border="1">
            <tr>
                <td>Row:<input type="number" name="row" placeholder="Nhập số dòng" /></td>
                <td>Col:<input type="number" name="col" placeholder="Nhập số col" /></td>
                <td><input type="submit" value="Create" /></td>
            </tr>
        </table>
    </form>

    <?php
    function CreateMatrix(int $row, int $col)
    {
        $matrix =  array($row);
        for ($i = 0; $i <= $row; $i++) {
            $array =  array($col);
            for ($j = 0; $j <= $col; $j++) {
                $array[$j] = rand(0, 100);
            }
            $matrix[$i] = $array;
        }
        // var_dump($matrix);
        return $matrix;
    }
    function ShowMatrix(array $matrix)
    {
        $str = "";
        for ($row = 0; $row < count($matrix); $row++) {
            $str .= "<tr>";
            for ($col = 0; $col < count($matrix[$row]); $col++) {
                $str .= "<td>" . $matrix[$row][$col] . "</td>";
            }
            $str .= "</tr>";
        }
        return $str;
    }
    function vMax(array $matrix)
    {
        $max = $matrix[0][0];
        $index = 0;
        for ($row = 0; $row < count($matrix); $row++) {
            for ($col = 0; $col < count($matrix[$row]); $col++) {
                if ($matrix[$row][$col] > $max) {
                    $max = $matrix[$row][$col];
                 $index = "Row = ".$row." "."Col = ".$col;
                }
            }
        }
        echo "index : " . $index . "<br>";
        return $max;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $row = (int) $_POST['row'];
        $col = (int) $_POST['col'];
        if ($row >= 0 && $col >= 0 && $row != null && $col != null) {
            $matrix = CreateMatrix($row, $col);
            $show = ShowMatrix($matrix);
            $max = vMax($matrix);
            echo "Max = " . $max;
        } else {
            echo "<span style='color:red'>Hàng hoặc cột không hợp lệ</span>";
        }
    }


    ?>
    <?php if ($row >= 0 && $col >= 0 && $row != null && $col != null) : ?>
        <table border="1">
            <?= $show ?>
        </table>
    <?php endif; ?>

</body>

</html>