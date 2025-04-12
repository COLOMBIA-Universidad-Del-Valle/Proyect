<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
    <link rel="stylesheet" href="{{asset('css/log.css') }}">
    <link rel="stylesheet" href="{{asset('css/voto.css') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    
    <title>Ingresar</title>
   
   
  

</head>

<body>

    <div class="parent">
        
        <div class="div1">
            <p style="padding: 0; margin: 0;">¡Bienvenido! Gestiona tus facturas de manera rápida y sencilla. Estamos aquí para ayudarte.</p>
            <p style="padding: 0; margin: 0;">o</p>
            
           <a class="a1" href=""><p >Registrate ahora mismo</p></a>  
        
        </div>
        <div class="div2"> </div>


            <div class="div3">  Inicio De Seción
                <p class="subrayado"> Aca te estamos esperando :) </p>
            </div>

                <div class="div4">
                     <input class="text" type="text" placeholder="Correo...."><p></p>
                     <input class="text" type="text" placeholder="Contraseña..."><p></p>
                
                
                </div>

                <div class="div5"> 
                    <input class="submit" type="submit" value="Iniciar Seción"> 
                    <p style="padding-top: 2%; margin: 0;"><a class="a2"  href="" >¿se te olvido la contraseña?</a></p>
                    <p style="padding: 0; margin: 0;">o</p>
                    <p style="padding: 0; margin: 0;"><a class="a2"  href="">¿no tienes cuenta? </a></p>


                    
                </div>

            <div class="div6"> </div>

        <div class="div7"> 
          
            <footer>
                &copy; 2025 Mi Empresa - Todos los derechos reservados
            </footer>
        

          
    </div>

    <a href="{{ url('/')}}" class="boton-salida">
        &#88;
    </a>
       
        </div>

        <script>
       const btnMenu = document.getElementById("btnMenu");
        const menu = document.getElementById("menu");

        
        function mostrarMenu() {
            menu.style.display = "block";
        }

       
        function ocultarMenu() {
            menu.style.display = "none";
        }

       
        btnMenu.addEventListener("click", mostrarMenu);
        btnMenu.addEventListener("mouseenter", mostrarMenu);

        
        menu.addEventListener("mouseleave", ocultarMenu);
    </script>

</body>

</html>