<html>

<head>
    <title>frstPage</title>
</head>

<body>
    <?php

        $f=fopen("text.txt","r");
        $x=intval(fgets($f));
        echo $x;
        $x+=1;
        $x=strval($x);
        fclose($f);
        $f2=fopen("text.txt","w");
        fwrite("text.txt", $x);
        fclose($f2);
    ?>
</body>

</html>