<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="iconos/logos.ico">
    <link rel="stylesheet" href="main.css">
</head>
<section id="contenido">
 <body> <header> <div id="menu"> 
        <ul>
            <li><img id="iniciar" src="iconos/carrera.ico"/>Home</li><section>
     <h1 >Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    
    </header>  
    </body></section>
</html>