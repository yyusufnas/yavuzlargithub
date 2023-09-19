<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   function Islem(){
  $isim="yusuf";
  $soyisim="nas";
   return($isim .$soyisim);
}
  $sonuc =Islem();
  echo  $sonuc;

?>
</body>
</html>