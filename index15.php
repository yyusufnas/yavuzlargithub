<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $dizi=array("Sibervatan" => "YusufNas","BAKKA" =>"Siber vatan");//Siber Vatan ve BAKKA bir anahtardır,yanlarındakiler ise değerleridir.
    echo $dizi["Sibervatan"]; //Siber vatan anahtarını yazdırıyoruz.Eğer anahtar girmeseydik default olarak index değerini alırdı. =0
    echo $dizi["BAKKA"];//BAKKA anahtarını yazdırıyoruz.Eğer anahtar girmeseydik default olarak index değerini alırdı. =1
    ?>
</body>
</html>