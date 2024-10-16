<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    h1 {
        text-align:center;
        background-color:red;
        width:800px;
        margin-left:25%;
    }

    div {
        text-align:center;
    }
</style>
    <?php
    $video1 = array('titolo'=>'Infiltrato nei laboratori segreti della DR0GA','idVideo'=>'iDZRDU73ax4');
    $video2 = array('titolo'=>'Top 5 Bombaclat','idVideo'=>'8ulA5-cb2po');
    $video3 = array('titolo'=>'CARABINIERI CI PERSEGUITANO 😭','idVideo'=>'98eviy2GlNw&t=156s');
    $list[]=$video1;
    $list[]=$video2;
    $list[]=$video3;
    $v_height = array('300','400','500');
    $v_width = array('300','400','500');

    for ($i=0;$i<count($list);$i++){   
        echo"<div>";
        echo inserisciVideoYouTube($list[$i],$v_height[$i],$v_width[$i]);
        echo"</div>";
    }    
        
    function inserisciVideoYouTube($arr, $height, $width){
        return '<h1 class="prova_h1">'.$arr['titolo'].'</h1>' .
        '<iframe  width="'.$height.'" height="'.$width.'"src="https://www.youtube.com/embed/'.$arr['idVideo'].'"></iframe>'
    }
    ?>
</body>
</html>