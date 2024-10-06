<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = rand(10,20);
    for ($i = 0; $i <= $num; $i++) {
        $lista[] = $i;
    }
    $colori = ["red", "blue", "green", "yellow", "purple", "orange"];
    
    echo "<ol>";
    for ($i = 0; $i < count($lista); $i++) {
        $color = $colori[rand(0,5)];
        echo "<li style='color: $color'>$lista[$i]</li>";
    }
    echo "</ol>";
    ?>
</body>
</html>