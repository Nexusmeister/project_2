<!DOCTYPE html>
<html lang="de">
<head>
    <title>Startseite</title>
    <!--<meta charset="utf-8" />-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Aktuelle Uhrzeit</h1>
    <p>  
		<?php 
			$hour = date("H");
			$minute = date("i");
			$adding = $hour+1;
			$hour_2 = 60;
			$result = $hour_2 - $minute;
			echo "Die Aktuelle Uhrzeit betr&auml;gt <b>$hour Uhr und $minute Minuten</b><br/><br/>"; 
			echo "In einer Stunde ist es $adding Uhr und $minute Minuten<br/><br/>";
			echo "Bis zur n&auml;chsten vollen Stunde sind es noch $result Minuten.";
		?>			
	</p>
</body>
</html>