<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải PTB1</title>
</head>
<body>
    <form action="GiaiPTB1.php" method="post">
        <label for="a">Nhap a: </label>
        <input type="text" name="a" id="">
        <br>
        <br>
        <label for="b">Nhap b: </label>
        <input type="text" name="b" id="">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

    
</body>
</html>
<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $value = -$b/$a;
    echo "x = {$value}";

?>