<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_5</title>
</head>
<body>
    <table border = 1>
        <tr>
                <?php
                    for($i = 1; $i < 10; $i++){
                        echo "<td>";
                        for($j = 1; $j <= 10; $j++){
                            $kq = $i*$j;
                            echo "{$i} * {$j} = {$kq} <br>";
                        }
                        echo "</td>";
                    }
                ?>  
        </tr>
    </table>
    <?php

    ?>
</body>
</html>
