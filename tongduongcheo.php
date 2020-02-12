<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <table border="2" style='color:red'>
            <tr>
                <td>Row:<input type="number" name="row" placeholder="Nhập số hàng"></td>
                <td>Col:<input type="number" name="col" placeholder="Nhập số cột"></td>
                <td><input type="submit" value="Create"></td>
            </tr>
        </table>
    </form>
    <?php
    // Tạo mảng 2 chiều
    function CreateMatrix(int $row, int $col)
    {
        $matrix = array($row);
        for ($i = 0; $i < $row; $i++) {
            $array = array($col);
            for ($j = 0; $j < $col; $j++) {
                $array[$j] = rand(0, 3);
            }
            $matrix[$i] = $array;
        }
        return $matrix;
    }
    // Vẽ ma trận (bảng 2 chiều)
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
    //Tính tổng đường chéo
    function SumX(array $matrix)
    {
        $sumx = 0;
        for ($i = 0; $i < count($matrix[0]); $i++) {
            $sumx += $matrix[$i][$i];
        }
        return $sumx;
    }

    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $row = (int) $_POST['row'];
        $col = (int) $_POST['col'];
        $flag = false;
        if ($row >= 0 && $col >= 0 && $row != null && $col != null) {
            $matrix = CreateMatrix($row, $col);
            $show = ShowMatrix($matrix);
            $sumx = SumX($matrix);
            echo "Tổng đường chéo = " . $sumx;
            echo '<table border = "1">' . $show . '</table>';
            $flag = true;
        }
        echo $flag ? "" : "<span style ='color:red'>Hàng hoặc cột không hợp lệ</span>";
    }

    ?>
</body>

</html>