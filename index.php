<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$c = [[4, 66, 3],
    [5, 7, 2],
    [7, 3, 66],
    [2, 6, 2]];

function maxIndex($a)
{
    $max = $a[0][0];
    $indexMax = null;
    $count = 0;


    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[$i]); $j++){
                if ($max < $a[$i][$j]){
                    $max = $a[$i][$j];
                }
            }
    }

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[$i]); $j++){
            if ($max == $a[$i][$j]){
                echo $a.':'.$i.'-'.$j.'<br>';
            }
        }
    }
    echo "Giá trị max là: " . $max;
}

echo "Index max trong mảng đã cho là: <br>";
maxIndex($c);
?>
</body>
</html>