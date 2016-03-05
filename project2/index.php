<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
 <link href="style.css"rel="stylesheet">
  <title>MY SITE</title>
 </head>
 <body>
   <div class="vivod-block">
        <a href="vivod.php">
        ВЫВОД
        </a>
      </div>
   <div class="vvod-block">
        <a href="vvod.php">
        ВВОД
        </a>

      </div>
   <div class="central-block">
     <center><img src="burning-street-2-1356678.jpg." width="550" height="255" alt="lorem"></center>
   <div class="block1">
     
<?php
$host='localhost';
$dbname='3pk';
$user='redactor';
 $password='';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("set names utf8");
}
catch(PDOException $e) {
    echo $e->getMessage();

}
include "index1.php";
?>
 </div>
</body>
</html>
