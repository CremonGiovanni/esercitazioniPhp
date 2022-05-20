<html>

<head>
    <title>es 01</title>
</head>

<body>
    <form action="es01.php" method="get">
        <input type="text" name="email">
        <br>
        <input type="text" name="psw">
        <br>
        <button name="accedi">accedi</button>
    </form>
    <?php
    $file = "credenziali.txt";
    $bool=false;
    $c = fopen($file, "r");
    while (!feof($c)) {
        echo fgets($c)."</br>";
    }
    fclose($c);

    $f=fopen($file, "r");
    if (!empty($_GET)) {
        while (!feof($f)) {
            $controllo = explode(";",fgets($f));
            $controllo[0] = trim($email, " \n\r\t");
            $controllo[1] = trim($psw, " \n\r\t");
            echo $controllo[0];
            if ($_GET["mail"] == $controllo[0] && $_GET["psw"] == $controllo[1]) {
                echo "si";
                $bool = true;
                break;
            }
        }
        if ($bool == false) {
            echo "no";
        }
        fclose($f);
    }
    ?>
</body>

</html>