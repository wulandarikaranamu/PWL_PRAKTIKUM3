<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur pengulangan dengan foreach</title>
</head>
<body>
    <?php 
    
    $a = array("Cirebon","Jakarta","Bandung","Yogyakarta");
    foreach ($a as $data)
    {
        echo "$data <br/>";
    }
    
    ?>
</body>
</html>

<?php
$pembatas = "-------------------"."<br>";
echo "$pembatas"; 
//array asosiatif 

$siswa['ketua'] = "merry";
$siswa['bendahara'] = "wajida";

$mahasiswa = array("ketua" => "merry",
                    "sekertaris" => "wajida" );
foreach ($siswa as $key => $value) {
    echo $key."-".$value."<br>";
}
?>