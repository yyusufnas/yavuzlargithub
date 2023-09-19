<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dizi1 = array ("Deger1" => "Volkan","Deger2"=>"Hakan","Deger3"=>"Yusuf");
    $dizi2 = array(0=>"Gökçe","Deger2"=> "Banu",2=>"Aslı",3=>"Derya","Deger1"=>"Hale");
    $dizi3 = array ("Sarı","Mavi","Beyaz","Siyah");
    $yenidizi = array_merge_recursive($dizi1,$dizi2,$dizi3);


    echo "<pre>";
    print_r($dizi1);
    echo "<pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "<pre>";

    echo "<pre>";
    print_r($dizi3);
    echo "<pre>";


?>
</body>
</html>