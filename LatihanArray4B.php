<?php
$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping For Array</title>
</head>
<body>
    <p><b>Daftar Negara ASEAN awal : </b></br>
    <?php
    for ($i=0; $i < count($negara); $i++)
    echo "<li>$negara[$i]</li>"
    ?>
    <p><b>Daftar Negara ASEAN baru : </b></br>
    <?php
    $hasil = array_push($negara, "Laos", "Filipina", "Myanmar");
    for($i=0; $i<count($negara); $i++)
    echo "<li>$negara[$i]</li>"
    ?>
</body>
</html>