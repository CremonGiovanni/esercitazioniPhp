<html>

<head>
    <title>second page</title>
</head>

<body>
    <?php

    if (file_exists($_GET["title"])&&is_file("_" . $_GET["title"] . ".txt")) {

        $f = fopen( $_GET["title"], "w+");
        fwrite($f, $_GET["cont"]);
        echo fgets($f);       
        fclose($f);
    } else {
       echo "<h1>".$_GET["title"]. " non esiste nessun file</h1>";
   }

    ?>
</body>

</html>