<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    trait Ozellikbir{
    function Yazbir(){
        $Deger1 =__TRAIT__;
        echo $Deger1;
    }
    
    }
    trait Ozellikiki{
        function Yaziki(){
        $Deger2 =__TRAIT__;
        echo $Deger2;
        }
    }
     //iki ayrı trait tanımladık ve oluşturduğumuz class da traitleri kullandık.
    class siber{
        use Ozellikbir;
        use Ozellikiki;
    } 
    $Islem = new siber;
    $Islem->Yazbir(); //nesneye dönüştürdük ve fonksiyonları çağırdık
    $Islem->Yaziki();
?>
</body>
</html>