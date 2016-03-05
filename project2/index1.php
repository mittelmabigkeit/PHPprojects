
<?php
$stmt = $db->query('SELECT * FROM id INNER JOIN sem1 ON id=sem1.id1;');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo "<p>".  $row['имя']. "&nbsp;" . $row['фамилия']. "&nbsp;" . $row['отчество']. "&nbsp;" . $row['дата']. "&nbsp;" . $row['предмет1']. "&nbsp;" . $row['предмет2'].  "&nbsp;" . $row['предмет3']. "&nbsp;" .  $row['предмет4']."</p>";


}
?>
