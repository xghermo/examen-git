<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Examen Notas-Git</title>
</head>
<body>
    <h1>COMUNIDAD BLOGGER</h1>

    <form action="notas.php" method="POST">
        <h2>¡¡¡Bienvenid@s a la mayor comunidad blogger de todo el localhost!!! XD</h2>

        <input type="text" name="nombre" id="nombre" placeholder="Nombre :)" required>
        <br>
        <br>
        <textarea name="texto" id="texto" cols="50" rows="5" placeholder="Escribe aquí tus experiencias, anecdotas o lo que te apetezca compartir con esta nuestra comunidad (L)(L)" required></textarea>
        <br>
        <br>
        <button>COMPARTIR! XD</button>
    </form>

    <section id="notas" name="notas">
        <h3>Notas compartidas:</h3>

        <?php

        $notas="notas.txt";
        $arrayNotas=file($notas);

        if($arrayNotas){
            foreach ($arrayNotas as $notas){
                echo($notas."<br><hr>");
            }
        }
        ?>

    </section>
    
</body>
</html>