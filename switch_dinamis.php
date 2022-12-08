<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Dinamis</title>
</head>
<body>
<?php
    echo "<form method=GET action=switch_dinamis.php>
    Masukkan Kode Prodi : <input type=text name='prodi'>
    <input type=submit name='kode' value=Kirim>
    </form>";
    if(isset($_GET['kode']))
    {
        $prodi = $_GET['prodi'];
        switch($prodi){
            case "TK";
            echo "$prodi = Teknik Komputer";
            break;
        case "MI";
            echo "$prodi = Manajemen Informatika";
            break;
        case "TI";
            echo "$prodi = Teknik Informatika";
            break;
        case "SI";
            echo "$prodi = Sistem Informasi";
            break;
        default;
            echo "$prodi tidak terdaftar";
    }
    }
?>
</body>
</html>