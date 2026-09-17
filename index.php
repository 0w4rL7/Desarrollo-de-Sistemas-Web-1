<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <title>Pagina de registro</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <h1>Captura de datos personales</h1>
            <br>
            <h2>Ingresa los datos que se te piden</h2>
            <br>
            <p>Mi primera encuesta</p>
            <hr>
           
           <!-- Etiqueta form configurada con action y metod POST --> 
          <form action="resultados.php" method="POST">
            
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="Ingresa tu nombre"/><hr>
            <br>

            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad"/><hr>
            <br>

            <label for="ciudad">Ciudad donde vides</label>
            <input type="text" id="ciudad" name="ciudad"/><hr>
            <br>

            <label for="fecha">Fecha de nacimiento</label>
            <input type="date" id="fecha" name="fecha"/><hr>
            <br>

            <label for="pasatiempo">Pasatiempo favorito</label>
            <input type="text" id="pasatiempo" name="pasatiempo"/><hr>
            <br>

            <a href="resultado.html">
            <button type="submit">Ingresamos datos</button>
            </a>
        
          </form>
        </center>
    </body>
</html>