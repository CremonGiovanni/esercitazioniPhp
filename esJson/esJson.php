<html>
    <head>
        <title>Json es 1</title>
    </head>
    <body>
    <?php
$filename = "listaOggetti.json";
if (file_exists($filename)) {
    $f = fopen($filename, "r");
    $fileJSON = fread($f, filesize($filename));
    $json = json_decode($fileJSON);
    fclose($f);
    $counter = $json->{"counter"};
    $counter++;
    $oggetti = $json ->{"oggetti"};
    $oggetti[] = createJson($counter);
    $arrayJSON = [
        "counter" => $counter,
        "oggetti" => $oggetti
    ];
    $f = fopen($filename, "w");
    fwrite($f, json_encode($arrayJSON));
    fclose($f);
} else {
    $counter = 1;
    $f = fopen($filename, "w");
    $arrayJSON = [
        "counter" => $counter,
        "oggetti" => [
         createJson($counter)
        ]
    ];
    fwrite($f, json_encode($arrayJSON));
    $fclose($f);
}
$f = fopen($filename, "r");
echo fread($f, filesize($filename));
fclose($f);
function createJson($counter) {
    $oggetto = [
        "id" => $counter,
        "nome" => $_GET["name"],
        "descrizione" => $_GET["description"],
        "prezzo" => $_GET["price"],
        "quantita" => $_GET["amount"],
        "disponibilita" => $_GET["dis"]
    ];
    return $oggetto;
}
?>
    </body>
</html>