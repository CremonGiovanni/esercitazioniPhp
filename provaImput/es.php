<html>

<head>
    <title>es</title>
</head>

<body>
    <?php
    $array = [
        "CAPONE" => "Capone",
        "DUNE" => "Dune",
        "THE HUNT" => "The hunt",
        "BLOODSHOT" => "Bloodshot",
        "TORNARE A VINCERE" => "Tornare a vincere",
        "LUOMO INVISIBILE" => "L'uomo invisibile",
        "SERGIO" => "Sergio",
        "TIGERTAIL" => "Tigertail",
        "LA FAMIGLIA WILLOUGHBY" => "La famiglia Willoughby",
        "COFFEE & KAREEM" => "Coffee & Kareem",
        "EMMA" => "Emma",
        "SPENSER CONFIDENTIAL" => "Spenser confidential",
    ];
    echo '<form action="es.php" method="get">';
    foreach ($array as $v) {
        echo '<input type="radio" name="title" value="' . $v . '"placeholder="' . $v . '>
        <label for="' . $v . '">' . $v . ' </label></br>';
    }
    echo '<label for="name">nome:</label>
<input type="text" name="name" placeholder="nome"></br></br>
<label for="cognome">cognome:</label>
<input type="text" name="cognome" placeholder="cognome"></br></br>
<label for="posti">posti:</label>
<input type="number" name="posti" placeholder="posti"></br></br>
<input type= "submit"value="prenota"></br></br>
</form>';
    if (!empty($_GET["name"])) {
        echo $_GET["name"] . "</br></br>" . $_GET["cognome"] . "</br></br>" . $_GET["title"] . "</br></br>" . $_GET["posti"];
    }





    ?>
</body>

</html>