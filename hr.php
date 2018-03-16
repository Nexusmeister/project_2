<!DOCTYPE html>
<html lang="de">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Project 2 Hr</title>
</head>
<body>

<!-- Tab content -->
  <h3>Stundenaufzeichnung</h3>
  <div class="main">
      
    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";
    ?>
	
	
</div>






</body>
</html>