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
    $sonuc = implode($isimler);
    echo $sonuc;        //dizi değerlerini tek bir satır halinde yazdırır
    ?>
</body>
</html>