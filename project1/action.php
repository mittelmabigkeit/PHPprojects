<meta charset="Utf-8">
<?php
$host='localhost';
$dbname='lab';
$user='root';
 $password='';
try
{
	$sql='INSERT INTO sem1 SET
	    prog=:prog,
		web=:web,
		inf=:inf,
		fiz=:fiz,
		mdk=:mdk';
	$s=$pdo->prepare($sql);
    $s->bindValue(':prog',$_POST['prog']);	
		
}
?>