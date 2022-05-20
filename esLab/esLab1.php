<?php
echo "<h1>da 1 a 20</h1></br>";
foreach (range(1, 20) as $num) {
    echo $num;
}
echo "<h1>da 1 a 20 solo num dispari</h1></br>";
foreach (range(1, 20, 2) as $num) {
    echo $num;
}
echo "<h1>da A a Z </h1></br>";
foreach (range("a", "z") as $num) {
    echo $num;
}
echo "<h1>da A a Z solo in posizioni pari</h1></br>";
foreach (range("b", "z", 2) as $num) {
    echo $num;
}
echo "<h1>da A a Z solo in posizioni dispari</h1></br>";
foreach(range("a","z", 2)as $num){
    echo $num;
}
echo "</br>";