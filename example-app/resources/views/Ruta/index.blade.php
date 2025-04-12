<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
    <link rel="stylesheet" href="{{asset('css/index.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    
    <title>Portal</title>
   
   
  

</head>

<body>
    <div class="div1">
    

        <div class="cort2">
            <a href="/" class="a2">Invoice Day</a>
        </div>

        <div class="cort3">
           <a href=" /log" class="a1">Iniciar</a> 
        </div>

        <div class="cort4">
          <a href="/register" class="a1">Registrar</a>  
        </div>

  
    </div>

    <div class="contenido">
        <div class="goku">
            <div class="carrusel" id="carrusel">
                <img src="{{asset('img/engineer-4925136.jpg')}}" alt="imagen 1">
                <img src="{{asset('img/engineer-4941341.jpg')}}" alt="imagen 2" >
                <img src="{{asset('img/engineer-4941351.jpg')}}" alt="imagen 3">
            </div>
            <div class="botones" id="botones"></div>
            <p class="p1">Facturacion en linea gratis</p>
            <p class="p1" style="top: 20%;">Satisface a tus clientes con facturas rapidas y organizadas. </p>
        </div>
  
    </div>
   
   

    <footer>
        <p>&copy; 2025 Mi Empresa - Todos los derechos reservados</p>
    </footer>
    
</body>
<script>
    const carrusel = document.getElementById('carrusel');
    const botonesContainer = document.getElementById('botones');
    const imagenes = document.querySelectorAll('.carrusel img');
    let index = 0;
    let intervalo;

    
    imagenes.forEach((_, i) => {
        let boton = document.createElement('button');
        boton.classList.add('boton');
        if (i === 0) boton.classList.add('activo');
        boton.addEventListener('click', () => {
            cambiarImagen(i);
            reiniciarIntervalo();
        });
        botonesContainer.appendChild(boton);
    });

    function cambiarImagen(nuevaIndex) {
        index = nuevaIndex;
        carrusel.style.transform = `translateX(-${index * 100}vw)`;
        actualizarBotones();
    }

    function actualizarBotones() {
        document.querySelectorAll('.boton').forEach((boton, i) => {
            boton.classList.toggle('activo', i === index);
        });
    }

    function cambiarImagenAuto() {
        index = (index + 1) % imagenes.length;
        cambiarImagen(index);
    }

    function reiniciarIntervalo() {
        clearInterval(intervalo);
        intervalo = setInterval(cambiarImagenAuto, 5000); 
    }

    
    intervalo = setInterval(cambiarImagenAuto, 5000);
</script>



</html>