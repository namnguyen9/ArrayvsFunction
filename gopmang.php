<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php

    $array1 = [1, 2, 3, 4, 5];
    $array2 = [6, 7, 8, 9, 10];
    $array3 = [];
    function ReturnArray(array $arr1, array $arr2)
    {
        for ($i = 0; $i < count($arr2); $i++) {
            array_push($arr1, $arr2[$i]);
        }
        return $arr1;
    }
    $array13 = ReturnArray($array3,$array1);
    $array3 = ReturnArray($array13,$array2);
    var_dump($array3);

    ?>
</body>

</html>