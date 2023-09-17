<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
    echo $_SERVER["PHP_SELF"] ."<br/>" ; //çalışmakta olan dosyanın yol bilgisini döndürür.
    
    echo $_SERVER["GATEWAY_INTERFACE"] ."<br/>";//çalışmakta olan dosyanın serverının desteklediği CGI sürümünü belirtir

    echo $_SERVER["SERVER_ADDR"] ."<br/>" ; //calısmakta olan serverın ip adresini belirtir

    echo $_SERVER["SERVER_NAME"] ."<br/>" ;//serverın isim bilgisini döndürür

    echo $_SERVER["SERVER_SOFTWARE"] ."<br/>" ; //Serverın çalıştığı yazılımın bilgisini döndürür.

    echo $_SERVER["SERVER_PROTOCOL"] ."<br/>" ; //Dosyaya yapılan isteğin protokol bilgilerini verir

    echo $_SERVER["REQUEST_METHOD"] ."<br/>" ; //İsteğin hangi metodda gönderildiğini belirtir

    print_r($_SERVER); //Sunucuda kullanılan bütün server süperglobali işlevlerini ekrana yazdırır

    ?>
</body>
</html>