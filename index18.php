<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $isimler = array("yusuf","mert","resul");

    echo "<pre>";
        print_r($isimler);
        echo "<pre> <br/>";
        $elemansayisi = count($isimler);
        echo " dizi icerisindeki eleman sayisi:" . $elemansayisi; //dizinin eleman sayısını yazdırır
        ?> 
</body>
</html>