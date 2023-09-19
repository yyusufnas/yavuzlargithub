<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  class deger {
    public $isim ="Yusuf Nas";
  }
  $islem = new Deger;     //gettype kullanımı
  $sonuc =gettype($islem);
  echo $islem->isim . "<br/>";
  echo "Veri Türü:". $sonuc;
    ?>
</body>
</html>