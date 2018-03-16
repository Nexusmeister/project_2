<!DOCTYPE html>
<html lang="de">
<head>
    <title>WebToolBox</title>
    <!--<meta charset="utf-8" />-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div id="header">
        <img src="Bilder/BannerWebToolBox.png" alt="Banner">
    </div>
    <div id="main">
        <div class="navi">
            <ul>
                <li>
                    <h3>unsere WebTools </h3>
                </li>
                <li>
                    <a href="startseite.php" target="frame1">Startseite</a>
                </li>
                <li>
                    <a href="bmi_calcu.php" target="frame1">BMI-Rechner</a>
                </li>
                <li>
                    <a href="clock.php" target="frame1">Aktuelle Uhrzeit</a>
                </li>
                <li>
                    <a href="welcome.html" target="frame1">Welcome!</a>
                </li>
                <li>
                    <a href="under_construction.html" target="frame1">Tool 4</a>
                </li>
                <li>
                    <a href="under_construction.html" target="frame1">Tool 5</a>
                </li>
            </ul>
        </div>
        <div id="content">
            <iframe id="framefenster" src="startseite.php" name="frame1"></iframe>
        </div>
        <div class="navi">
            <ul>
                <li>
                    <h3> noch mehr WebTools </h3>
                </li>
                <li>
                    <a href="under_construction.html" target="frame1">Tool 6</a>
                </li>
                <li>
                    <a href="under_construction.html" target="frame1">Tool 7</a>
                </li>
                <li>
                    <a href="under_construction.html" target="frame1">Tool 8</a>
                </li>
                <li>
                    <a href="under_construction.html" target="frame1">Tool 9</a>
                </li>
                <li>
                    <a href="under_construction.html" target="frame1">Tool 10</a>
                </li>
                <li>
                    <a href="main.html" target="frame1">Project 1</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="footer">
        <p>Copyright © <?php echo date("Y");?> Kaltenbach GmbH</p>
    </div>
</body>
</html>