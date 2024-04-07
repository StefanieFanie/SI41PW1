<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Script PHP dalam HTML</h1>
    <?php
        echo "You and I<br>";
        $data1 = "data pertama";
        $data2 = 'data kedua';
        $data3 = 100;
        $data4 = 20.5;

        echo $data1;
        echo "<br>";
        echo $data2." - ".$data3;
        $hasil = $data3 * $data4;
        echo "<br>";
        echo $hasil;
        echo "<br>";

        if($data4>=30 and $data4<=50){
            echo "Range data 30-50";
        }else{
            echo "Di luar range";
        }
    ?>
</body>
</html>