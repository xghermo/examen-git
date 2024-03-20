<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto']; // Obtiene el texto enviado desde el formulario

    $archivo = 'notas.txt';
    file_put_contents($archivo, $texto . PHP_EOL, FILE_APPEND); // Guarda el texto en el archivo

}

 ?>