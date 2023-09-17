<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    setcookie("Siber","Yusuf Nas"); //Siber adında bir cookie tanımladık ve içeriğine 
                                      //Yusuf Nas yazdırdık

    $Cerez =$_COOKIE["Siber"]; //yazdırdığımız cookie içeriğini Cerez degiskenine atadık
    echo $Cerez; //ekranda yazdırdık
    ?>
</body>
</html>