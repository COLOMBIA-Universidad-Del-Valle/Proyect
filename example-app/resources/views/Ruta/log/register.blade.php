<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/voto.css')}}">
  
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    
    <title>Portal</title>
  

</head>

<body>
    <div class="parent">
        <div class="div1"> Regístrate ahora y gestiona tus facturas de manera fácil, rápida y segura. ¡Hazlo en solo unos clics!</div>
        <div class="div2"> Crea una cuenta 
            <p class="subrayado"  >Es rápido y fácil.</p>
        </div>
        <div class="div3"> </div>


        <div class="div4">
            <input class="text" type="nombres" placeholder="Nombres...">
            <input class="text" type="apellidos" placeholder="Apellidos...">
            <input class="text" type="correo" placeholder="Correo....">
            <input class="text" type="telefono" placeholder="Telefono">
            <input class="text" type="contraseña" placeholder="Contraseña">
            <input class="text" type="verificacion" placeholder="Confirmar Contraseña...">
<p></p>
            <input class="submit" type="submit" value="registrate ">
        </div>

        <a href="{{url('/')}}" class="boton-salida" style="right: 95%;">
            &#88;
        </a>




        <div class="div5">     <footer>
            &copy; 2025 Mi Empresa - Todos los derechos reservados
        </footer> </div>
        </div>

</body>
</html>