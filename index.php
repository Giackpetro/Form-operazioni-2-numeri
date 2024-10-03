<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $lar = rand(50, 500);

    function sfondoCasuale($larghezza) {
        if ($larghezza < 150) {
            return "#7FFFD4";
        } elseif ($larghezza <= 250) {
            return "#1E90FF";
        } else {
            return "#0000FF";
        }
    }

    $altezza = $lar * 2 . "px";
    $colore = sfondoCasuale($lar);
    $larghezza = $lar . "px";
    
    echo "<div style='height: $altezza ; width: $larghezza ; background-color: $colore;'></div>";
    ?>
</body>
</html>