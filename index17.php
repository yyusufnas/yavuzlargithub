<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 
  $dizi = array("yusuf","nas",array("zonguldak","merkez","bakka",array("istanbul","ankara")));
  
  echo $dizi[0]. "<br/>" ;
  echo $dizi[2][1] . "<br/>";
  echo $dizi[2][3][0]. "<br/>"; //cok boyutlu dizi oluşturma ve ekrana yazdırma

?>
</body>
</html>