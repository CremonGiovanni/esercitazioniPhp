<html>

<head>
    <title>es 01 funzioni</title>
</head>

<body>
    <?php
    function CreaArray($a, $b)
    {
        for ($i = 0; $i < $a; $i++) {
            $array[$i] = rand(0, $b - 1);
        }

        return $array;
    }

    function stampaLista($array)
    {
        foreach ($array as $valore) {
            echo "$valore, ";
        }
    }
    function ordinamentoCrescente($array)
    {
        do {
            $controllo = false;
            for ($i = 0, $c = count($array) - 1; $i < $c; $i++) {
                if ($array[$i] > $array[$i + 1]) {
                    list($array[$i + 1], $array[$i]) =
                        array($array[$i], $array[$i + 1]);
                    $controllo = true;
                }
            }
        } while ($controllo == true);
        return $array;
    }
    function ordinamentoDecrescente($array)
    {
        do {
            $controllo = false;
            for ($i = 0, $c = count($array) - 1; $i < $c; $i++) {
                if ($array[$i] < $array[$i + 1]) {
                    list($array[$i + 1], $array[$i]) =
                        array($array[$i], $array[$i + 1]);
                    $controllo = true;
                }
            }
        } while ($controllo == true);
        return $array;
    }
    function cercaNum($num, $array)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $num) {
                echo "true";
                break;
            } else {
                echo "false";
                break;
            }
        }
    }
    function media($array)
    {
        $m = 0;
        for ($i = 0; $i < count($array); $i++) {
            $m += $array[$i];
        }
        $m /= count($array);
        echo $m;
    }
    $a = 15;
    $b = 20;
    $lista = creaArray($a, $b);
    echo "<h2>Elementi Array</h2>";
    stampaLista($lista);
    echo "</br>Controollo 13: ";
    cercaNum(13, $lista);
    echo "</br>media: ";
    media($lista);
    echo "</br>";
    stampaLista(ordinamentoCrescente($lista));
    echo "</br>";
     stampaLista(ordinamentoDecrescente($lista));
    ?>
</body>

</html>