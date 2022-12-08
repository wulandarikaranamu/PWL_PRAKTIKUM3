<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur pengulangan dengan while</title>
</head>
<body>
    <?php 
    
    $i=1;
    while($i <= 9)
    {
        echo "ini pengulangan yang ke-$i <br/>";
        $i++;
    }
    /*------------------------------------------ */
    echo"<br>";
    echo"<hr>";
    echo"<br>";
     /*------------------------------------------ */
     $x=40;
     while ($x >= 0) {
        echo "urutan ke-$x <br/>";
        $x-=5;
     }
     
    ?>
</body>
</html>