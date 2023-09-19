<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  $baslangic =1;
  while($baslangic<=25){
    echo $baslangic ."<br/>";
    $baslangic++;
  }
  echo "<br/><br/><br/>";

   function islemyap($sayi){
    echo $sayi ."<br />";
    islemyap($sayi++);
   }
   
    ?>
</body>
</html>