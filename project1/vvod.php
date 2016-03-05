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
<form action="action.php" method="post" enctype="multipart/form-data">
	Имя: <input type="text" name="name" /><br />
	Фамилия: <input type="text" name="surname" /><br />
	Отчество: <input type="text" name="oname" /><br />
	Программирование: <input type="text" name="prog" /><br />
	Веб: <input type="text" name="web" /><br />
	Информатика: <input type="text" name="inf" /><br />
	Физкультура: <input type="text" name="fiz" /><br />
	МДК: <input type="text" name="mdk" /><br />
	<input type="submit" value="Отправить форму" />
</form>
</div>
</body>
</html>