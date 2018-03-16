<!DOCTYPE html>
<html lang="de">
<head>
    <title>Welcome</title>
    <!--<meta charset="utf-8" />-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<br/>
	<br/>
	<br/>
	<h2>
		Die HaRo GmbH w&uuml;nscht <?php echo $_POST['firstname']; ?>
		<?php echo $_POST['lastname']; ?> 
		einen wundersch&ouml;nen und erfolgreichen Tag.
		<br/>
		<input type="button" onclick="alert('Hallo <?php echo $_POST['firstname'];  
								echo $_POST ['lastname']; ?>')" value="Click Me!">
	</h2>
</body>
</html>






