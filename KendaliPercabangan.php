<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1 align="center">Hitung Kriteria Nilai Akhir</h1>
    <form action="KendaliPercabangan.php" method="POST">
    <table align="center">
       <tr>
        <td>
            Input Nama Anda : <input type="text" name="nama"><br/>
        </td>
       </tr>
       <tr>
        <td>
            Input Nilai 1(10-100) : <input type="text" name="angka1"><br/>
        </td>
       </tr>
       <tr>
        <td>
            Input Nilai 2(10-100) : <input type="text" name="angka2"><br/>
        </td>
       </tr>
       <tr>
        <td>
            Input Nilai 3(10-100) : <input type="text" name="angka3"><br/>
        </td>
       </tr>
       <tr>
        <td>
        <button>
       <input type="submit" name="hitung" value="Hitung">
       <input type="reset" name="hapus" value="Hapus">
       </button>
       </td>
       </tr>
       </table>    
    </form>
  
    <?php

    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $angka3 = $_POST['angka3'];

        $tambah = $angka1 + $angka2 + $angka3;
        $hasil = $tambah / 3;
        $kriteria;

        if ($hasil > 90){
            $kriteria = "Nilai A";
        }
        elseif ($hasil > 80){
            $kriteria = "Nilai B";
        }
        elseif ($hasil > 65){
            $kriteria = "Nilai C";
        }
        elseif ($hasil > 50){
            $kriteria ="Nilai D";
       }
        else {
           $kriteria = "Nilai E";
    }

    echo "<br/><b>Nama</b> : $nama ";
    echo "<br/><b>Nilai 1</b> : $angka1 ";
    echo "<br/><b>Nilai 2</b> : $angka2 ";
    echo "<br/><b>Nilai 3</b> : $angka3 ";
    echo "<br/><b>Jumlah Nilai</b> : $tambah ";
    echo "<br/><b>Rata-Rata Nilai</b> : $hasil ";
    echo "<br/><b>Kriteria Nilai Anda</b> : $kriteria ";
    
}
    ?>   
    
</body>
</html>


