<p>
    <?php
    $a = [];
    for ($i = 0; $i < 20; $i++) {
        $a[$i] = rand(1, 100);
        echo "pos $i= " . $a[$i] . "; ";
    }
    echo "</br></br>";
    $x = rand(1, 100);
    $b = 0;
    $c = 0;
    $d = 0;
    echo "num random= $x </br></br>";
    for ($i = 0; $i < 20; $i++) {
        switch ($x) {
            case ($x > $a[$i]):
                $b++;
                break;
            case ($x < $a[$i]):
                $c += $a[$i];
                break;
            case ($x == $a[$i]):
                $d++;
                break;
        }
    }
    echo "num > di x= $b </br></br>media num < di x= $c </br></br> num = a x= $d ";
    ?>
</p>