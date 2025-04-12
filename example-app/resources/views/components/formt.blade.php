<link rel="stylesheet" href="{{asset('css/formt.css') }}">
    
<div class="barra-superior-1">
    <button class="menu-toggle">☰</button>
    <span>Invoice Day</span>
    <div class="menu" id="menu">
        <button class="menu-toggle">☰</button>
        <button class="menu-toggle">─</button>
        
        <button class="menu-toggle">x</button>
        
        <a href="#">Inicio</a>
        <a href="#">Servicios</a>
        <a href="#">Contacto</a>
        <a href="#">Acerca de</a>
    </div>
</div>


    <script>

document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.getElementById("menu");

    // Mostrar/ocultar el menú
    menuToggle.addEventListener("click", function() {
        menu.classList.toggle("activo");
    });

    // Funcionalidad de arrastrar el menú
    let isDragging = false;
    let offsetX, offsetY;

    menu.addEventListener("mousedown", function(e) {
        isDragging = true;
        offsetX = e.clientX - menu.getBoundingClientRect().left;
        offsetY = e.clientY - menu.getBoundingClientRect().top;
        menu.classList.add("moving");
    });

    document.addEventListener("mousemove", function(e) {
        if (isDragging) {
            let x = e.clientX - offsetX;
            let y = e.clientY - offsetY;

            // Evitar que se salga de la pantalla
            x = Math.max(0, Math.min(window.innerWidth - menu.offsetWidth, x));
            y = Math.max(0, Math.min(window.innerHeight - menu.offsetHeight, y));

            menu.style.left = x + "px";
            menu.style.top = y + "px";
        }
    });

    document.addEventListener("mouseup", function() {
        isDragging = false;
        menu.classList.remove("moving");
    });
});


       
      </script>
