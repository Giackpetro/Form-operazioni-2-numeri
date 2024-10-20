<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table, td, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .td_red{
            color: red;
        }
    </style>
    <?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    if($n1 == "" || $n2 == ""){
        echo"<p style='color:red'>Errore: almeno uno dei due numeri è vuoto</p>";
        echo"<p><a href='numeri.html'>Torna indietro</a></p>";
    }else{
        echo"<ul>";
            echo"<li>$n1</li>";
            echo"<li>$n2</li>";
        echo"</ul>"; 
    }

    $int_num1 = intval($n1);
    $int_num2 = intval($n2);

    $addizione = $int_num1 + $int_num2;
    $sottrazione = $int_num1 - $int_num2;
    $moltiplicazione = $int_num1 * $int_num2;
    if($int_num2 == 0){
        $divisione= "Errore: impossibile dividere per 0";
    }else{
        $divisione = $int_num1 / $int_num2;
    }
    

    echo"<table>";
        echo"<tr>";
            echo"<th>Operazione</th>";
            echo"<th>Risultato</th>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Addizione</td>";
            echo"<td>$addizione</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Sottrazione</td>";
            echo"<td>$sottrazione</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Moltiplicazione</td>";
            echo"<td>$moltiplicazione</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Divisione</td>";
            echo"<td class='td_red'>$divisione</td>";  
            
            
        echo"</tr>";
      
    echo"</table>";
    ?>
</body>
</html>