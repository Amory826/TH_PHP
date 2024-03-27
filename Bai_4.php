<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_4</title>
</head>
<body>
    <form action="Bai_4.php" method="post">
        <table border=1 cellspacing=1 cellpading=0>
            <tr>
                <td>STT</td>
                <td>Tên sách</td>
                <td>Tên tác giả</td>
            </tr>
            <?php
                for($i = 1;$i <= 10; $i ++){
                    echo " 
                    <tr>
                        <td>{$i}</td>
                        <td>Tên sách {$i}</td>
                        <td>Tác giả {$i}</td>
                    </tr>";
                }
            ?>
        </table>

    </form>
</body>
</html>


