<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    /* LOCALDEN GLOBALE AKTARMA
    $GLOBALS süper globaliyle localde oluşturduğumuz değişkeni globalde veya 
    tam tersi bir şekilde çalıştırabiliriz */

   function Deneme(){
    $GLOBALS["Name"]="Yusuf Nas";
   }
Deneme();
echo $Name;
?>
</body>
</html>