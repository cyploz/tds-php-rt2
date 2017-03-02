<doctype html>
<html>
<head>
    <meta charset="UTF-8">
100%  statique<br>
</head>
<body>
<?php
    $texte="hello world(dynamique)<br>";
    $i=0;
    $max=$_GET["nb"];
    while($i<10){
        echo "<span style='font-size:{$i}pt;'>{$texte}</span>";
        $i++;
    }
    echo $texte;
?>
</body>
</html>