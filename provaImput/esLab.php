<html>

<head>
    <title>es imput</title>
</head>

<body>

    <?php
    $form = '<form action="esLab.php" method="get">
    <label for="fname">nome:</label>
<input type="text" id="fname" name="fname"></br></br>
<label for="fcognome">cognome:</label>
<input type="text" id="fcognome" name="fcognome"></br></br>
<input type= "submit"value="SALVA"></br></br>';
echo $form;
    if (!empty($_GET["fname"] && !empty($_GET["fcognome"]))) {
        strip_tags($form);

        echo $_GET["fname"] . "</br>";
        echo $_GET["fcognome"] . "</br>";
   
    }
 
    ?>

</body>

</html>