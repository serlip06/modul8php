<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
    <h2>pengnaan kontrol for</h2>
    <b>Nama bulan : </b><br>
    <?php
    $Bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","November","Desember")
    for ($i-0;$i<count($bulan) ;$i++)
    {
        echo(($i+1) , "$bulan[$i] <br> ");
    }
    ?>

</body>
</html>