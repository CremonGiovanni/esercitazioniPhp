<html>

<head>
    <title>second page</title>
</head>

<body>
    <?php

    if (file_exists("_" . $_GET["title"] . ".txt")&&is_file("_" . $_GET["title"] . ".txt")) {

        $f = fopen("_" . $_GET["title"] . ".txt", "r");
        while (!feof($f)) {
            echo fgets($f) . "</br>";
        }
        fclose($f);
        $info = stat("_" . $_GET["title"] .".txt");
        if($info !==false){
            echo"<h1>INFO</h1>";
            foreach($info as $k=>$v){
                echo "$k: $v; </br>";
            }
        }
    } else {
        echo "<h1>"."_" . $_GET["title"] . ".txt". "non esiste nessun file</h1>";
    }

    ?>
</body>

</html>