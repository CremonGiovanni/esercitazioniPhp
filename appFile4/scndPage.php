<html>
<head>
    <title>Second Page</title>
</head>
<body>
    <?php
    $x;
    $f=fopen("f.txt","r");
    while(!feof($f)){
        $s=explode(" ",fgets($f));
        for($i=0;$i<count($s); $i++){
            if($s[$i]==$_GET["word"]){
                $x++;
            }
        }
    }
    echo "<h1>$x</h1>"
    ?>
</body>
</html>