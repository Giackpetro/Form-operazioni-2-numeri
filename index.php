<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    table{
        border: 1px solid black;
          border-collapse: collapse;
     }
    td{
        padding: 10px;border: 1px solid black;
    }
</style>
<?php
$righe = 30;
$colonne = 12;
    
stampaTabella($righe, $colonne);

function stampaTabella($m, $n){
    $vr = array();
    $arr = array();
    echo("<table  >");
        for ($i=0; $i < $m ; $i++) {
            echo("<tr>"); 
            $arr[$i] = $i;
            for ($j=0; $j < $n ; $j++) { 
                $vr[$j]="C".$j;
                echo("<td>".$arr[$i]."-".$vr[$j]."</td>");
            }
            echo("</tr>");
        }
    echo("</table>");
    }
?>
</body>
</html>