<?php

    header("Location: index.php");

    $datos = json_decode(file_get_contents('php://input'));

    $archivo = 'notas.txt';
    file_put_contents($archivo, $datos . PHP_EOL, FILE_APPEND);

 ?>