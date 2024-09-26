<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maggiore, Minore o Uguale</title>
</head>
<body>
<?php
    $x = 5;
    $y= 20;
    if($x<$y){
        echo "<h1>$x è minore di $y</h1>";
        $m = $y;
    }elseif($x>$y){
        echo "<h1>$x è maggiore di $y</h1>";
        $m = $x;
    }else{
        echo "<h1>$x è uguale a $y</h1>";
        $m = $x;
    }
    if($m < 10){
        echo "<p>$m è minore di 10</p>";
    }elseif($m >= 10 && $m <= 20){
        echo "<p>$m è compreso tra 10 e 20</p>";
    }elseif($m >= 21 && $m <= 30){
        echo "<p>$m è compreso tra 21 e 30</p>";
    }else{
        echo "<p>$m maggiore di 30</p>";
    }
    
    ?>
</body>
</html>