<?php 
    session_start();

include_once __DIR__."/controller/UsuarioController.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"]) && isset($_POST["clave"])) {

       $exito = UsuarioController::validarUsuarioClave($_POST["email"], $_POST["clave"]);
       
       if($exito) {
           header("location: index.php");
           return;
       } else {
           $errorMessage = "usuario o clave incorrectos";
       }
    }  
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width; initial-scale=1.0;">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
    </head>
    <body>
        <div id="contenido">
            <header>
                <div id="titulo">
                    <h1>Zona de Cumpleaños</h1>
                    <h3>XYZ</h3>
                </div>
                <div id="logo-empresa">
                    <img alt="logo empresa" src="logo.png"  />
                </div>
            </header>
            <div>
                <h1>pagina en construcción</h1>
            </div>

            <footer>
                <p>Diseño de Aplicaciones para Internet</p>
            </footer>
        </div>			
    </body>
</html>



