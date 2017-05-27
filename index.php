<?php
    session_start();   
    //$_SESSION["nombre"] = "Juan Pérez";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width; initial-scale=1.0;">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
        <script type="text/javascript" src="js/validaCamposLogin.js"></script>
    </head>
    <body>
        <div id="contenido">
            <header>
                <div id="titulo">
                    <h1>Zona de Cumpleaños</h1>
                    <h3>DUOC UC</h3>
                </div>
                <div id="logo-empresa">
                    <img alt="logo empresa" src="logo.png"  />
                </div>
            </header>
            <form action="inicioSesion.php" method="post">
                <div id="login">	
                    <div id="formulario">
                        <div>
                            <P id="parrafo">
                            <h2>
                                Bienvenido a Zona Cumpleaños, en esta aplicacion podras compartir la fecha
                                de cumpleaños de tus colaboradores para que asi nadie olvide saludar y celebrar
                                cuando alguno este en su dia
                            </h2>

                        </div>

                        <input type="submit" name="entrar" value="Configuracion" />
                        <input type="button" name="salir" value="Presentacion" onclick="validaCampos()"/>
                    </div>				
                </div>
            </form>
            <footer>
                <p>Diseño seccion 003 - 2017</p>
            </footer>
        </div>			
    </body>
</html>


