<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe data Objek</title>
</head>
<body>
    <h2>Tipe data Objek</h2>
    <?php
    class desl
    {
       var $str="Variabel Class";
       function set_vars($str)
       {
        $this->str=$str;
       }
    }
    $class=new class;
    echo $class->str;
    $class->set_vers("variabel objek");
    echo("<br>");
    echo $class->str;
    ?>

</body>
</html>