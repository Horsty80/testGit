<html>
    <body>
    Coucou ceci est du html<br />
    <?php
    echo "juste un include";
    echo "<br />";
    include("test.php"); ?>
    <br />
    <table border="1" cellpadding="0" cellspacing="0">

<tr>

<th>Nom du site</th>

<th>URL</th>

</tr>
<?php include ("testBDD.php"); ?>
</tr>

</table>
   <?php echo "<br />";
    echo "ceci est un echo c'est donc du php";
    echo "<br />";
    $compteur = 1;
    while($compteur < 10){
        echo $compteur;
        echo "<br />";
        $compteur++;
    }
    ?>
    </body>
</html>