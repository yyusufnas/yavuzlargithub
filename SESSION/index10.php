<?php
session_start(); //session baslatıldı
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $_SESSION["Siber"] = "Yusuf Nas"; //siber adıyla tanımlı session değeri yusuf nas oldu
  $_SESSION["Email"] = "info@sibervatan.com";
  ?>  
</body>
</html>