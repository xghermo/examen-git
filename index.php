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

    <form action="index.php" method="POST">
        <h2>¡¡¡Bienvenid@s a la mayor comunidad blogger de todo el localhost!!! XD</h2>

        <input type="text" name="nombre" id="nombre" placeholder="Nombre :)" required>
        <br>
        <textarea name="texto" id="texto" cols="50" rows="5" placeholder="Escribe aquí tus experiencias, anecdotas o lo que te apetezca compartir con esta nuestra comunidad (L)(L)" required></textarea>
        <br>
        <button onclick="mandar()">COMPARTIR! XD</button>
    </form>

    <section id="notas" name="notas">
        <h3>Notas compartidas:</h3>
        <?php
        $archivo = 'notas.txt';
        if (file_exists($archivo)) {
            $contenido = file_get_contents($archivo);
            echo nl2br($contenido);
        } else {
            echo "No hay notas guardadas.";
        }
        ?>
    </section>

        <script>
            function mandar(){

                let nombre=document.getElementById("nombre").value;
                let texto=document.getElementById("texto").value;
                let laLista=nombre+": "+texto;
           
                (async () => {
                    try {
                        let datos = laLista;
                        
                        let init = {
                            method: "POST",
                            headers: { 
                                'Content-Type': 'application/json'
                            },
                        
                            body: JSON.stringify(datos)
                        };

                        let response = await fetch('./notas.php', init);

                        if (response.ok) {

                            let datos = await response.json();
                            console.log("Datos introcudidos: "+datos)

                        } else {
                            throw new Error(response.statusText);
                        }

                    } catch (err) {
                        console.log("Error al realizar la petición AJAX: " + err.message);
                    }
                })();
                }

        </script>

</body>
</html>