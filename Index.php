<?php
//index.php
$link = new PDO('mysql:host=localhost;dbname=wildcine', 'root', '');

$result = $link->query('select `NomFilm` from film order by rand() limit 0,5');
?>

<!DOCTYPE>
<html>
<link rel="stylesheet" href="ChartreGraphique.css" />
	<head>
		<title>Wildcine</title>
	</head>
	<div id="menu">
	
	</div>
	
	<div id="contenu">
	<body>
	<h1> cinq film au Hazard </h1>
	<ul>
		<?php while ($row = $result ->fetch(PDO::FETCH_ASSOC)) 
		{	
		echo $row['NomFilm'].'<br>';
		}
		?>
	</div>
    </body>
</html>

<?php
$link = null;
?>
