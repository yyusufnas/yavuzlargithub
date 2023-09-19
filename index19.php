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
       $soneleman = end($isimler);
       echo "Dizi göstericisinin son konumundaki elemanın değeri:" . $soneleman;
       //son değeri ekrana yazdırır.
?>
</body>
</html>