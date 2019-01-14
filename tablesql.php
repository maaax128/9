<?php
$pdo = new pdo ("mysql:host=localhost;dbname=hw;charset=UTF8", "root", "985958");
$sth = $pdo->prepare('SELECT * FROM books');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <title>Библиотека успешного человека</title>    
</head>
<body>
<h1>Библиотека успешного человека</h1>

<table border="1">
<tr>
	<td>Название</td>
	<td>Автор</td>
	<td>Год выпустка</td>
	<td>Жанр</td>
	<td>ISBN</td>
</tr>
<?php 


foreach ($result as $key => $value) { ?>
	<tr>		
		<td><?php echo $value['name']; ?></td>
		<td><?php echo $value['author']; ?></td>
		<td><?php echo $value['year']; ?></td>
		<td><?php echo $value['isbn']; ?></td>
		<td><?php echo $value['genre']; ?></td>
	</tr>
<?php	

}

?>


</table>
</body>
</html>
