<?php
$a = [];
for ($i = 0; $i < 20; $i++) {
    $a[$i] = rand(1, 15);
    if($a[$i]>$i){
        echo "pos $i= ".$a[$i]."; "; 
    }
}
