<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <center>
        <h1>Resultados</h1>
        <img style="max-height: 200p;" src="https://images3.memedroid.com/images/UPLOADED235/661ff73f00df0.jpeg">
        
            <br><br>

            <?php
            //Captura de variables
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $ciudad = $_POST['ciudad'];
            $fecha = $_POST['fecha'];
            $pasatiempo = $_POST['pasatiempo']; 

            //Concatenacion
            echo '<p><b>Nombre: </b>'.$nombre.'</p>';
            echo '<p><b>Edad: </b>'.$edad.'</p>';
            echo '<p><b>Ciudad: </b>'.$ciudad.'</p>';
            echo '<p><b>Fecha de nacimiento: </b>'.$fecha.'</p>';
            echo '<p><b>Pasatiempo: </b>'.$pasatiempo.'</p>';
            ?>

            <h2>¡Bien hecho!</h2>

            <!-- Estructura HTML para la caja del Pop-Up[cite:7] -->
            <div id="popUpOverlay"></div>
            <div id="popUpBox" style="display:none; background:#ffe4e1; padding:20px; border-radius:10px; position:absolute; top:30%; left:40; border:1px solid">
                <div id="box">
                    <i class="fas fa-question-circle fa-5x"></i>
                    <h1>¿Volver a ingresar datos?</h1>
                    <!--Espacio donde JS injectara ek biton de forma dinamica[cite:7] --> 
                    <div id="closeModal"></div>
                </div>
            </div>

            <!-- Boton que activara la funcion de JavaScript de la variable Alert[cite:7] --> 
             <button onclick="Alert.render('you look very pretty today.')" class="btn">Volver a ingresar</button>
             
             <!-- Llamada al archivo de JS[cite:7] --> 
             <script src="./app.js"></script>

        </center>
</body>
</html>
