<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 $degerbir = 65.98;
 $degerbirveritürü =gettype($degerbir);

 echo "Birinci veri içeriği:" .$degerbir ."<br/>";
 echo "Birinci veri türü:" .$degerbirveritürü ."<br/>";

 $degeriki = (int)"5";
 $degerikiveritürü =gettype($degeriki);
 echo "İkinci veri içeriği:" .$degeriki ."<br/>";
 echo "İkinci veri türü:" .$degerikiveritürü ."<br/>";

?>
</body>
</html>