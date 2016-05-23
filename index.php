<html>
    <body>
    Coucou ceci est du html<br />
    <?php
    echo "juste un include";
    echo "<br />";
    include("test.php");
    echo "<br />";
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