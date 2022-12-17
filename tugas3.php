<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
<body>
    <h2>Latihan 3 </h2>
    <?php
    $Pembelian=75000;
    $diskon=0;

    if($Pembelian>=100000)
    {
        $diskon=$Pembelian*(25/100);
    }elseif($Pembelian>=75000)
    {
        $diskon=$Pembelian*(20/100);
    }elseif($Pembelian>=50000)
    {
        $diskon=$Pembelian*(15/100);
    }elseif($Pembelian>=25000)
    {
        $diskon=$Pembelian*(10/100);
    }elseif($Pembelian>=10000)
    {
        $diskon=$Pembelian*(5/100);
    }
    $pembayaran=$Pembelian-$diskon;
    echo("<pre>");
    echo("Total Pembelian = RP.".$Pembelian."<br>");
    echo("Diskon  = RP.".$diskon."<br>");
    echo("Total Pembayaran = RP.".$pembayaran."<br>");
    echo("</pre>");
    ?>
    
    
</body>
</html>