 <!doctype html>
<html lang="en">
<head>
<title>DATA BASE</title>
   <meta charset="Utf-8">
   <link href="style.css" rel="stylesheet">
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
<?php
$host='localhost';
$dbname='lab';
$user='root';
 $password='';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("set names utf8");
}

    catch(PDOException $e) {
    echo $e->getMessage();
   
}

$stmt = $db->query('SELECT * FROM glav INNER JOIN sem1 ON id = sem1.id1;');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo "<p>" . "id: " . $row['id'] . "&brvbar;" . "&nbsp;" . "FName: " . $row['fname'] . "&brvbar;" . "&nbsp;"  . "Name: " . $row['name']  . "&brvbar;" . "&nbsp;" . "OName: " . $row['oname'] . "&brvbar;" . "&nbsp;" . "Datar: " . $row['datar'] . "&brvbar;" . "&nbsp;" . "id1: " . $row['id1'] . "&brvbar;" . "&nbsp;" . "prog: " . $row['prog'] .  "&brvbar;" . "&nbsp;" . "web: " . $row['web'] ."&brvbar;" . "&nbsp;" . "inf: " . $row['inf'] ."&brvbar;" . "&nbsp;" . "fiz: " . $row['fiz'] ."&brvbar;" . "&nbsp;" . "mdk: " . $row['mdk'] ."</p>";
}
function area($width, $height)
{
	return $width * $height;
}
$area = area(5, 5);
echo $area;
?>
</div>
</body>
</html>
