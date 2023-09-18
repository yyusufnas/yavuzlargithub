<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   define("isim","yusufnas");

   echo isim;       //define ile sabiti tanımlıyoruz.
                     //etki alanı kurallarına dahil değildir atanan sabit local ve globalde calısabilir
                     
   const soyisim ="Nas"; //const da bir sabittir kullanımı define dan farklıdır
   echo soyisim;                  

?>
</body>
</html>