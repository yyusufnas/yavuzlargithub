<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*GLOBALDEN LOCALE AKTARMA 
    GLOBALDEN LOCALE AKTARMA İLE LOCALDEN GLOBALE AKTARMADA KULLANIM FARKLILIĞI VARDIR
                                          */
    $GLOBALS["isim"]="yusuf";
    function Deneme2(){
    echo $GLOBALS["isim"];
    }
    ?>
</body>
</html>