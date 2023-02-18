<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

    <div class="webudvikling">
      <h1>Webudvikling</h1>
    </div>

    <div class="main">
        <div class="overskrift">
            <h2>Opgave1</h2>
        </div>
        <div class="tekst">
            Dette er Lea´s første forsøg på at lave en side med readme.
        </div>
        <br>
        <div class="billede">
            <img src="images/coding.jpg" width="300px" height="100px">
        </div>
    </div>

    <div class="footer">
        <div>
            <p>Lea Heuser</p>
        </div>
        <div>
            <p>Multimediedesign</p>
        </div>
        <div>
            <p>2.semester</p>
        </div>
    </div>

<?php
echo ""
?>

</body>
</html>
