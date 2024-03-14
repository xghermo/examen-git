<?php
    header("Location: index.php");


    if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $notaIntroducida=($_POST['nombre']).": ".($_POST['texto']);

    $notas="notas.txt";

    $abrir=(fopen($notas,"a"));
    fwrite($abrir, $notaIntroducida . PHP_EOL);
    fclose($abrir);
    }

?>