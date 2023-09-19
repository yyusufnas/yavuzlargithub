<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$sayilar = array(8,10,32,2,41,-5);
echo "<pre>";
print_r($sayilar);
echo "<pre>";
$kücük =min($sayilar);
$büyük =max ($sayilar);

echo"Dizinin en kücük degeri:"  . $kücük . "<br/>";
echo "Dizinin en büyük degeri:" .$büyük;
    ?>
</body>
</html>