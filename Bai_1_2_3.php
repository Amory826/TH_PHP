<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_1</title>
</head>
<body>
    <?php
        echo "Chào các bạn đến với ngôn ngũ lập trình PHP <br>";

        for($i = 1; $i <= 50; $i++ ){
            if($i %2 == 1){
                echo "<b><u>{$i}</u></b>";
            }
            else{
                echo "{$i}";
            }
        }

        $tong = 0;
        for($i = 1; $i <= 50; $i++ ){
            $tong += $i;
        }

        echo "<br>". $tong . "<br>";
    ?>
</body>
</html>