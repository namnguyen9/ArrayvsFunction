<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            right: 20px;
            border: 2px solid blue;
            padding: 12px 10px 12px 10px;
        }
    </style>
</head>

<body>
    <form action="danhsach.php"  method="post">
        From:<input id="from" type="text" name="from" placeholder="yyyy/mm/dd" />
        To:<input id="to" type="text" name="to" placeholder="yyyy/mm/dd" />
        <input type="submit" id="submit" value="Search" />
    </form>
</body>

</html>