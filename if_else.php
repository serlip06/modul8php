<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if</title>
</head>
<body>
    <h2>Penggunaan kontrol If</h2>

    <?php
    $umur=15;
    echo("Umur anda $umur tahun <br>");
    if($umur>=17)
    {
        echo("anda boleh masuk");
    }else
    {
        echo("anda tidak boleh masuk"); 
    }

    ?>


</body>
</html>