<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <?php 
    
    echo "<form method=POST action=ifelseif_dinamis2.php> 
    Masukkan Nilai Anda (10-100) : <input type=text name='nilai'>
    <input type=submit name='hitung' value=kirim>
    </form>";

    if (isset($_POST['hitung']))
    {
       if ($_POST['nilai'] > 90){
         echo "nilai $_POST[nilai] sangat bagus";
       }
       elseif ($_POST['nilai'] > 80){
         echo "nilai $_POST[nilai] bagus";
       }
       elseif ($_POST['nilai'] > 65){
         echo "nilai $_POST[nilai] cukup";
      }
       elseif ($_POST['nilai'] > 50){
         echo "nilai $_POST[nilai] kurang";
    }
       else {
        echo "nilai $_POST[nilai] kurang sekali";
    }
    }
    ?>
</body>
</html>