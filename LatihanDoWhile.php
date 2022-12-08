<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur pengulangan dengan do...while</title>
</head>
<body>
    <?php 
    
    //perulangan do..while..kondisi terpenuhi
        $i = 1;
        do
        {
            echo "ini juga pengulangan yang ke-$i<br/>";
            $i++;
        }
        while ($i <=6);

    //perulangan do..while..kondisi tidak terpenuhi
        $j = 5;
        do
        {
            echo "<br>perulangan ini kondisinya tidak terpenuhi<br/>";
                $j++;
        }
        while ($j <= 3);
    ?>
</body>
</html>